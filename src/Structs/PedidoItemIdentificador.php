<?php
/**
 * omie-php
 * PedidoItemIdentificador.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:33
 */

namespace DfKimera\OmiePhp\Structs;


class PedidoItemIdentificador extends Struct {

	/**
	 * Código de Integração
	 *
	 * @var string
	 */
	public $codigo_item_integracao;
	/**
	 * ID do Item do Pedido
	 *
	 * @var integer
	 */
	public $codigo_item;
	/**
	 * Indica que utiliza o Simples Nacional
	 *
	 * @var string
	 */
	public $simples_nacional;
	/**
	 * DEPRECATED
	 *
	 * @var integer
	 */
	public $regra_impostos;

}