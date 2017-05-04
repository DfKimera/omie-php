<?php
/**
 * omie-php
 * ICMS_ST.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:24
 */

namespace DfKimera\OmiePhp\Structs\Impostos;


use DfKimera\OmiePhp\Structs\Struct;

class ICMS_ST extends Struct {

	/**
	 * NFe - Situação Tributária
	 *
	 * @var string
	 */
	public $cod_sit_trib_icms_st;
	/**
	 * NFe - Código da Modalidade de determinação da Base de Cálculo do ICMS ST
	 *
	 * @var string
	 */
	public $modalidade_icms_st;
	/**
	 * Percentual de redução da base de cálculo do ICMS
	 *
	 * @var float
	 */
	public $perc_red_base_icms_st;
	/**
	 * Base de cálculo do ICMS Substituição Tributária
	 *
	 * @var float
	 */
	public $base_icms_st;
	/**
	 * Alíquota do ICMS Substituição Tributária
	 *
	 * @var float
	 */
	public $aliq_icms_st;
	/**
	 * Percentual da margem do valor adicionado da base de cálculo do ICMS ST
	 *
	 * @var float
	 */
	public $margem_icms_st;
	/**
	 * Valor do ICMS Substituição Tributária
	 *
	 * @var float
	 */
	public $valor_icms_st;
	/**
	 * Alíquota de ICMS Operação Própria.
	 *
	 * @var float
	 */
	public $aliq_icms_opprop;

}