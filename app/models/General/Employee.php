<?php

namespace System\MyHospital\models\General;

use System\MyHospital\models\General\Person;

abstract class Employee extends Person
{

    protected $code;
    protected $admission;
    protected $active;

    public function __construct(array $dataPerson)
    {
        parent::__construct(
            $dataPerson['id'],
            $dataPerson['nome'],
            $dataPerson['sobrenome'],
            $dataPerson['dt_nascimento'],
            $dataPerson['cpf']);

        $this->code = $dataPerson['id'] . '.' . substr($dataPerson['cpf'], 0, 3);
        $this->admission = date('Y-m-d');
        $this->active = TRUE;
    }
}