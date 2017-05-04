<?php
/**
 * omie-php
 * PedidoStatus.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:39
 */

namespace DfKimera\OmiePhp\Structs;


class PedidoResponse extends Struct {

	/**
	 * Código do Pedido de Venda de Produto
	 *
	 * @var integer
	 */
	public $codigo_pedido;
	/**
	 * Código de Integração do Pedido de Venda de Produto&nbsp;
	 *
	 * @var string
	 */
	public $codigo_pedido_integracao;
	/**
	 * Código do Status do Pedido de Venda.
	 *
	 * @var string
	 */
	public $codigo_status;
	/**
	 * Descrição do status&nbsp;&nbsp;
	 *
	 * @var string
	 */
	public $descricao_status;
	/**
	 * Número do pedido - Visualizado pelo cliente.&nbsp;
	 *
	 * @var string
	 */
	public $numero_pedido;

}