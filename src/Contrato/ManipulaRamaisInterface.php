<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Projeto\Contrato;

/**
 *
 * @author osmar
 */
interface ManipulaRamaisInterface {

    //put your code here

    public function adicionar($numero);

    public function removerNumero($numero);

    public function removerNumeroPosicao($posicao);

    public function editarNumeroPosicao($posicao, $numero);

    public function buscarLista();
}
