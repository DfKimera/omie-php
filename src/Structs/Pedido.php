<?php
/**
 * omie-php
 * Pedido.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:11
 */

namespace DfKimera\OmiePhp\Structs;

use Illuminate\Support\Collection;

class Pedido extends Struct {

	/**
	 * Informações do cabeçalho do pedido
	 *
	 * @var PedidoCabecalho
	 */
	public $cabecalho;

	public function setCabecalho($value) {
		$this->cabecalho = new PedidoCabecalho($value);
	}

	/**
	 * Dados do Frete do pedido
	 *
	 * @var Frete
	 */
	public $frete;

	public function setFrete($value) {
		$this->frete = new Frete($value);
	}

	/**
	 * Dados adicionais do pedido.
	 *
	 * @var PedidoInfosAdicionais
	 */
	public $informacoes_adicionais;

	public function setInformacoes_Adicionais($value) {
		$this->informacoes_adicionais = new PedidoInfosAdicionais($value);
	}

	/**
	 * Observação do pedido.
	 *
	 * @var string
	 */
	public $observacoes;

	public function setObservacoes($value) {
		$this->observacoes = $value->obs_venda ?? '';
	}

	/**
	 * Lista de informações das parcelas
	 *
	 * @var Collection
	 */
	public $lista_parcelas;

	public function setLista_Parcelas($value) {
		$this->lista_parcelas = collect($value)->map(function ($item) {
			return new PedidoParcela($item);
		});
	}

	/**
	 * @var Collection
	 */
	public $itens;

	public function setDet($value) {
		$this->itens = collect($value)->map(function ($item) {
			return new PedidoItem($item);
		});
	}

	/**
	 * Valores totais do pedido
	 *
	 * @var PedidoTotal
	 */
	public $total_pedido;

	public function setTotal_Pedido($value) {
		$this->total_pedido = new PedidoTotal($value);
	}

	/**
	 * Informações complementares do pedido.
	 *
	 * @var PedidoInfosCadastro
	 */
	public $infoCadastro;

	public function setInfoCadastro($value) {
		$this->infoCadastro = new PedidoInfosCadastro($value);
	}

	public function toArray(): array {
		$data = (array) $this;
		$data['det'] = is_object($data['itens']) ? ($data['itens']->toArray()) : ((array) $data['itens']);
		$data['lista_parcelas'] = [
			'parcela' => is_object($data['lista_parcelas']) ? ($data['lista_parcelas']->toArray()) : ((array) $data['lista_parcelas'])
		];

		unset($data['itens']);

		return $data;
	}

}