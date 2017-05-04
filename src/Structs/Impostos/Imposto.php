<?php
/**
 * omie-php
 * Imposto.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:23
 */

namespace DfKimera\OmiePhp\Structs\Impostos;


use DfKimera\OmiePhp\Structs\Struct;

class Imposto extends Struct {

	/**
	 * @var ICMS_SN
	 */
	public $icms_sn;

	public function setIcms_Sn($value) {
		$this->icms_sn = new ICMS_SN($value);
	}

	/**
	 * @var ICMS
	 */
	public $icms;

	public function setIcms($value) {
		$this->icms = new ICMS($value);
	}

	/**
	 * @var ICMS_ST
	 */
	public $icms_st;

	public function setIcms_St($value) {
		$this->icms_st = new ICMS_ST($value);
	}

	/**
	 * @var IPI
	 */
	public $ipi;

	public function setIpi($value) {
		$this->ipi = new IPI($value);
	}

	/**
	 * @var PIS_Padrao
	 */
	public $pis_padrao;

	public function setPis_Padrao($value) {
		$this->pis_padrao = new PIS_Padrao($value);
	}

	/**
	 * @var PIS_ST
	 */
	public $pis_st;

	public function setPis_St($value) {
		$this->pis_st = new PIS_ST($value);
	}

	/**
	 * @var COFINS_Padrao
	 */
	public $cofins_padrao;

	public function setCofins_Padrao($value) {
		$this->cofins_padrao = new COFINS_Padrao($value);
	}
	/**
	 * @var COFINS_ST
	 */
	public $cofins_st;

	public function setCofins_St($value) {
		$this->cofins_st = new COFINS_ST($value);
	}

	/**
	 * @var INSS
	 */
	public $inss;

	public function setInss($value) {
		$this->inss = new INSS($value);
	}

	/**
	 * @var CSLL
	 */
	public $csll;

	public function setCsll($value) {
		$this->csll = new CSLL($value);
	}

	/**
	 * @var IRRF
	 */
	public $irrf;

	public function setIrrf($value) {
		$this->irrf = new IRRF($value);
	}

	/**
	 * Informações do ISS
	 *
	 * @var ISS
	 */
	public $iss;

	public function setIss($value) {
		$this->iss = new ISS($value);
	}

}