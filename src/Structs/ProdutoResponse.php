<?php
/**
 * omie-php
 * ProdutoStatus.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 18:51
 */

namespace DfKimera\OmiePhp\Structs;


class ProdutoResponse extends Struct {

	/**
	 * Código do produto.<BR>(Código interno utilizado apenas na API).<BR>Esse código não aparece na tela do Omie.<BR>Utilize esse código para identificar um produto via API, para obter uma melhor performance. <BR>Opcionalmente você pode informar o código de integração para localizar um produto através do campo "codigo_produto_integracao".
	 *
	 * @var integer
	 */
	public $codigo_produto;
	/**
	 * Código de integração do produto.<BR>(Utilizado para integração via API)<BR>Esse código não aparece na tela do Omie.<BR>Utilize esse campo quando incluir um produto e desejar associar o código do produto do seu aplicativo com o código de produto gerado pelo Omie.<BR>O preenchimento desse campo é obrigatório na inclusão e opcional para os demais métodos.<BR>
	 *
	 * @var string
	 */
	public $codigo_produto_integracao;
	/**
	 * Codigo do Status
	 *
	 * @var string
	 */
	public $codigo_status;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public $descricao_status;

}