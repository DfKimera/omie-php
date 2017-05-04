<?php
/**
 * omie-php
 * TestCase.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 17:06
 */

namespace Tests;


use DfKimera\OmiePhp\Omie;
use DfKimera\OmiePhp\Structs\ClienteResponse;
use Dotenv\Dotenv;
use Faker\Factory;

class TestCase extends \PHPUnit\Framework\TestCase {

	protected static $omie = null;
	protected static $faker = null;

	public function getFaker() {
		if(self::$faker === null) {
			self::$faker = Factory::create();
		}

		return self::$faker;
	}

	public function getOmie() {
		if(self::$omie === null) {

			if(file_exists(__DIR__ . "/../.env.tests")) {
				$dotenv = new Dotenv(__DIR__ . "/../", '.env_tests');
				$dotenv->load();
			}

			self::$omie = new Omie(getenv('OMIE_API_KEY'), getenv('OMIE_API_SECRET'));

		}

		return self::$omie;
	}

}