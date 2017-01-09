<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Projeto\Agregadores;

use Projeto\Contrato\ManipulaRamaisInterface,
    Projeto\Base\Ramal;

/**
 * Description of ManipularRamais
 *
 * @author osmar
 */
class ManipularRamais implements ManipulaRamaisInterface {

    //put your code here
    private $ramais = array();

    public function adicionar($numero) {
        if (!is_object($numero)) {
            $numero = new Ramal($numero);
        }
        $this->ramais[] = $numero;
    }

    public function buscarLista() {
        return $this->ramais;
    }

    public function removerNumero($numero) {
        foreach ($this->ramais as $posicao => $ramal) {
            if ($ramal->getNumero() == $numero) {
                unset($this->ramais[$posicao]);
                break;
            }
        }
    }

    public function removerNumeroPosicao($posicao) {
        if (isset($this->ramais[$posicao])) {
            unset($this->ramais[$posicao]);
        }
    }

    public function editarNumeroPosicao($posicao, $numero) {
        $this->ramais[$posicao]->setRamal($numero);
    }

}
