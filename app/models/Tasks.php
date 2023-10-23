<?php

class Tasks extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->getConnection();
    }

    public function all()
    {
        $db = $this->db->query("SELECT * FROM lists");
        if ($db->rowCount() > 0) {
            return $db->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return [];
        }
    }

    public function findOrFail(int $id)
    {
        $db = $this->db->prepare("SELECT * FROM lists WHERE id = :id");
        $db->bindValue(':id', $id, PDO::PARAM_INT);
        $db->execute();
        return $db->fetch(PDO::FETCH_ASSOC);
    }
}