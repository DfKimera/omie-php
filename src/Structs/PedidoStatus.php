<?php
/**
 * omie-php
 * PedidoStatus.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:40
 */

namespace DfKimera\OmiePhp\Structs;


use Illuminate\Support\Collection;

class PedidoStatus extends Struct {

	/**
	 * Código do Pedido de Venda de Produto
	 *
	 * @var integer
	 */
	public $codigo_pedido;
	/**
	 * Código de Integração do Pedido de Venda de Produto&nbsp;
	 *
	 * @var string
	 */
	public $codigo_pedido_integracao;
	/**
	 * Número do pedido - Visualizado pelo cliente.&nbsp;
	 *
	 * @var string
	 */
	public $numero_pedido;
	/**
	 * Etapa ou lista para ser exibido.
	 *
	 * @var string
	 */
	public $etapa;
	/**
	 * NF-e Cancelada?
	 *
	 * @var string
	 */
	public $cancelada;
	/**
	 * Indica que o pedido foi Faturado
	 *
	 * @var string
	 */
	public $faturada;
	/**
	 * Ambiente da NF-e (Danfe)
	 *
	 * @var string
	 */
	public $ambiente;
	/**
	 * Valor total&nbsp;do pedido
	 *
	 * @var float
	 */
	public $valor_total_pedido;
	/**
	 * Lista de NF-es geradas
	 *
	 * @var Collection|NFE[]
	 */
	public $nfes;

	public function setListaNfe($value) {
		$this->nfes = collect($value)->map(function ($item) {
			return new NFE($item);
		});
	}

}