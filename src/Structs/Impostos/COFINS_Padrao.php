<?php
/**
 * omie-php
 * CofinsPadrao.php
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

class COFINS_Padrao extends Struct {

	/**
	 * Código da Situação Tributária do COFINS
	 *
	 * @var string
	 */
	public $cod_sit_trib_cofins;
	/**
	 * Tipo de cálculo para obtenção do valor do PIS
	 *
	 * @var string
	 */
	public $tipo_calculo_cofins;
	/**
	 * Base de Cálculo do COFINS
	 *
	 * @var float
	 */
	public $base_cofins;
	/**
	 * Alíquota do COFINS
	 *
	 * @var float
	 */
	public $aliq_cofins;
	/**
	 * Quantidade de Unidades Tributáveis do COFINS
	 *
	 * @var float
	 */
	public $qtde_unid_trib_cofins;
	/**
	 * Valor do COFINS por Unidade Tributável
	 *
	 * @var float
	 */
	public $valor_unid_trib_cofins;
	/**
	 * Valor do COFINS
	 *
	 * @var float
	 */
	public $valor_cofins;

}