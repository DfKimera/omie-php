<?php
/**
 * omie-php
 * PedidoCabecalho.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:12
 */

namespace DfKimera\OmiePhp\Structs;


class PedidoCabecalho extends Struct {

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
	 * Código do cliente
	 *
	 * @var integer
	 */
	public $codigo_cliente;
	/**
	 * Código Integração da Transportadora
	 *
	 * @var string
	 */
	public $codigo_cliente_integracao;
	/**
	 * Data da previsão da emissão
	 *
	 * @var string
	 */
	public $data_previsao;
	/**
	 * Quantidade de Itens
	 *
	 * @var integer
	 */
	public $quantidade_itens;
	/**
	 * Etapa ou lista para ser exibido.
	 *
	 * @var string
	 */
	public $etapa;
	/**
	 * Código da parcela no Omie:
	 * @see https://app.omie.com.br/api/v1/produtos/pedido/#cabecalho
	 * @var string
	 */
	public $codigo_parcela;
	/**
	 * Quantidade de parcelas.
	 *
	 * @var integer
	 */
	public $qtde_parcelas;
	/**
	 * Pedido Bloqueado pela API
	 *
	 * @var string
	 */
	public $bloqueado;
	/**
	 * Pedido de venda de produto importada pela API
	 *
	 * @var string
	 */
	public $importado_api;
	/**
	 * DEPRECATED
	 *
	 * @var integer
	 */
	public $codigo_empresa;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public $codigo_empresa_integracao;

}