<?php

class Db extends Database
{
    public function index()
    {
        $db = $this->getConnection();
        try {
            $db->query("CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(200) NOT NULL,
                password VARCHAR(200) NOT NULL,
                email VARCHAR(200) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )");
            return true;
        } catch (\PDOException $e) {
            echo 'Erro ao conectar com o banco de dados';
            exit;
        }
    }
}