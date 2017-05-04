<?php
/**
 * omie-php
 * Utils.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 17:24
 */

namespace DfKimera\OmiePhp\Core;


class Utils {

	public static function booleanToYesno(bool $bool) : string {
		return ($bool) ? 'S' : 'N';
	}

	public static function yesnoToBoolean(string $yesno) : bool {
		return (strtoupper($yesno) === 'S');
	}

	public static function stripPunctuation($input) {
		return preg_replace('/[^a-z\d]+/i', '', $input);
	}


}