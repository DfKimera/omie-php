<?php
/**
 * omie-php
 * PIS_ST.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:21
 */

namespace DfKimera\OmiePhp\Structs\Impostos;


use DfKimera\OmiePhp\Structs\Struct;

class PIS_ST extends Struct {

	/**
	 * Código da Situação Tributária do PIS
	 *
	 * @var string
	 */
	public $cod_sit_trib_pis_st;
	/**
	 * Tipo de cálculo para obtenção do valor do PIS Substituição Tributária
	 *
	 * @var string
	 */
	public $tipo_calculo_pis_st;
	/**
	 * Base de Cálculo do PIS Substituição Tributária
	 *
	 * @var float
	 */
	public $base_pis_st;
	/**
	 * Alíquota do PIS Substituição Tributária
	 *
	 * @var float
	 */
	public $aliq_pis_st;
	/**
	 * Quantidade de Unidades Tributáveis do PIS Substituição Tributária
	 *
	 * @var float
	 */
	public $qtde_unid_trib_pis_st;
	/**
	 * Valor do PIS Substituição Tributária por Unidade Tributável
	 *
	 * @var float
	 */
	public $valor_unid_trib_pis_st;
	/**
	 * Margem de valor adicional para obter a base de cálculo do PIS Substituição Tributária
	 *
	 * @var float
	 */
	public $margem_pis_st;
	/**
	 * Valor do PIS Substituição Tributária
	 *
	 * @var float
	 */
	public $valor_pis_st;

}