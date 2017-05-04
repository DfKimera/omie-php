<?php
/**
 * omie-php
 * ProdutosTest.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 18:55
 */

namespace Tests\Unit\Geral;


use DfKimera\OmiePhp\Structs\Produto;
use DfKimera\OmiePhp\Structs\ProdutoLista;
use DfKimera\OmiePhp\Structs\ProdutoResponse;
use Illuminate\Support\Collection;
use Tests\TestCase;

class ProdutosTest extends TestCase {

	public function testListarProdutos() {
		$produtos = $this->getOmie()->produtos();

		$result = $produtos->listar();

		$this->assertInstanceOf(ProdutoLista::class, $result);
		$this->assertObjectHasAttribute('pagina', $result);
		$this->assertObjectHasAttribute('total_de_paginas', $result);
		$this->assertObjectHasAttribute('registros', $result);
		$this->assertObjectHasAttribute('total_de_registros', $result);

		$this->assertInstanceOf(Collection::class, $result->produtos);
		$this->assertGreaterThan(0, $result->produtos->count());
		$this->assertEquals(1, $result->pagina);
		$this->assertGreaterThan(0, $result->total_de_paginas);
		$this->assertGreaterThan(0, $result->total_de_registros);

		$first = $result->produtos->first();
		$this->assertInstanceOf(Produto::class, $first);
	}

	public function testCRUD() {
		$produtos = $this->getOmie()->produtos();
		$faker = $this->getFaker();

		$produto = new Produto();
		$produto->codigo_produto_integracao = uniqid();
		$produto->ncm = '0000.00.00';
		$produto->unidade = 'UN';
		$produto->descricao = $faker->words(3, true);
		$produto->valor_unitario = $faker->randomFloat(2, 1, 20);

		$resIncluir = $produtos->incluir($produto);

		$this->assertInstanceOf(ProdutoResponse::class, $resIncluir);
		$this->assertEquals("0", $resIncluir->codigo_status);
		$this->assertGreaterThan(0, $resIncluir->codigo_produto);

		$produtoAlterado = clone $produto;
		$produtoAlterado->descricao = "Test Omiephp";

		$resAlterar = $produtos->alterar($produtoAlterado);

		$this->assertInstanceOf(ProdutoResponse::class, $resAlterar);
		$this->assertEquals($resIncluir->codigo_produto, $resAlterar->codigo_produto);
		$this->assertEquals($resIncluir->codigo_produto_integracao, $resAlterar->codigo_produto_integracao);
		$this->assertEquals("0", $resAlterar->codigo_status);
		$this->assertGreaterThan(0, $resAlterar->codigo_produto);

		$lista = $produtos->listar(1, 100, false);

		$this->assertInstanceOf(ProdutoLista::class, $lista);

		$resConsultar = $produtos->consultar($resAlterar->codigo_produto);

		$this->assertInstanceOf(Produto::class, $resConsultar);
		$this->assertEquals($resConsultar->codigo_produto, $resAlterar->codigo_produto);
		$this->assertEquals(trim($resConsultar->codigo_produto_integracao), $resAlterar->codigo_produto_integracao);
		$this->assertEquals($resIncluir->codigo_produto, $resAlterar->codigo_produto);
		$this->assertEquals($resIncluir->codigo_produto_integracao, $resAlterar->codigo_produto_integracao);
		$this->assertEquals($produtoAlterado->descricao, $resConsultar->descricao);
		$this->assertEquals($produtoAlterado->valor_unitario, $resConsultar->valor_unitario);

	}

}