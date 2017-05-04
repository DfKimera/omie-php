<?php
/**
 * omie-php
 * PedidoTotal.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:17
 */

namespace DfKimera\OmiePhp\Structs;


class PedidoTotal extends Struct {

	/**
	 * Base de Cálculo do ICMS
	 *
	 * @var float
	 */
	public $base_calculo_icms;
	/**
	 * Base de cálculo da substituição tributária.
	 *
	 * @var float
	 */
	public $base_calculo_st;
	/**
	 * Valor do PIS
	 *
	 * @var float
	 */
	public $valor_pis;
	/**
	 * Valor do cofins
	 *
	 * @var float
	 */
	public $valor_cofins;
	/**
	 * Valor da CSLL
	 *
	 * @var float
	 */
	public $valor_csll;
	/**
	 * Valor total do ICMS
	 *
	 * @var float
	 */
	public $valor_icms;
	/**
	 * Valor total da ST&nbsp;
	 *
	 * @var float
	 */
	public $valor_st;
	/**
	 * Valor do INSS&nbsp;
	 *
	 * @var float
	 */
	public $valor_inss;
	/**
	 * Valor do IPI&nbsp;
	 *
	 * @var float
	 */
	public $valor_IPI;
	/**
	 * Valor do IR
	 *
	 * @var float
	 */
	public $valor_ir;
	/**
	 * Valor do ISS&nbsp;
	 *
	 * @var float
	 */
	public $valor_iss;
	/**
	 * Valor das deduções&nbsp;
	 *
	 * @var float
	 */
	public $valor_deducoes;
	/**
	 * Valor dos descontos
	 *
	 * @var float
	 */
	public $valor_descontos;
	/**
	 * valor das mercadorias
	 *
	 * @var float
	 */
	public $valor_mercadorias;
	/**
	 * Valor total&nbsp;do pedido
	 *
	 * @var float
	 */
	public $valor_total_pedido;

}