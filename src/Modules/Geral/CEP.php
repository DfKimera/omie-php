<?php
/**
 * omie-php
 * CEP.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 17:11
 */

namespace DfKimera\OmiePhp\Modules\Geral;


use DfKimera\OmiePhp\Core\RestClient;

class CEP extends RestClient {

	protected $uri = "geral/cep/";

	public function pesquisar($cep) {
		$result = $this->call("PesquisarCEP", ['cep' => $cep]);

		return new \DfKimera\OmiePhp\Structs\CEP($result);
	}

}