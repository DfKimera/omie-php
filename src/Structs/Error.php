<?php
/**
 * omie-php
 * Error.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 17:44
 */

namespace DfKimera\OmiePhp\Structs;


class Error extends Struct {

	/**
	 * Codigo do erro
	 *
	 * @var integer
	 */
	public $code;
	/**
	 * Descricao do erro
	 *
	 * @var string
	 */
	public $description;
	/**
	 * Origem do erro
	 *
	 * @var string
	 */
	public $referer;
	/**
	 * Indica se eh um erro fatal
	 *
	 * @var boolean
	 */
	public $fatal;

	public function setFaultcode($code) {
		$this->code = $code;
	}

	public function setFaultstring($description) {
		$this->description = $description;
	}


}