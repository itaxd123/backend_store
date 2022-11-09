<?php
class producto
{
	private $pdo;

	public $idProducto;
	public $nit;
	public $nomprod;
	public $precioU;
	public $descrip;

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::Conectar();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try {
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM product");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function find($text)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM product where name LIKE ?");
			$stm->execute(["%$text%"]);

			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
