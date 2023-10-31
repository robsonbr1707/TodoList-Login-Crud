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

    public function validate(array $fields)
    {
        $fields = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $errors = [];
        foreach ($fields as $field => $value) {
            $cleanValue = trim($value);
            if (empty($value)) {
                $errors[$field] = "Preencha o campo $field !";
            }else{
                $cleanValue = strip_tags($cleanValue);
                $cleanValue = htmlspecialchars($cleanValue, ENT_QUOTES);
                if ($cleanValue !== $value) {
                    $errors[$field] = "O Campo $field está invalido!";
                }
            }
        }
        return $errors;
    }
}