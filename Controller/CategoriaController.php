<?php
require_once 'model/categoria.php';
class CategoriaController{

    private $model;

    public function __construct(){
        $this->model = new categoria();
    }

    public function getAll(){
        header('Content-Type: application/json');
        $data = $this->model->getAllCategories();
        echo json_encode($data);

    }

    public function getProductforCategory(){
        header('Content-Type: application/json');
        extract($_GET);
        $data = $this->model->getProductForCategory($id);
        echo json_encode($data);
    }
}
