<?php
/**
 * omie-php
 * CSLL.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:20
 */

namespace DfKimera\OmiePhp\Structs\Impostos;


use DfKimera\OmiePhp\Structs\Struct;

class CSLL extends Struct {

	/**
	 * Alíquota do CSLL
	 *
	 * @var float
	 */
	public $aliq_csll;
	/**
	 * Valor do CSLL
	 *
	 * @var float
	 */
	public $valor_csll;

}