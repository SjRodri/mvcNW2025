<?php

namespace Controllers\Mantenimientos\Productos;

use Controllers\PublicController;
use Dao\Producto\Categorias as CategoriasDAO;
use Views\Renderer;

class Categoria extends PublicController
{
    private array $viewData;
    public function __construct()
    {
        $this->viewData = [
            "id" => 0,
            "categoria" => "",
            "estado" => "ACT"
        ];
    }
    public function run(): void
    {
        if (isset($_GET["id"])) {
            $this->viewData["id"] = intval($_GET["id"]);
            $categoria = CategoriasDAO::getCateoriasById($this->viewData["id"]);
            if (count($categoria) > 0) {
                $this->viewData["categoria"] = $categoria["categoria"];
                $this->viewData["estado"] = $categoria["estado"];
            }
        }
        Renderer::render("mnt/productos/categoria", $this->viewData);
    }
}
