<?php

namespace Projeto\Base;

use Projeto\Contrato\RamalInterface;

/**
 * Description of Ramal
 *
 * @author osmar
 */
class Ramal implements RamalInterface {

    //put your code here
    private $numero;

    public function __construct($numero = null) {
        $this->setRamal($numero);
    }

    public function setRamal($numero) {
        $this->numero = (int) $numero;
    }

    public function getRamal() {
        return $this->numero;
    }

}
