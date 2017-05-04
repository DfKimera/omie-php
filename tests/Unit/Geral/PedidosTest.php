<?php
/**
 * omie-php
 * PedidosTest.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:45
 */

namespace Tests\Unit\Geral;


use DfKimera\OmiePhp\Structs\Cliente;
use DfKimera\OmiePhp\Structs\Frete;
use DfKimera\OmiePhp\Structs\Impostos\Imposto;
use DfKimera\OmiePhp\Structs\Pedido;
use DfKimera\OmiePhp\Structs\PedidoCabecalho;
use DfKimera\OmiePhp\Structs\PedidoInfosAdicionais;
use DfKimera\OmiePhp\Structs\PedidoInfosCadastro;
use DfKimera\OmiePhp\Structs\PedidoItem;
use DfKimera\OmiePhp\Structs\PedidoItemIdentificador;
use DfKimera\OmiePhp\Structs\PedidoItemInfosAdicionais;
use DfKimera\OmiePhp\Structs\PedidoItemProduto;
use DfKimera\OmiePhp\Structs\PedidoLista;
use DfKimera\OmiePhp\Structs\PedidoParcela;
use DfKimera\OmiePhp\Structs\PedidoResponse;
use DfKimera\OmiePhp\Structs\PedidoStatus;
use DfKimera\OmiePhp\Structs\PedidoTotal;
use DfKimera\OmiePhp\Structs\Produto;
use Illuminate\Support\Collection;
use Tests\TestCase;

class PedidosTest extends TestCase {

	public function testListarPedidos() {
		$pedidos = $this->getOmie()->pedidos();

		$result = $pedidos->listar();

		$this->assertInstanceOf(PedidoLista::class, $result);
		$this->assertObjectHasAttribute('pagina', $result);
		$this->assertObjectHasAttribute('total_de_paginas', $result);
		$this->assertObjectHasAttribute('registros', $result);
		$this->assertObjectHasAttribute('total_de_registros', $result);

		$this->assertInstanceOf(Collection::class, $result->pedidos);
		$this->assertGreaterThan(0, $result->pedidos->count());
		$this->assertEquals(1, $result->pagina);
		$this->assertGreaterThan(0, $result->total_de_paginas);
		$this->assertGreaterThan(0, $result->total_de_registros);

		$pedido = $result->pedidos->first(); /* @var $pedido Pedido */
		$this->assertInstanceOf(Pedido::class, $pedido);
		$this->assertInstanceOf(PedidoCabecalho::class, $pedido->cabecalho);
		$this->assertInstanceOf(PedidoTotal::class, $pedido->total_pedido);
		$this->assertInstanceOf(PedidoInfosAdicionais::class, $pedido->informacoes_adicionais);
		$this->assertInstanceOf(PedidoInfosCadastro::class, $pedido->infoCadastro);
		$this->assertInstanceOf(Frete::class, $pedido->frete);
		$this->assertInternalType('string', $pedido->observacoes);

		$this->assertInstanceOf(Collection::class, $pedido->lista_parcelas);
		$this->assertGreaterThan(0, $pedido->lista_parcelas->count());
		$this->assertInstanceOf(PedidoParcela::class, $pedido->lista_parcelas->first());

		$this->assertInstanceOf(Collection::class, $pedido->itens);
		$this->assertGreaterThan(0, $pedido->itens->count());
		$this->assertInstanceOf(PedidoItem::class, $pedido->itens->first());

		$item = $pedido->itens->first();

		$this->assertInstanceOf(PedidoItemIdentificador::class, $item->ide);
		$this->assertInstanceOf(PedidoItemProduto::class, $item->produto);
		$this->assertInternalType('string', $item->observacao);
		$this->assertInstanceOf(PedidoItemInfosAdicionais::class, $item->inf_adic);
		$this->assertInstanceOf(Imposto::class, $item->imposto);

	}

	public function testIncluirConsultarStatusPedido() {

		$pedidos = $this->getOmie()->pedidos();

		$clientes = $this->getOmie()->clientes();
		$cliente = $clientes->listar()->clientes->first(); /* @var $cliente Cliente */

		$produtos = $this->getOmie()->produtos();
		$listaProdutos = $produtos->listar()->produtos->take(3);
		$produtoA = $listaProdutos->pop(); /* @var $produtoA Produto */
		$produtoB = $listaProdutos->pop(); /* @var $produtoB Produto */
		$produtoC = $listaProdutos->pop(); /* @var $produtoC Produto */

		$codPedidoIntegracao = uniqid();

		$pedido = new Pedido();
		$pedido->lista_parcelas = collect([
			new PedidoParcela([
				'numero_parcela' => 1,
				'valor' => 100,
				'percentual' => 100,
				'data_vencimento' => '2017-12-12',
				'quantidade_dias' => 120,
			])
		]);
		$pedido->frete = new Frete([
			'quantidade_volumes' => 1,
			'marca_volumes' => 'ABC',
			'numeracao_volumes' => 123,
			'peso_liquido' => 100,
			'peso_bruto' => 99,
			'valor_frete' => 10,
			'valor_seguro' => 0,
		]);

		$pedido->cabecalho = new PedidoCabecalho([
			'codigo_pedido_integracao' => $codPedidoIntegracao,
			'codigo_cliente' => $cliente->codigo_cliente_omie,
			'data_previsao' => date('d/m/Y'),
			'quantidade_itens' => 3,
			'codigo_parcela' => '000',
			'qtde_parcelas' => 1,
		]);

		$pedido->itens = collect([
			new PedidoItem([
				'ide' => new PedidoItemIdentificador([
					'codigo_item' => $produtoA->codigo_produto,
					'codigo_item_integracao' => $produtoA->codigo_produto_integracao,
				]),
				'produto' => new PedidoItemProduto([
					'codigo_produto' => $produtoA->codigo_produto,
					'quantidade' => 5,
					'valor_unitario' => 15,
					'valor_total' => 15,
				]),
				'observacao' => 'Lorem ipsum dolor',
			]),
			new PedidoItem([
				'ide' => new PedidoItemIdentificador([
					'codigo_item' => $produtoB->codigo_produto,
					'codigo_item_integracao' => $produtoB->codigo_produto_integracao,
				]),
				'produto' => new PedidoItemProduto([
					'codigo_produto' => $produtoB->codigo_produto,
					'quantidade' => 10,
					'valor_unitario' => 200,
					'valor_total' => 200,
				]),
				'observacao' => 'Lorem ipsum dolor',
			]),
			new PedidoItem([
				'ide' => new PedidoItemIdentificador([
					'codigo_item' => $produtoC->codigo_produto,
					'codigo_item_integracao' => $produtoC->codigo_produto_integracao,
				]),
				'produto' => new PedidoItemProduto([
					'codigo_produto' => $produtoC->codigo_produto,
					'quantidade' => 1,
					'valor_unitario' => 1500,
					'valor_total' => 1500,
				]),
				'observacao' => 'Lorem ipsum dolor',
			]),
		]);

		$resIncluir = $pedidos->incluir($pedido);

		$this->assertInstanceOf(PedidoResponse::class, $resIncluir);
		$this->assertGreaterThan(0, $resIncluir->codigo_pedido);
		$this->assertEquals("0", $resIncluir->codigo_status);

		$resConsultar = $pedidos->consultar($resIncluir->codigo_pedido);

		$this->assertInstanceOf(Pedido::class, $resConsultar);
		$this->assertInstanceOf(PedidoCabecalho::class, $resConsultar->cabecalho);

		$this->assertEquals($resIncluir->codigo_pedido, $resConsultar->cabecalho->codigo_pedido);

		$this->assertInstanceOf(PedidoTotal::class, $resConsultar->total_pedido);
		$this->assertInstanceOf(PedidoInfosAdicionais::class, $resConsultar->informacoes_adicionais);
		$this->assertInstanceOf(PedidoInfosCadastro::class, $resConsultar->infoCadastro);
		$this->assertInstanceOf(Frete::class, $resConsultar->frete);
		$this->assertInternalType('string', $resConsultar->observacoes);

		$this->assertInstanceOf(Collection::class, $resConsultar->lista_parcelas);
		$this->assertGreaterThan(0, $resConsultar->lista_parcelas->count());
		$this->assertInstanceOf(PedidoParcela::class, $resConsultar->lista_parcelas->first());

		$this->assertInstanceOf(Collection::class, $resConsultar->itens);
		$this->assertGreaterThan(0, $resConsultar->itens->count());
		$this->assertInstanceOf(PedidoItem::class, $resConsultar->itens->first());

		$consultaItem = $resConsultar->itens->first();

		$this->assertInstanceOf(PedidoItemIdentificador::class, $consultaItem->ide);
		$this->assertInstanceOf(PedidoItemProduto::class, $consultaItem->produto);
		$this->assertInternalType('string', $consultaItem->observacao);
		$this->assertInstanceOf(PedidoItemInfosAdicionais::class, $consultaItem->inf_adic);
		$this->assertInstanceOf(Imposto::class, $consultaItem->imposto);

		$statusPedido = $pedidos->status($resIncluir->codigo_pedido);

		$this->assertInstanceOf(PedidoStatus::class, $statusPedido);

		$this->assertEquals($statusPedido->codigo_pedido, $resConsultar->cabecalho->codigo_pedido);
		$this->assertEquals($statusPedido->codigo_pedido, $resIncluir->codigo_pedido);

		$this->assertInstanceOf(Collection::class, $statusPedido->nfes);

	}

}