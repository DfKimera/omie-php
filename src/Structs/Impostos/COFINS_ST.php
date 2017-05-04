<?php
/**
 * omie-php
 * CofinsST.php
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

class COFINS_ST extends Struct {

	/**
	 * Código da Situação Tributária do COFINS
	 *
	 * @var string
	 */
	public $cod_sit_trib_cofins_st;
	/**
	 * Tipo de cálculo para obtenção do valor do PIS Substituição Tributária
	 *
	 * @var string
	 */
	public $tipo_calculo_cofins_st;
	/**
	 * Base de Cálculo do COFINS Substituição Tributária
	 *
	 * @var float
	 */
	public $base_cofins_st;
	/**
	 * Alíquota do COFINS Substituição Tributária
	 *
	 * @var float
	 */
	public $aliq_cofins_st;
	/**
	 * Quantidade de Unidades Tributáveis do PIS Substituição Tributária
	 *
	 * @var float
	 */
	public $qtde_unid_trib_cofins_st;
	/**
	 * Valor do PIS Substituição Tributária por Unidade Tributável
	 *
	 * @var float
	 */
	public $valor_unid_trib_cofins_st;
	/**
	 * Margem de valor adicional para obter a base de cálculo do COFINS Substituição Tributária
	 *
	 * @var float
	 */
	public $margem_cofins_st;
	/**
	 * Valor do PIS Substituição Tributária
	 *
	 * @var float
	 */
	public $valor_cofins_st;

}