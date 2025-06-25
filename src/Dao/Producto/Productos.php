<?php

namespace Dao\Producto;

use Dao\Table;

class Productos extends Table
{
    public static function obtenerProductos(): array
    {
        return [
            [
                "id" => "0001",
                "description" => "Producto 1",
                "precio" => 50.00,
                "estado" => "ACT",
                "stock" => 100
            ],
            [
                "id" => "0002",
                "description" => "Producto 2",
                "precio" => 100.23,
                "estado" => "ACT",
                "stock" => 100
            ],
            [
                "id" => "0003",
                "description" => "Producto 3",
                "precio" => 96.25,
                "estado" => "ACT",
                "stock" => 100
            ]
        ];
    }
}
