<?php

class Users extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->getConnection();
    }

    public function create(array $fields)
    {
        $fields['email'] = filter_var($fields['email'], FILTER_VALIDATE_EMAIL);
        $fields['password'] = password_hash($fields['password'].bin2hex(random_bytes(22)), PASSWORD_BCRYPT);
        $data = $fields;
        $validate = $this->validate($data);
        if ($validate) { return $validate;}  
        
        $db = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $db->bindValue(':username', $data['username'], PDO::PARAM_STR);
        $db->bindValue(':email', $data['email'], PDO::PARAM_STR);
        $db->bindValue(':password', $data['password'], PDO::PARAM_STR);
        $db->execute();
    }

    public function findOrFail(int $id)
    {
        $db = $this->db->prepare("SELECT * FROM lists WHERE id = :id");
        $db->bindValue(':id', $id, PDO::PARAM_INT);
        $db->execute();
        return $db->fetch(PDO::FETCH_ASSOC);
    }
}