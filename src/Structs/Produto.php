<?php
/**
 * omie-php
 * Produto.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 18:46
 */

namespace DfKimera\OmiePhp\Structs;


class Produto extends Struct {

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
	 * Código do Produto.<BR>É o código do produto que é exibido na tela do Omie. <BR>Não utilize esse código para realizar a integração, ele tem função apenas informativa para o usuário e pode ser alterado a qualquer momento. <BR>Para integração utilize o código interno do produto através da tag "codigo_produto".<BR>
	 *
	 * @var string
	 */
	public $codigo;
	/**
	 * Descrição para o Produto / Serviço
	 *
	 * @var string
	 */
	public $descricao;
	/**
	 * GTIN (Global Trade Item Number)
	 *
	 * @var string
	 */
	public $ean;
	/**
	 * Código da Nomenclatura Comum do Mercosul
	 *
	 * @var string
	 */
	public $ncm;
	/**
	 * Quantidade em Estoque
	 *
	 * @var float
	 */
	public $quantidade_estoque;
	/**
	 * Código da Situação Tributária para Simples Nacional
	 *
	 * @var string
	 */
	public $csosn_icms;
	/**
	 * Código da Unidade
	 *
	 * @var string
	 */
	public $unidade;
	/**
	 * Valor unitário de Venda
	 *
	 * @var float
	 */
	public $valor_unitario;
	/**
	 * CST do ICMS
	 *
	 * @var string
	 */
	public $cst_icms;
	/**
	 * Alíquota de ICMS&nbsp;
	 *
	 * @var float
	 */
	public $aliquota_icms;
	/**
	 * Percentual de redução de base do ICMS
	 *
	 * @var float
	 */
	public $red_base_icms;
	/**
	 * Mantido apenas para compatibilidade - Sempre retorna ZERO.
	 *
	 * @var float
	 */
	public $aliquota_ibpt;
	/**
	 * Código do Tipo do Item para o SPED
	 *
	 * @var string
	 */
	public $tipoItem;
	/**
	 * Código da Situação Tributária do PIS
	 *
	 * @var string
	 */
	public $cst_pis;
	/**
	 * Alíquota de PIS
	 *
	 * @var float
	 */
	public $aliquota_pis;
	/**
	 * Código da Situação Tributária do PIS
	 *
	 * @var string
	 */
	public $cst_cofins;
	/**
	 * Alíquota de COFINS&nbsp;
	 *
	 * @var float
	 */
	public $aliquota_cofins;
	/**
	 * Cadastro Bloqueado pela API
	 *
	 * @var string
	 */
	public $bloqueado;
	/**
	 * Gerado pela API
	 *
	 * @var string
	 */
	public $importado_api;
	/**
	 * Código da Familia
	 *
	 * @var integer
	 */
	public $codigo_familia;
	/**
	 * Código de Integração da Familia
	 *
	 * @var string
	 */
	public $codInt_familia;
	/**
	 * Descrição da Familia&nbsp;
	 *
	 * @var string
	 */
	public $descricao_familia;
	/**
	 * Indica se o cadstro de produto está inativo [S/N]
	 *
	 * @var string
	 */
	public $inativo;
	/**
	 * Dados do IBPT
	 *
	 * @var ProdutoIBPT
	 */
	public $dadosIbpt;
	/**
	 * Código do CEST.
	 *
	 * @var string
	 */
	public $cest;
	/**
	 * CFOP do Produto.
	 *
	 * @var string
	 */
	public $cfop;
	/**
	 * Peso Líquido (Kg)
	 *
	 * @var float
	 */
	public $peso_liq;
	/**
	 * Peso Bruto (Kg)
	 *
	 * @var float
	 */
	public $peso_bruto;
	/**
	 * Quantidade do Estoque Mínimo
	 *
	 * @var float
	 */
	public $estoque_minimo;
	/**
	 * Descrição Detalhada para o Produto
	 *
	 * @var string
	 */
	public $descr_detalhada;
	/**
	 * Observações Internas
	 *
	 * @var string
	 */
	public $obs_internas;

	public function setDadosIbpt($data) {
		$this->dadosIbpt = new ProdutoIBPT($data);
	}

}