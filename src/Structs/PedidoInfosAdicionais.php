<?php
/**
 * omie-php
 * PedidoInformacoesAdicionais.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:15
 */

namespace DfKimera\OmiePhp\Structs;


class PedidoInfosAdicionais extends Struct {

	/**
	 * Categoria da venda.
	 *
	 * @var string
	 */
	public $codigo_categoria;
	/**
	 * Código da Conta Corrente
	 *
	 * @var integer
	 */
	public $codigo_conta_corrente;
	/**
	 * Número do pedido do cliente
	 *
	 * @var string
	 */
	public $numero_pedido_cliente;
	/**
	 * Número do Contrato de Venda
	 *
	 * @var string
	 */
	public $numero_contrato;
	/**
	 * Contato
	 *
	 * @var string
	 */
	public $contato;
	/**
	 * Dados adicionais do pedido.
	 *
	 * @var string
	 */
	public $dados_adicionais_nf;
	/**
	 * Consumidor Final (S/N)
	 *
	 * @var string
	 */
	public $consumidor_final;
	/**
	 * Utilizar os seguintes endereços de e-mail.
	 *
	 * @var string
	 */
	public $utilizar_emails;
	/**
	 * Enviar e-mail com Boleto, DANFE e XML
	 *
	 * @var string
	 */
	public $enviar_email;
	/**
	 * Código do Vendedor
	 *
	 * @var integer
	 */
	public $codVend;
	/**
	 * Código do Projeto
	 *
	 * @var integer
	 */
	public $codProj;

}