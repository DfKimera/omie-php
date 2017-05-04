<?php
/**
 * omie-php
 * ClienteCollection.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 17:40
 */

namespace DfKimera\OmiePhp\Structs;


use Illuminate\Support\Collection;

class ClienteLista extends Struct {

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
	 * Lista de clientes para cadastro.
	 *
	 * @var Collection
	 */
	public $clientes;

	public function setClientes_Cadastro($clientes) {
		$this->clientes = collect($clientes)->map(function ($item) {
			return new Cliente($item);
		});
	}

}