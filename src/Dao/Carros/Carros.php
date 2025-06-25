<?php

namespace Dao\Carros;

use Dao\Table;

class Carros extends Table
{
    public static function obtenerCarros(): array
    {
        $sqlstr = "SELECT * from carros;";
        return self::obtenerRegistros($sqlstr, []);
    }
}
