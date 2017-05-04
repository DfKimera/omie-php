<?php
/**
 * omie-php
 * ProdutoLista.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 18:46
 */

namespace DfKimera\OmiePhp\Structs;


use Illuminate\Support\Collection;

class ProdutoLista extends Struct {

	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public $pagina;
	/**
	 * Número total de páginas
	 *
	 * @var integer
	 */
	public $total_de_paginas;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public $registros;
	/**
	 * total de registros encontrados
	 *
	 * @var integer
	 */
	public $total_de_registros;
	/**
	 * Cadastro completo de produtos
	 *
	 * @var Collection
	 */
	public $produtos;

	public function setProduto_Servico_Cadastro($data) {
		$this->produtos = collect($data)->map(function ($item) {
			return new Produto($item);
		});
	}

}