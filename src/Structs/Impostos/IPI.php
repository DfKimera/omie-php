<?php
/**
 * omie-php
 * IPI.php
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

class IPI extends Struct {

	/**
	 * Código da situação tributária do IPI
	 *
	 * @var string
	 */
	public $cod_sit_trib_ipi;
	/**
	 * Tipo de cálculo para obtenção do valor do IPI
	 *
	 * @var string
	 */
	public $tipo_calculo_ipi;
	/**
	 * Enquadramento do IPI
	 *
	 * @var string
	 */
	public $enquadramento_ipi;
	/**
	 * Base de Cálculo do IPI
	 *
	 * @var float
	 */
	public $base_ipi;
	/**
	 * Alíquota do IPI
	 *
	 * @var float
	 */
	public $aliq_ipi;
	/**
	 * Quantidade de Unidades Tributáveis do IPI
	 *
	 * @var float
	 */
	public $qtde_unid_trib_ipi;
	/**
	 * Valor do IPI por Unidade Tributável
	 *
	 * @var float
	 */
	public $valor_unid_trib_ipi;
	/**
	 * Valor do IPI
	 *
	 * @var float
	 */
	public $valor_ipi;

}