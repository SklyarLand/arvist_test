<?php


namespace App\Core;


use App\Config\Database;
use PDO;

/**
 * Class Model
 * Стандартный класс для работы с данными из базы
 * @package App\Core
 */
class Model
{
    public $conn;
    protected $table;

    function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    /**
     * Возврат всех строк таблицы
     *
     * @return array
     */
    function all()
    {
        $query = "SELECT * FROM $this->table";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Возврат строки по id
     *
     * @return array
     */
    function find($id)
    {
        $query = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}