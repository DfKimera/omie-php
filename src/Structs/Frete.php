<?php
/**
 * omie-php
 * Frete.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:12
 */

namespace DfKimera\OmiePhp\Structs;


class Frete extends Struct {

	/**
	 * Código da transportadora.
	 *
	 * @var integer
	 */
	public $codigo_transportadora;
	/**
	 * Código Integração da Transportadora
	 *
	 * @var string
	 */
	public $codigo_transportadora_integracao;
	/**
	 * Modalidade do Frete
	 *
	 * @var string
	 */
	public $modalidade;
	/**
	 * Placa do Veículo
	 *
	 * @var string
	 */
	public $placa;
	/**
	 * Estado da Placa do Veículo&nbsp;
	 *
	 * @var string
	 */
	public $placa_estado;
	/**
	 * Quantidade de Volumes
	 *
	 * @var integer
	 */
	public $quantidade_volumes;
	/**
	 * Espécie dos volumes
	 *
	 * @var string
	 */
	public $especie_volumes;
	/**
	 * Marca dos volumes&nbsp;
	 *
	 * @var string
	 */
	public $marca_volumes;
	/**
	 * Numeração dos volumes&nbsp;
	 *
	 * @var string
	 */
	public $numeracao_volumes;
	/**
	 * Peso Líquido.
	 *
	 * @var float
	 */
	public $peso_liquido;
	/**
	 * Peso Bruto.
	 *
	 * @var float
	 */
	public $peso_bruto;
	/**
	 * Valor do Frete
	 *
	 * @var float
	 */
	public $valor_frete;
	/**
	 * Valor do Seguro
	 *
	 * @var float
	 */
	public $valor_seguro;
	/**
	 * Registro Nacional de Transportador de Cargas
	 *
	 * @var string
	 */
	public $registro_transportador;
	/**
	 * Número do Lacre
	 *
	 * @var string
	 */
	public $numero_lacre;
	/**
	 * Outras Despesas Acessórias.
	 *
	 * @var float
	 */
	public $outras_despesas;
	/**
	 * O transporte será realizado com veículo próprio? S/N
	 *
	 * @var string
	 */
	public $veiculo_proprio;

}