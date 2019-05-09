<?php

namespace Portal\Models;

class ListModel {

//    public $db;
//
////    public function __construct(\PDO $db)
////    {
////        $this->db = $db;
////    }

    public function getElephant () {
        $elephant = ["name"=>"bob the elephant"];
        return $elephant;
    }

//    public function getTasks () {
//        $query = $this->db->prepare("SELECT `task` FROM `task_table`");
//        $query->execute();
//        return $query->fetchAll(\PDO::FETCH_ASSOC);
//    }

}