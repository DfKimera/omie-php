<?php
/**
 * omie-php
 * INSS.php
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

class INSS extends Struct {

	/**
	 * Alíquota do INSS
	 *
	 * @var float
	 */
	public $aliq_inss;
	/**
	 * Valor do INSS
	 *
	 * @var float
	 */
	public $valor_inss;

}