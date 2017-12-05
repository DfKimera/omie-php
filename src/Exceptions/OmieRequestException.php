<?php
/**
 * omie-php
 * OmieRequestException.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 17:51
 */

namespace DfKimera\OmiePhp\Exceptions;

use DfKimera\OmiePhp\Structs\Error;

class OmieRequestException extends \Exception {

	protected $error = null;
	public $rawBody = null;

	public function __construct(Error $error = null, $message = null, $rawBody = null) {

		$this->rawBody = $rawBody;

		if(!$error && !$message) {
			parent::__construct("Unknown Omie API error!", 0);
		} else if($message) {
			parent::__construct("Unknown Omie API error!", 0);
		} else {
			parent::__construct("Omie API error #{$error->code}: {$error->description}", $error->code);
		}

		if($error) $this->error = $error;
		if($message) $this->message = $message;
	}

	public function getOmieError() {
		return $this->error;
	}

	public function __toString() {
		if(!$this->error) return '[OmieERP Unknown Error!]';
		return "[OmieERP Error " . ($this->error->code ?? 'missing-faultcode') . ($this->error->referer ? " {$this->error->referer}" : ' noref') . "] " . ($this->error->description ?? 'missing-faultstring');
	}

}