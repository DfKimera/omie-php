<?php
/**
 * omie-php
 * ICMS_SN.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:23
 */

namespace DfKimera\OmiePhp\Structs\Impostos;


use DfKimera\OmiePhp\Structs\Struct;

class ICMS_SN extends Struct {

	/**
	 * Código da situação tributária pelo Simples
	 *
	 * @var string
	 */
	public $cod_sit_trib_icms_sn;
	/**
	 * NFe - Origem
	 *
	 * @var string
	 */
	public $origem_icms_sn;
	/**
	 * Alíquota aplicável de cálculo do crédito de ICMS no Simples Nacional
	 *
	 * @var float
	 */
	public $aliq_icms_sn;
	/**
	 * Valor do crédito de ICMS no Simples Nacional
	 *
	 * @var float
	 */
	public $valor_credito_icms_sn;
	/**
	 * Base de Cálculo do ICMS retido anteriormente por Substituição Tributária
	 *
	 * @var float
	 */
	public $base_icms_sn;
	/**
	 * Valor do ICMS retido anteriormente por Substituição Tributária
	 *
	 * @var float
	 */
	public $valor_icms_sn;

}