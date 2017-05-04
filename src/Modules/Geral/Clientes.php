<?php
/**
 * omie-php
 * Clientes.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 17:23
 */

namespace DfKimera\OmiePhp\Modules\Geral;


use DfKimera\OmiePhp\Core\RestClient;
use DfKimera\OmiePhp\Core\Utils;
use DfKimera\OmiePhp\Structs\Cliente;
use DfKimera\OmiePhp\Structs\ClienteResponse;
use DfKimera\OmiePhp\Structs\ClienteLista;

class Clientes extends RestClient {

	protected $uri = "geral/clientes/";

	public function listar($pagina = 1, $registrosPorPagina = 100, $apenasImportadoAPI = false) : ClienteLista {

		$list = $this->call('ListarClientes', [
			'pagina' => $pagina,
			'registros_por_pagina' => $registrosPorPagina,
			'apenas_importado_api' => Utils::booleanToYesno($apenasImportadoAPI),
		]);

		return new ClienteLista($list);

	}

	public function incluir(Cliente $cliente) : ClienteResponse {

		$result = $this->call('IncluirCliente', $cliente->toArray());
		return new ClienteResponse($result);

	}

	public function alterar(Cliente $cliente) : ClienteResponse {

		$result = $this->call('AlterarCliente', $cliente->toArray());
		return new ClienteResponse($result);

	}

	public function consultar($codigoOmie) : Cliente {
		$result = $this->call('ConsultarCliente', [
			'codigo_cliente_omie' => $codigoOmie
		]);

		return new Cliente($result);
	}


}