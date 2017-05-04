<?php
/**
 * omie-php
 * NFE.php
 *
 * Copyright (c) LQDI Digital
 * www.lqdi.net - 2017
 *
 * @author Aryel Tupinambá <aryel.tupinamba@lqdi.net>
 *
 * Created at: 03/05/2017, 19:41
 */

namespace DfKimera\OmiePhp\Structs;


use Illuminate\Support\Collection;

class NFE extends Struct {

	/**
	 * Número do lote da NF-e
	 *
	 * @var integer
	 */
	public $numero_lote;
	/**
	 * Status do Lote da NF-e.
	 *
	 * @var string
	 */
	public $status_lote;
	/**
	 * Recibo
	 *
	 * @var integer
	 */
	public $recibo;
	/**
	 * NF-e emitida em contingência
	 *
	 * @var string
	 */
	public $contingencia;
	/**
	 * Número da NF-e gerada
	 *
	 * @var string
	 */
	public $numero_nfe;
	/**
	 * Chave de Acesso da NF-e
	 *
	 * @var string
	 */
	public $status_nfe;
	/**
	 * Chave de Acesso da NF-e
	 *
	 * @var string
	 */
	public $chave_nfe;
	/**
	 * Número do Protocolo
	 *
	 * @var integer
	 */
	public $protocolo;
	/**
	 * Tipo de Emissão.
	 *  Pode ser:
	 *  E - Entrada
	 *  S - Saída
	 *
	 * @var string
	 */
	public $tipo;
	/**
	 * Data da Emissão da NF-e
	 *
	 * @var string
	 */
	public $data_emissao;
	/**
	 * Hora da Emissão da NF-e
	 *
	 * @var string
	 */
	public $hora_emissao;
	/**
	 * Data do faturamento
	 *
	 * @var string
	 */
	public $data_fatura;
	/**
	 * Hora de Faturamento
	 *
	 * @var string
	 */
	public $hora_fatura;
	/**
	 * Data de Saída
	 *
	 * @var string
	 */
	public $data_saida;
	/**
	 * Hora de Saída da NF-e
	 *
	 * @var string
	 */
	public $hora_saida;
	/**
	 * Mensagens de Erros
	 *
	 * @var Collection|NFEMensagem[]
	 */
	public $mensagens;

	public function setMensagens($value) {
		$this->mensagens = collect($value)->map(function ($item) {
			return new NFEMensagem($item);
		});
	}

	/**
	 * XML de distribuição da NF-e
	 *
	 * @var string
	 */
	public $xml_distr;
	/**
	 * Link para o DANFE da NF-e gerada.
	 *
	 * @var string
	 */
	public $danfe;

}