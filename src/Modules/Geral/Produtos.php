<?php
/**
 * omie-php
 * Produtos.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 18:44
 */

namespace DfKimera\OmiePhp\Modules\Geral;


use DfKimera\OmiePhp\Core\RestClient;
use DfKimera\OmiePhp\Core\Utils;
use DfKimera\OmiePhp\Structs\Produto;
use DfKimera\OmiePhp\Structs\ProdutoLista;
use DfKimera\OmiePhp\Structs\ProdutoResponse;

class Produtos extends RestClient {

	protected $uri = 'geral/produtos/';

	public function listar($pagina = 1, $registrosPorPagina = 50, $apenasImportadoAPI = false, $apenasOmiePDV = false) : ProdutoLista {
		$result = $this->call('ListarProdutos', [
			'pagina' => $pagina,
			'registros_por_pagina' => $registrosPorPagina,
			'apenas_importado_api' => Utils::booleanToYesno($apenasImportadoAPI),
			'filtrar_apenas_omiepdv' => Utils::booleanToYesno($apenasOmiePDV),
		]);

		return new ProdutoLista($result);
	}

	public function incluir(Produto $cliente) : ProdutoResponse {

		$result = $this->call('IncluirProduto', $cliente->toArray());
		return new ProdutoResponse($result);

	}

	public function alterar(Produto $cliente) : ProdutoResponse {

		$result = $this->call('AlterarProduto', $cliente->toArray());
		return new ProdutoResponse($result);

	}

	public function consultar($codigoOmie) : Produto {
		$result = $this->call('ConsultarProduto', [
			'codigo_produto' => $codigoOmie
		]);

		return new Produto($result);
	}

}