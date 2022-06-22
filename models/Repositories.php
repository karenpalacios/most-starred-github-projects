<?php
include_once('core/Database.php');

class Repositories extends Database{

    function getAll() {
        try {
            $result = $this->connection->query('SELECT * FROM repositories')->fetchAll();
        } catch (Exception $e) {
            return 'Database exception: ' . $e->getMessage() . PHP_EOL;
        }
        return $result;
    }

    function getById($id) {
     
    }

}