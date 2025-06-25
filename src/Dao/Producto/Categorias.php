<?php

namespace Dao\Producto;

use Dao\Table;

class Categorias extends Table
{

    public static function getCategorias()
    {
        $sqlstr = "SELECT * from categorias;";
        return self::obtenerRegistros($sqlstr, []);
    }

    public static function getCateoriasById(int $categoriaId)
    {
        $sqlstr = "SELECT * from categorias where id = :id;";
        return self::obtenerUnRegistro($sqlstr, ["id" => $categoriaId]);
    }
    public static function nuevaCategoria(string $categoria, string $estado)
    {
        $sqlstr = "INSERT INTO categorias (categoria, estado) VALUES (:categoria, :estado);";
        return self::executeNonQuery(
            $sqlstr,
            [
                "categoria" => $categoria,
                "estado" => $estado
            ]
        );
    }
}
