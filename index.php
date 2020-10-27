<?php

include 'app/config/autoload.php';

use System\MyHospital\config\DataBase;
use System\MyHospital\models\Office\Nurse;

echo PHP_EOL;

###############################################################################

$initId = 1000;

$pessoas = DataBase::arrPersons();

$enfermeiros = [];

foreach ($pessoas as $key => $newPessoa) {

    $tipo = $newPessoa['tipo'];

    $arrDados =
        [
            'id' => $key + $initId,
            'nome' => $newPessoa['nome'],
            'sobrenome' => $newPessoa['sobrenome'],
            'dt_nascimento' => $newPessoa['dt_nascimento'],
            'cpf' => $newPessoa['cpf']
        ];

    if ($tipo == "Enfermeiro")
        $enfermeiros[$key] = new Nurse($arrDados);

}

foreach ($enfermeiros as $enfermeiro) {

    if ($enfermeiro->checkCreate())
        print_r($enfermeiro);
}


###############################################################################

echo PHP_EOL . PHP_EOL;


?>