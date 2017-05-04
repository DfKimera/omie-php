<?php
/**
 * omie-php
 * ClientesTest.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 17:26
 */

namespace Tests\Unit\Geral;


use DfKimera\OmiePhp\Core\Utils;
use DfKimera\OmiePhp\Modules\Geral\Clientes;
use DfKimera\OmiePhp\Structs\Cliente;
use DfKimera\OmiePhp\Structs\ClienteLista;
use DfKimera\OmiePhp\Structs\ClienteResponse;
use Hashids\Hashids;
use Illuminate\Support\Collection;
use stdClass;
use Tests\Generator;
use Tests\TestCase;

class ClientesTest extends TestCase {

	public function testListarClientes() {
		$clientes = $this->getOmie()->clientes();

		$result = $clientes->listar();

		$this->assertInstanceOf(ClienteLista::class, $result);
		$this->assertObjectHasAttribute('pagina', $result);
		$this->assertObjectHasAttribute('total_de_paginas', $result);
		$this->assertObjectHasAttribute('registros', $result);
		$this->assertObjectHasAttribute('total_de_registros', $result);

		$this->assertInstanceOf(Collection::class, $result->clientes);
		$this->assertGreaterThan(0, $result->clientes->count());
		$this->assertEquals(1, $result->pagina);
		$this->assertGreaterThan(0, $result->total_de_paginas);
		$this->assertGreaterThan(0, $result->total_de_registros);

		$first = $result->clientes->first();
		$this->assertInstanceOf(Cliente::class, $first);
	}

	public function testCRUD() {
		$clientes = $this->getOmie()->clientes();
		$faker = $this->getFaker();

		$cliente = new Cliente();
		$cliente->codigo_cliente_integracao = uniqid();
		$cliente->email = $faker->companyEmail;
		$cliente->cnpj_cpf = Generator::cpf(false);
		$cliente->nome_fantasia = $faker->company;
		$cliente->cep = $faker->randomNumber(8, true);
		$cliente->endereco = $faker->streetAddress;
		$cliente->endereco_numero = $faker->randomNumber(4);
		$cliente->cidade = 'SAO PAULO (SP)';
		$cliente->telefone1_ddd = 11;
		$cliente->telefone1_numero = $faker->randomNumber(9, true);

		$resIncluir = $clientes->incluir($cliente);

		$this->assertInstanceOf(ClienteResponse::class, $resIncluir);
		$this->assertEquals("0", $resIncluir->codigo_status);
		$this->assertGreaterThan(0, $resIncluir->codigo_cliente_omie);

		$clienteAlterado = clone $cliente;
		$clienteAlterado->nome_fantasia = "Test Omiephp";

		$resAlterar = $clientes->alterar($clienteAlterado);

		$this->assertInstanceOf(ClienteResponse::class, $resAlterar);
		$this->assertEquals($resIncluir->codigo_cliente_omie, $resAlterar->codigo_cliente_omie);
		$this->assertEquals($resIncluir->codigo_cliente_integracao, $resAlterar->codigo_cliente_integracao);
		$this->assertEquals("0", $resAlterar->codigo_status);
		$this->assertGreaterThan(0, $resAlterar->codigo_cliente_omie);

		$lista = $clientes->listar(1, 100, false);

		$this->assertInstanceOf(ClienteLista::class, $lista);

		$resConsultar = $clientes->consultar($resAlterar->codigo_cliente_omie);

		$this->assertInstanceOf(Cliente::class, $resConsultar);
		$this->assertEquals($resConsultar->codigo_cliente_omie, $resAlterar->codigo_cliente_omie);
		$this->assertEquals($resConsultar->codigo_cliente_integracao, $resAlterar->codigo_cliente_integracao);
		$this->assertEquals($resIncluir->codigo_cliente_omie, $resAlterar->codigo_cliente_omie);
		$this->assertEquals($resIncluir->codigo_cliente_integracao, $resAlterar->codigo_cliente_integracao);
		$this->assertEquals($clienteAlterado->email, $resConsultar->email);
		$this->assertEquals($clienteAlterado->cnpj_cpf, Utils::stripPunctuation($resConsultar->cnpj_cpf));
		$this->assertEquals($clienteAlterado->nome_fantasia, $resConsultar->nome_fantasia);
		$this->assertEquals($clienteAlterado->cep, $resConsultar->cep);
		$this->assertEquals($clienteAlterado->endereco, $resConsultar->endereco);
		$this->assertEquals($clienteAlterado->endereco_numero, $resConsultar->endereco_numero);
		$this->assertEquals($clienteAlterado->cidade, $resConsultar->cidade);
		$this->assertEquals($clienteAlterado->telefone1_ddd, $resConsultar->telefone1_ddd);
		$this->assertEquals($clienteAlterado->telefone1_numero, $resConsultar->telefone1_numero);

	}

}