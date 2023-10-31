<?php

class DbController extends View
{
    public function index()
    {
        $db = new Db;
        $message = $db->index() ? 'Sucesso' : 'Falha';
        echo $message;
        exit;
    }
}