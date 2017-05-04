<?php
/**
 * omie-php
 * ProdutoIBPT.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 18:47
 */

namespace DfKimera\OmiePhp\Structs;


/**
 * Dados do IBPT
 *
 * @pw_element float $aliqFederal Carga tributária federal para os produtos nacionais
 * @pw_element float $aliqEstadual Carga tributária estadual
 * @pw_element float $aliqMunicipal Carga tributária municipal
 * @pw_element string $fonte Fonte
 * @pw_element string $chave Número da versão do arquivo
 * @pw_complex dadosIbpt
 */
class ProdutoIBPT extends Struct {
	/**
	 * Carga tributária federal para os produtos nacionais
	 *
	 * @var float
	 */
	public $aliqFederal;
	/**
	 * Carga tributária estadual
	 *
	 * @var float
	 */
	public $aliqEstadual;
	/**
	 * Carga tributária municipal
	 *
	 * @var float
	 */
	public $aliqMunicipal;
	/**
	 * Fonte
	 *
	 * @var string
	 */
	public $fonte;
	/**
	 * Número da versão do arquivo
	 *
	 * @var string
	 */
	public $chave;
}