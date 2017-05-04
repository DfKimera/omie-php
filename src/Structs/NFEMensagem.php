<?php
/**
 * omie-php
 * NFEMessage.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:41
 */

namespace DfKimera\OmiePhp\Structs;


class NFEMensagem extends Struct {
	/**
	 * Código da mensagem de erro/aviso
	 *
	 * @var string
	 */
	public $cCodigo;
	/**
	 * Descrição da mensagem de erro/aviso.
	 *
	 * @var string
	 */
	public $cDescricao;
	/**
	 * Correção da descrição de mensagem de erro/aviso.
	 *
	 * @var string
	 */
	public $cCorrecao;
}