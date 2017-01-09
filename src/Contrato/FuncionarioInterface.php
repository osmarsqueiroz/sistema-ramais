<?php

namespace Projeto\Contrato;

use Projeto\Contrato\ManipulaRamaisInterface;

/**
 *
 * @author osmar
 */
interface FuncionarioInterface {

    //put your code here
    public function setNome($nome);

    public function setCargo(CargoInterface $cargo);

    public function setEmpresa(EmpresaInterface $empresa);
}
