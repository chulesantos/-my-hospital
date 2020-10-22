<?php

namespace System\MyHospital\config;

class DataBase
{

    static public function arrJobs()
    {

        $arr = [];

        $arr[1]["desc"] = "Médico";
        $arr[2]["desc"] = "Enfermeiro";
        $arr[3]["desc"] = "Tec Enfermagem";
        $arr[4]["desc"] = "Fisioterapeuta";
        $arr[200]["desc"] = "Pleno Back-End Developer";
        $arr[201]["desc"] = "Senior Front-End Developer";

        return $arr;
    }

    static public function arrPersons()
    {

        return $arr =
            [
                [
                    "nome" => "Chule",
                    "sobrenome" => "Cabral dos Santos",
                    "dt_nascimento" => "14/07/1989",
                    "cpf" => "120.675.917-89",
                    "id_job" => 200
                ],
                [
                    "nome" => "Dian Carlos",
                    "sobrenome" => "Cabral dos Santos",
                    "dt_nascimento" => "22/08/1994",
                    "cpf" => "147.098.607-85",
                    "id_job" => 201
                ],
                [
                    "nome" => "Larissa",
                    "sobrenome" => "Sacramento",
                    "dt_nascimento" => "15/03/1991",
                    "cpf" => "147.098.607-85",
                    "id_job" => 2
                ],
                [
                    "nome" => "Marlon",
                    "sobrenome" => "Boecker",
                    "dt_nascimento" => "20/08/1993",
                    "cpf" => "147.098.607-85",
                    "id_job" => NULL
                ]
            ];
    }
}