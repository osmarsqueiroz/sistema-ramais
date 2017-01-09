<?php

namespace Projeto\Base;

use Projeto\Contrato\EmpresaInterface;

/**
 * Description of Empresa
 *
 * @author osmar
 */
class Empresa implements EmpresaInterface {

    //put your code here

    private $nome;

    public function __construct($nome = "") {
        $this->nome($nome);
    }

    public function nome($nome) {
        $this->nome = $nome;
    }

    public function toString() {
        echo "Empresa " . $this->nome;
    }

}
