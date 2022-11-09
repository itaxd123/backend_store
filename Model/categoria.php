<?php
class categoria
{

	private $pdo;
	public $id;
	public $nombre;
	public $estado;

	public function __construct()
	{
		try {
			$this->pdo = Database::Conectar();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function getAllCategories()
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM category");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function getProductForCategory($id)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM product WHERE category = $id");
			// $stm->execute($id);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
