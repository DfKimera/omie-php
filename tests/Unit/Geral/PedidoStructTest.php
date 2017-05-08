<?php
/**
 * omie-php
 * PedidoStructTest.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 08/05/2017, 18:59
 */

namespace Tests\Unit\Geral;


use DfKimera\OmiePhp\Structs\Frete;
use DfKimera\OmiePhp\Structs\Pedido;
use DfKimera\OmiePhp\Structs\PedidoCabecalho;
use DfKimera\OmiePhp\Structs\PedidoItem;
use DfKimera\OmiePhp\Structs\PedidoItemIdentificador;
use DfKimera\OmiePhp\Structs\PedidoItemProduto;
use DfKimera\OmiePhp\Structs\PedidoParcela;
use Tests\TestCase;

class PedidoStructTest extends TestCase {

	public function testUnpackingCollections() {
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
			'codigo_pedido_integracao' => $this->getFaker()->randomNumber(6),
			'codigo_cliente' => $this->getFaker()->randomNumber(6),
			'data_previsao' => date('d/m/Y'),
			'quantidade_itens' => 3,
			'codigo_parcela' => '000',
			'qtde_parcelas' => 1,
		]);

		$pedido->itens = collect([
			new PedidoItem([
				'ide' => new PedidoItemIdentificador([
					'codigo_item' => $this->getFaker()->randomNumber(6),
					'codigo_item_integracao' => $this->getFaker()->randomNumber(6),
				]),
				'produto' => new PedidoItemProduto([
					'codigo_produto' => $this->getFaker()->randomNumber(6),
					'quantidade' => 5,
					'valor_unitario' => 15,
					'valor_total' => 15,
				]),
				'observacao' => 'Lorem ipsum dolor',
			]),
			new PedidoItem([
				'ide' => new PedidoItemIdentificador([
					'codigo_item' => $this->getFaker()->randomNumber(6),
					'codigo_item_integracao' => $this->getFaker()->randomNumber(6),
				]),
				'produto' => new PedidoItemProduto([
					'codigo_produto' => $this->getFaker()->randomNumber(6),
					'quantidade' => 10,
					'valor_unitario' => 200,
					'valor_total' => 200,
				]),
				'observacao' => 'Lorem ipsum dolor',
			]),
			new PedidoItem([
				'ide' => new PedidoItemIdentificador([
					'codigo_item' => $this->getFaker()->randomNumber(6),
					'codigo_item_integracao' => $this->getFaker()->randomNumber(6),
				]),
				'produto' => new PedidoItemProduto([
					'codigo_produto' => $this->getFaker()->randomNumber(6),
					'quantidade' => 1,
					'valor_unitario' => 1500,
					'valor_total' => 1500,
				]),
				'observacao' => 'Lorem ipsum dolor',
			]),
		]);

		$pedidoArray = $pedido->toArray();

		$this->assertInternalType('array', $pedidoArray['det']);
		$this->assertInternalType('array', $pedidoArray['lista_parcelas']);
		$this->assertCount(3, $pedidoArray['det']);
		$this->assertCount(1, $pedidoArray['lista_parcelas']);

		var_dump($pedidoArray);
	}

}