<?php

namespace System\MyHospital\config;

class DataBase
{
    static public function arrPersons()
    {

        return $arr =
            [
                [
                    "tipo" => "Empregado",
                    "nome" => "Chule",
                    "sobrenome" => "Cabral dos Santos",
                    "dt_nascimento" => "14/07/1989",
                    "cpf" => "120.675.917-89"
                ],
                [
                    "tipo" => "Empregado",
                    "nome" => "Dian Carlos",
                    "sobrenome" => "Cabral dos Santos",
                    "dt_nascimento" => "22/08/1994",
                    "cpf" => "147.098.607-85"
                ],
                [
                    "tipo" => "Enfermeiro",
                    "nome" => "Larissa",
                    "sobrenome" => "Sacramento",
                    "dt_nascimento" => "15/03/1991",
                    "cpf" => "147.098.607-85"
                ],
                [
                    "tipo" => "Paciente",
                    "nome" => "Marlon",
                    "sobrenome" => "Boecker",
                    "dt_nascimento" => "20/08/1993",
                    "cpf" => "147.098.607-85"
                ]
            ];
    }
}