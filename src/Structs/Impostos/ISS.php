<?php
/**
 * omie-php
 * ISS.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:19
 */

namespace DfKimera\OmiePhp\Structs\Impostos;


use DfKimera\OmiePhp\Structs\Struct;

class ISS extends Struct {

	/**
	 * Base de cálculo do ISS
	 *
	 * @var float
	 */
	public $base_iss;
	/**
	 * Alíquota do ISS
	 *
	 * @var float
	 */
	public $aliq_iss;
	/**
	 * Valor do ISS
	 *
	 * @var float
	 */
	public $valor_iss;
	/**
	 * Indica que o valor do ISS será retido pelo tomador do serviço
	 *
	 * @var string
	 */
	public $retem_iss;

}