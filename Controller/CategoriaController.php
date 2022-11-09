<?php
require_once 'model/categoria.php';
class CategoriaController{

    private $model;

    public function __construct(){
        $this->model = new categoria();
    }

    public function getAll(){
        $data = $this->model->getAllCategories();
        echo json_encode($data);

    }

    public function getProductforCategory(){
        extract($_POST);
        $data = $this->model->getProductForCategory($id);
        echo json_encode($data);
    }
}
