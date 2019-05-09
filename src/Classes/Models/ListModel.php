<?php

namespace Portal\Models;

class ListModel {

    public $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getTasks () {
        $query = $this->db->prepare("SELECT `task`, `id` FROM `task_table` WHERE `completed` = 0");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addTask ($newTask) {
        $query = $this->db->prepare("INSERT INTO `task_table` (`task`) VALUES (:newTask)");
        $query->bindParam(':newTask', $newTask);
        $query->execute();
    }

    public function completedTask ($completedTask) {
        $query = $this->db->prepare("UPDATE `task_table` SET `completed` = '1' WHERE `id` = :completedTask");
        $query->bindParam(':completedTask', $completedTask);
        $query->execute();
    }

}