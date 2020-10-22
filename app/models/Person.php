<?php

namespace System\MyHospital\models;

include 'app/config/autoload.php';

use System\MyHospital\helpers\CustomHelpers;

abstract class Person
{
    protected $id;
    protected $first_name;
    protected $last_name;
    protected $date_birth;
    protected $age;
    protected $cpf;

    public function __construct(
        Int $id,
        String $first_name,
        String $last_name,
        String $date_birth,
        String $cpf)
    {
        $checkDate = CustomHelpers::validateDate($date_birth);
        $checkCpf = CustomHelpers::validateCPF($cpf);

        $checkRestrictions[$id] =
            [
                'Person' => "{$first_name} {$last_name}",
                'errors' => []
            ];

        if (!$checkDate)
            $checkRestrictions[$id]['errors'][] = 'Data de Nascimento com Formato Inválido!';

        if (!$checkCpf)
            $checkRestrictions[$id]['errors'][] = 'CPF no Formato Inválido!';

        if (!empty($checkRestrictions[$id]['errors'])) {

            var_dump($checkRestrictions[$id]);

        } else {

            $this->id = $id;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->date_birth = $date_birth;
            $this->age = $this->getAge($date_birth);
            $this->cpf = $cpf;
        }
    }

    private function getAge($date_birth)
    {

        $dt_birth = str_replace('/', '-', $date_birth);

        $data_one = new \DateTime(date("Y-m-d"));
        $data_two = new \DateTime(date('Y-m-d', strtotime($dt_birth)));

        return $data_one->diff($data_two)->y;

    }
}