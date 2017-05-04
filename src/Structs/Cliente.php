<?php
/**
 * omie-php
 * Cliente.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 17:39
 */

namespace DfKimera\OmiePhp\Structs;


class Cliente extends Struct {

	/**
	 * Código de Cliente / Fornecedor
	 *
	 * @var integer
	 */
	public $codigo_cliente_omie;
	/**
	 * Código de Integração com sistemas legados.
	 *
	 * @var string
	 */
	public $codigo_cliente_integracao;
	/**
	 * CNPJ / CPF
	 *
	 * @var string
	 */
	public $cnpj_cpf;
	/**
	 * Razão Social
	 *
	 * @var string
	 */
	public $razao_social;
	/**
	 * Nome Fantasia
	 *
	 * @var string
	 */
	public $nome_fantasia;
	/**
	 * Logradouro
	 *
	 * @var string
	 */
	public $logradouro;
	/**
	 * Endereço
	 *
	 * @var string
	 */
	public $endereco;
	/**
	 * Número do Endereço
	 *
	 * @var string
	 */
	public $endereco_numero;
	/**
	 * Complemento para o Número do Endereço
	 *
	 * @var string
	 */
	public $complemento;
	/**
	 * Bairro
	 *
	 * @var string
	 */
	public $bairro;
	/**
	 * Código da Cidade
	 *
	 * @var string
	 */
	public $cidade;
	/**
	 * Sigla do Estado
	 *
	 * @var string
	 */
	public $estado;
	/**
	 * CEP
	 *
	 * @var string
	 */
	public $cep;
	/**
	 * Código do País
	 *
	 * @var string
	 */
	public $codigo_pais;
	/**
	 * Nome para contato
	 *
	 * @var string
	 */
	public $contato;
	/**
	 * DDD Telefone
	 *
	 * @var string
	 */
	public $telefone1_ddd;
	/**
	 * Telefone para Contato
	 *
	 * @var string
	 */
	public $telefone1_numero;
	/**
	 * DDD Telefone 2
	 *
	 * @var string
	 */
	public $telefone2_ddd;
	/**
	 * Telefone 2
	 *
	 * @var string
	 */
	public $telefone2_numero;
	/**
	 * DDD Fax
	 *
	 * @var string
	 */
	public $fax_ddd;
	/**
	 * Fax
	 *
	 * @var string
	 */
	public $fax_numero;
	/**
	 * E-Mail
	 *
	 * @var string
	 */
	public $email;
	/**
	 * WebSite
	 *
	 * @var string
	 */
	public $homepage;
	/**
	 * Observação
	 *
	 * @var string
	 */
	public $observacao;
	/**
	 * Inscrição Municipal
	 *
	 * @var string
	 */
	public $inscricao_municipal;
	/**
	 * Inscrição Estadual
	 *
	 * @var string
	 */
	public $inscricao_estadual;
	/**
	 * Inscrição Suframa
	 *
	 * @var string
	 */
	public $inscricao_suframa;
	/**
	 * Pessoa Física
	 *
	 * @var string
	 */
	public $pessoa_fisica;
	/**
	 * Indica se o Cliente / Fornecedor é Optante do Simples Nacional [S/N]
	 *
	 * @var string
	 */
	public $optante_simples_nacional;
	/**
	 * Registro Bloqueado pela API
	 *
	 * @var string
	 */
	public $bloqueado;
	/**
	 * Gerado da API (S/N)
	 *
	 * @var string
	 */
	public $importado_api;

}