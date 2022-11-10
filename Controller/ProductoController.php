<?php
require_once 'model/producto.php';

class ProductoController
{

    private $model;

    public function __construct()
    {
        $this->model = new producto();
    }

    //Llamado plantilla principal
    public function Index()
    {
        require_once 'view/producto/producto.php';
    }

    public function getAll()
    {
        header('Content-Type: application/json');
        $data = $this->model->Listar();
        echo json_encode($data);
    }
    public function findProduct()
    {
        header('Content-Type: application/json');
        extract($_GET);
        $data = $this->model->find($text);
        echo json_encode($data);
    }
}
