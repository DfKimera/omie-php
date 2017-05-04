<?php
/**
 * omie-php
 * PedidoItem.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:16
 */

namespace DfKimera\OmiePhp\Structs;


use DfKimera\OmiePhp\Structs\Impostos\Imposto;

class PedidoItem extends Struct {

	/**
	 * @var PedidoItemIdentificador
	 */
	public $ide;

	public function setIde($value) {
		$this->ide = new PedidoItemIdentificador($value);
	}

	/**
	 * @var PedidoItemProduto
	 */
	public $produto;

	public function setProduto($value) {
		$this->produto = new PedidoItemProduto($value);
	}

	/**
	 * Observações do item
	 *
	 * @var string
	 */
	public $observacao;

	public function setObservacao($value) {
		$this->observacao = $value->obs_item ?? '';
	}

	/**
	 * @var PedidoItemInfosAdicionais
	 */
	public $inf_adic;

	public function setInf_Adic($value) {
		$this->inf_adic = new PedidoItemInfosAdicionais($value);
	}

	/**
	 * @var Imposto
	 */
	public $imposto;

	public function setImposto($value) {
		$this->imposto = new Imposto($value);
	}

}