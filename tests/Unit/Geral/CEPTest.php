<?php
/**
 * omie-php
 * CEPTest.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 17:13
 */

namespace Tests\Unit\Geral;


use DfKimera\OmiePhp\Modules\Geral\CEP;
use stdClass;
use Tests\TestCase;

class CEPTest extends TestCase {

	public function testPesquisar() {

		$omie = $this->getOmie();
		$cep = new CEP($omie);

		$result = $cep->pesquisar('05713460');

		$this->assertInstanceOf(\DfKimera\OmiePhp\Structs\CEP::class, $result);
		$this->assertObjectHasAttribute('cep', $result);
		$this->assertObjectHasAttribute('endereco', $result);
		$this->assertObjectHasAttribute('complemento', $result);
		$this->assertObjectHasAttribute('bairro', $result);
		$this->assertObjectHasAttribute('cidade', $result);
		$this->assertObjectHasAttribute('estado', $result);
		$this->assertObjectHasAttribute('ibge', $result);

	}

}