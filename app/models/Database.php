<?php

class Database
{
    public function getConnection()
    {
        try {
            $pdo = new PDO("mysql:dbname=todolistcrud;host=127.0.0.1", "root", '');
            return $pdo;
        } catch (\PDOException $e) {
            echo 'Erro ao conectar com o banco de dados';
            exit;
        }
    }
}