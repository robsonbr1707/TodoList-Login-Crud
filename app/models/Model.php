<?php

abstract class Model extends Database
{
    private $db, $table;

    public function __construct()
    {
        $this->db = $this->getConnection();
    }

    public function catchErros($error)
    {
        //
    }

    protected function all($params = "*")
    {
        try {
            $tb = $this->table;
            $sql = "SELECT $params FROM $tb";
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            die('Erro:'.$e);
        }
    }

    public function create(array $fields)
    {
        $fields['email'] = filter_var($fields['email'], FILTER_VALIDATE_EMAIL);
        $fields['password'] = password_hash($fields['password'], PASSWORD_BCRYPT);
        $data = $fields;
        $validate = $this->validate($data);
        if ($validate) { return $validate;}
        
        $db = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $db->bindValue(':username', $data['username'], PDO::PARAM_STR);
        $db->bindValue(':email', $data['email'], PDO::PARAM_STR);
        $db->bindValue(':password', $data['password'], PDO::PARAM_STR);
        $db->execute();
    }

    public function find(array $params)
    {
        $data = $params;
        $validate = $this->validate($data);
        if ($validate) { return $validate;}    
        $error = ['credentials' => "Credenciais incorretas!"];
        $db = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $db->bindValue(":email", $data['email'], PDO::PARAM_STR);
        $db->execute();
        if ($db->rowCount() == 0) {
            return $error;
        }
        $user = $db->fetch(PDO::FETCH_ASSOC);
        if (password_verify($data['password'], $user['password'])) {
            var_dump($user);
            exit;
        }
        return $error;
    }

    public function findOrFail(int $id)
    {
        $db = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $db->bindValue(':id', $id, PDO::PARAM_INT);
        $db->execute();
        return $db->fetch(PDO::FETCH_ASSOC);
    }
}