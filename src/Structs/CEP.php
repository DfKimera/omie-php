<?php
/**
 * omie-php
 * CEP.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 17:43
 */

namespace DfKimera\OmiePhp\Structs;


class CEP extends Struct {

	/**
	 * Código do Endereçamento Postal
	 *
	 * @var string
	 */
	public $cep;
	/**
	 * Endereço
	 *
	 * @var string
	 */
	public $endereco;
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
	 * Código do município conforme tabela do IBGE
	 *
	 * @var string
	 */
	public $ibge;

}