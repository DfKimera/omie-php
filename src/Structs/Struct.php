<?php
/**
 * omie-php
 * Struct.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 17:41
 */

namespace DfKimera\OmiePhp\Structs;


class Struct {

	public function __construct($data = []) {

		if(!is_array($data)) return;

		foreach($data as $key => $value) {

			$setter = 'set' . ucwords($key);

			if(method_exists($this, $setter)) {
				$this->$setter($value);
				continue;
			}

			$this->$key = $value;

		}

	}

	public function toArray() : array {
		return (array) $this;
	}

}