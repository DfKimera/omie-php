<?php
/**
 * omie-php
 * ClienteCadastrado.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 17:48
 */

namespace DfKimera\OmiePhp\Structs;


class ClienteResponse extends Struct {

	public $codigo_cliente_omie;
	public $codigo_cliente_integracao;
	public $codigo_status;
	public $descricao_status;

}