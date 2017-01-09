<?php

namespace Projeto\Base;

use Projeto\Contrato\FuncionarioInterface,
    Projeto\Agregadores\ManipularRamais,
    Projeto\Contrato\CargoInterface,
    Projeto\Contrato\EmpresaInterface;

/**
 * Description of Funcionario
 * 
 * @property Projeto\Contrato\EmpresaInterface $empresa 
 * @property Projeto\Contrato\CargoInterface $cargo 
 * @property String $nome
 * 
 * 
 */
class Funcionario extends ManipularRamais implements FuncionarioInterface {
    
    
    
    private $nome;
    private $cargo;
    private $empresa;

    public function __construct($nome = "") {
        $this->setNome($nome);
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCargo(CargoInterface $cargo) {
        $this->cargo = $cargo;
    }

    public function setEmpresa(EmpresaInterface $empresa) {
        $this->empersa = $empresa;
    }

    public function toString() {
        echo "Empresa ".$this->empresa->toString();
    }

}
