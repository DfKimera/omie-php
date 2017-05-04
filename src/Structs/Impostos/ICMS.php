<?php
/**
 * omie-php
 * ICMS.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:22
 */

namespace DfKimera\OmiePhp\Structs\Impostos;


use DfKimera\OmiePhp\Structs\Struct;

class ICMS extends Struct {

	/**
	 * NFe - Situação Tributária
	 *
	 * @var string
	 */
	public $cod_sit_trib_icms;
	/**
	 * NFe - Origem
	 *
	 * @var string
	 */
	public $origem_icms;
	/**
	 * NFe - Modalidade para determinação da Base de Cálculo do ICMs
	 *
	 * @var string
	 */
	public $modalidade_icms;
	/**
	 * Percentual de redução da base de cálculo do ICMS
	 *
	 * @var float
	 */
	public $perc_red_base_icms;
	/**
	 * Base de cálculo do ICMS
	 *
	 * @var float
	 */
	public $base_icms;
	/**
	 * Alíquota do ICMS
	 *
	 * @var float
	 */
	public $aliq_icms;
	/**
	 * Valor do ICMS
	 *
	 * @var float
	 */
	public $valor_icms;

}