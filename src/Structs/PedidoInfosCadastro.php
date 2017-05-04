<?php
/**
 * omie-php
 * PedidoInfoCadastro.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:18
 */

namespace DfKimera\OmiePhp\Structs;


class PedidoInfosCadastro extends Struct {

	/**
	 * Data da Inclusão.
	 *
	 * @var string
	 */
	public $dInc;
	/**
	 * Hora da Inclusão.
	 *
	 * @var string
	 */
	public $hInc;
	/**
	 * Usuário da Inclusão.
	 *
	 * @var string
	 */
	public $uInc;
	/**
	 * Data da Alteração.
	 *
	 * @var string
	 */
	public $dAlt;
	/**
	 * Hora da Alteração.
	 *
	 * @var string
	 */
	public $hAlt;
	/**
	 * Usuário da Alteração.
	 *
	 * @var string
	 */
	public $uAlt;
	/**
	 * Importado pela API (S/N).
	 *
	 * @var string
	 */
	public $cImpAPI;

}