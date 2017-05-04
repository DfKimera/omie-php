<?php
/**
 * omie-php
 * PIS_Padrao.php
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

class PIS_Padrao extends Struct {

	/**
	 * Código da Situação Tributária do PIS
	 *
	 * @var string
	 */
	public $cod_sit_trib_pis;
	/**
	 * Tipo de cálculo para obtenção do valor do PIS
	 *
	 * @var string
	 */
	public $tipo_calculo_pis;
	/**
	 * Base de Cálculo do PIS
	 *
	 * @var float
	 */
	public $base_pis;
	/**
	 * Alíquota do PIS
	 *
	 * @var float
	 */
	public $aliq_pis;
	/**
	 * Quantidade de Unidades Tributáveis do PIS
	 *
	 * @var float
	 */
	public $qtde_unid_trib_pis;
	/**
	 * Valor do PIS por Unidade Tributável
	 *
	 * @var float
	 */
	public $valor_unid_trib_pis;
	/**
	 * Valor do PIS
	 *
	 * @var float
	 */
	public $valor_pis;

}