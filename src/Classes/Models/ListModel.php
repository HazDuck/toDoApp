<?php

namespace Portal\Models;

class ListModel {

    public $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getTasks () {
        $query = $this->db->prepare("SELECT `task_table`.`id`,`task_table`.`task`, `to_do_lists_table`.`to_do_list` FROM `task_table` 
LEFT JOIN `to_do_lists_table` 
    ON `task_table`.`to_do_list_id` = `to_do_lists_table`.`id` 
    WHERE `completed` = 0;");
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