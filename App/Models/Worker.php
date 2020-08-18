<?php


namespace App\Models;


use PDO;

/**
 * Class Worker
 * Класс для работы с таблицей workers
 * @package App\Models
 */
class Worker extends \App\Core\Model
{
    protected $table = 'workers';

    /**
     * @param $id
     * Возвращает работников филиала отсортированных по имени
     * @return array
     */
    public function workersForBranch($id)
    {
        $query = "SELECT w.id, w.name, p.name as position FROM workers AS w  INNER JOIN positions AS p ON w.position_id = p.id WHERE w.branch_id = :id ORDER BY w.name";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}