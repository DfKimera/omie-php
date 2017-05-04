<?php
/**
 * omie-php
 * PedidoLista.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:43
 */

namespace DfKimera\OmiePhp\Structs;

use Illuminate\Support\Collection;

class PedidoLista extends Struct {

	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public $pagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public $total_de_paginas;
	/**
	 * Número de registros por página.
	 *
	 * @var integer
	 */
	public $registros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public $total_de_registros;
	/**
	 * Estrutura do Pedido de Vendas de Produtos
	 *
	 * @var Collection|Pedido[]
	 */
	public $pedidos;

	public function setPedido_Venda_Produto($value) {
		$this->pedidos = collect($value)->map(function ($item) {
			return new Pedido($item);
		});
	}

}