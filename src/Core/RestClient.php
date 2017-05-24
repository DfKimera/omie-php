<?php
/**
 * omie-php
 * RestClient.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 16:47
 */

namespace DfKimera\OmiePhp\Core;

use DfKimera\OmiePhp\Exceptions\OmieRequestException;
use DfKimera\OmiePhp\Omie;
use DfKimera\OmiePhp\Structs\Error;
use Httpful\Request;

abstract class RestClient {

	protected $uri;
	protected $omie;

	public function __construct(Omie $omie) {
		$this->omie = $omie;
	}

	public function call($method, $parameters = []) {
		$url = str_finish(Omie::BASE_URL, '/') . $this->uri;
		$payload = [
			'call' => $method,
			'app_key' => $this->omie->getAPIKey(),
			'app_secret' => $this->omie->getAPISecret(),
			'param' => [$parameters],
		];

		$response = Request::post($url, $payload, 'application/json')
						->expects('application/json')
						->send();

		$body = isset($response->body) ? $response->body : null;

		if($response->hasErrors() || $body === null) {
			error_log("[OmieERP Bridge] Request unknown error, body: " . (is_object($body) ? json_encode($body) : strval($body)), 0);
			throw new OmieRequestException(new Error($body), (is_object($body)) ? $body->faultstring : strval($body));
		}

		if(isset($body->code) && isset($body->description)) {
			error_log("[OmieERP Bridge] Request exception ({$body->code}), body: " . (is_object($body) ? json_encode($body) : strval($body)), 0);
			throw new OmieRequestException(new Error($body));
		}

		return $body;
	}

}