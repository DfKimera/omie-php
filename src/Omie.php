<?php

/**
 * omie-php
 * Omie.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 16:38
 */

namespace DfKimera\OmiePhp;

class Omie {

	const BASE_URL = "http://app.omie.com.br/api/v1/";

	private $apiKey;
	private $apiSecret;

	private $instances = [];

	public function __construct($apiKey, $apiSecret) {
		$this->apiKey = $apiKey;
		$this->apiSecret = $apiSecret;
	}

	public function getAPIKey() {
		return $this->apiKey;
	}

	public function getAPISecret() {
		return $this->apiSecret;
	}

	// ----------------------------------------------------

	private function instanceFactory(string $key, $class) {
		if(!isset($this->instances[$key])) {
			$this->instances[$key] = new $class($this);
		}

		return $this->instances[$key];
	}

	// ----------------------------------------------------

	public function cep() : Modules\Geral\CEP {
		return $this->instanceFactory('cep', Modules\Geral\CEP::class);
	}

	public function clientes() : Modules\Geral\Clientes {
		return $this->instanceFactory('clientes', Modules\Geral\Clientes::class);
	}

	public function produtos() : Modules\Geral\Produtos {
		return $this->instanceFactory('produtos', Modules\Geral\Produtos::class);
	}

	public function pedidos() : Modules\Produtos\Pedidos {
		return $this->instanceFactory('pedidos', Modules\Produtos\Pedidos::class);
	}

}