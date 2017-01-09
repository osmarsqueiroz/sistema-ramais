<?php

namespace Site;

include('../vendor/autoload.php');

use Projeto\Base\Empresa,
    Projeto\Base\Cargo,
    Projeto\Base\Funcionario,
    Projeto\Base\Ramal;

$empresa = new Empresa("GIT");
$cargo = new Cargo("Programador");
$ramal = new Ramal(1212);

$funcionario = new Funcionario("osmar");
$funcionario->setCargo($cargo);
$funcionario->adicionar($ramal);

$funcionario->toString();
