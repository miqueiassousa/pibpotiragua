<?php 

class Agenda {

    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:dbname=pibpotiragua;host=localhost", "root", "");
        
    }


    // O nome getAll pode ser qualquer um
    public function getAll() {

        $sql = "SELECT * FROM eventos";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }




}


?>