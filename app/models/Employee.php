<?php

namespace System\MyHospital\models;

use System\MyHospital\models\Person;

class Employee extends Person
{
    private $job;

    public function __construct(array $dataPerson, String $job = NULL)
    {
        parent::__construct(
            $dataPerson['id'],
            $dataPerson['nome'],
            $dataPerson['sobrenome'],
            $dataPerson['dt_nascimento'],
            $dataPerson['cpf']);

        $this->job = $job;

    }

    public function checkCreate()
    {
        if (!IS_NULL($this->id))
            return TRUE;

        return FALSE;
    }


}