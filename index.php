<?php

include 'app/config/autoload.php';

use System\MyHospital\config\DataBase;
use System\MyHospital\models\Employee;

echo PHP_EOL;

###############################################################################

$initId = 1000;

$pessoas = DataBase::arrPersons();
$jobs = DataBase::arrJobs();

$funcionarios = [];

foreach ($pessoas as $key => $newPessoa) {

    $getJob = NULL;

    if (!IS_NULL($newPessoa['id_job']))
        $getJob = $jobs[$newPessoa['id_job']]['desc'];

    $funcionarios[$key] = new Employee(
        [
            'id' => $key + $initId,
            'nome' => $newPessoa['nome'],
            'sobrenome' => $newPessoa['sobrenome'],
            'dt_nascimento' => $newPessoa['dt_nascimento'],
            'cpf' => $newPessoa['cpf']

        ],
        $getJob);

}

foreach ($funcionarios as $funcionario) {

    if ($funcionario->checkCreate())
        var_dump($funcionario);
}


###############################################################################

echo PHP_EOL . PHP_EOL;


?>