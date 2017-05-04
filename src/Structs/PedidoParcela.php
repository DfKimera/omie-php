<?php
/**
 * omie-php
 * PedidoParcela.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:19
 */

namespace DfKimera\OmiePhp\Structs;


class PedidoParcela extends Struct {

	/**
	 * Número da Parcela
	 *
	 * @var integer
	 */
	public $numero_parcela;
	/**
	 * Valor da Parcela
	 *
	 * @var float
	 */
	public $valor;
	/**
	 * Percentual
	 *
	 * @var float
	 */
	public $percentual;
	/**
	 * Data de Vencimento
	 *
	 * @var string
	 */
	public $data_vencimento;
	/**
	 * Quantidade de dias até o vencimento
	 *
	 * @var integer
	 */
	public $quantidade_dias;

}