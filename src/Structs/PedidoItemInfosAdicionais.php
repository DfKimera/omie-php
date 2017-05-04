<?php
/**
 * omie-php
 * PedidoItemInfosAdicionais.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:31
 */

namespace DfKimera\OmiePhp\Structs;


class PedidoItemInfosAdicionais extends Struct {

	/**
	 * Id único do produto/serviço
	 *
	 * @var integer
	 */
	public $codigo_produto;
	/**
	 * Código de integração do Produto&nbsp;
	 *
	 * @var string
	 */
	public $codigo_produto_integracao;
	/**
	 * Código do Produto
	 *
	 * @var string
	 */
	public $codigo;
	/**
	 * Descrição do Produto / Serviço
	 *
	 * @var string
	 */
	public $descricao;
	/**
	 * CFOP da venada do produto
	 *
	 * @var string
	 */
	public $cfop;
	/**
	 * NCM - Nomenclatura Comum do Mercosul
	 *
	 * @var string
	 */
	public $ncm;
	/**
	 * Código GTIN (Global Trade Item Number)
	 *
	 * @var string
	 */
	public $ean;
	/**
	 * Código da Unidade
	 *
	 * @var string
	 */
	public $unidade;
	/**
	 * Quantidade do Item
	 *
	 * @var float
	 */
	public $quantidade;
	/**
	 * Valor Unitário do Item
	 *
	 * @var float
	 */
	public $valor_unitario;
	/**
	 * Código da tabela de preço.
	 * (Interno, utilizado apenas na integração via API, não é exibido na tela).
	 * Deve ser informada opcionalmente, caso a tabela de preços esteja configurada no Omie.
	 *
	 * @var integer
	 */
	public $codigo_tabela_preco;
	/**
	 * Valor da Mercadoria
	 *
	 * @var float
	 */
	public $valor_mercadoria;
	/**
	 * Tipo do desconto: (V)alor ou (P)ercentual
	 *
	 * @var string
	 */
	public $tipo_desconto;
	/**
	 * Percentual do Desconto
	 *
	 * @var float
	 */
	public $percentual_desconto;
	/**
	 * Valor do Desconto
	 *
	 * @var float
	 */
	public $valor_desconto;
	/**
	 * Valor das Deduções do Item
	 *
	 * @var float
	 */
	public $valor_deducao;
	/**
	 * Valor Total do Item
	 *
	 * @var float
	 */
	public $valor_total;

}