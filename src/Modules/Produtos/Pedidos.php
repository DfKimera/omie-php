<?php
/**
 * omie-php
 * Pedidos.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:09
 */

namespace DfKimera\OmiePhp\Modules\Produtos;

use DfKimera\OmiePhp\Core\RestClient;
use DfKimera\OmiePhp\Core\Utils;
use DfKimera\OmiePhp\Structs\Pedido;
use DfKimera\OmiePhp\Structs\PedidoLista;
use DfKimera\OmiePhp\Structs\PedidoResponse;
use DfKimera\OmiePhp\Structs\PedidoStatus;

class Pedidos extends RestClient {

	protected $uri = 'produtos/pedido/';

	public function listar($pagina = 1, $registrosPorPagina = 100, $apenasImportadoAPI = false) : PedidoLista {
		$result = $this->call('ListarPedidos', [
			'pagina' => $pagina,
			'registros_por_pagina' => $registrosPorPagina,
			'apenas_importado_api' => Utils::booleanToYesno($apenasImportadoAPI),
		]);

		return new PedidoLista($result);
	}

	/**
	 * @param Pedido $cliente
	 * @return PedidoResponse
	 */
	public function incluir(Pedido $cliente) : PedidoResponse {

		$result = $this->call('IncluirPedido', $cliente->toArray());
		return new PedidoResponse($result);

	}

	public function consultar($codigoOmie) : Pedido {
		$result = $this->call('ConsultarPedido', [
			'codigo_pedido' => $codigoOmie
		]);

		return new Pedido($result->pedido_venda_produto);
	}

	public function status($codigoOmie) : PedidoStatus {
		$result = $this->call('StatusPedido', [
			'codigo_pedido' => $codigoOmie
		]);

		return new PedidoStatus($result);
	}

}