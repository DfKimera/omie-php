<?php
/**
 * omie-php
 * IRRF.php
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

class IRRF extends Struct {

	/**
	 * Alíquota do IRRF
	 *
	 * @var float
	 */
	public $aliq_irrf;
	/**
	 * Valor do IRRF
	 *
	 * @var float
	 */
	public $valor_irrf;

}