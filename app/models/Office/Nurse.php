<?php

namespace System\MyHospital\models\Office;

use System\MyHospital\models\General\Employee;

class Nurse extends Employee
{

    private $desc;

    public function __construct(array $dataPerson)
    {
        parent::__construct($dataPerson);

        $this->desc = "Enfermeiro(a)";
    }
}