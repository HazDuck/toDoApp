<?php

namespace Portal\Models;

class ListModel {

    public $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getTasks () {
        $query = $this->db->prepare("SELECT `task` FROM `task_table`");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addTask () {
        $query = $this->db->prepare("INSERT INTO `task_table` (`task`) VALUES (:newTask)");
        $query->bindParam(':newTask', $newTask);
        $query->execute();
    }

}