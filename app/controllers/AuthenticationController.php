<?php

class AuthenticationController extends View
{
    public function login()
    {
        switch ($_SERVER["REQUEST_METHOD"]) {
            case 'GET':
                return $this->render('auth/login', []);
            break;
            case 'POST':
                $fields = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                return $this->loginStore($fields);
            break;
            default:
                return $this->render('auth/login', []);
            break;
        }
    }

    public function loginStore(array $fields)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $users = new Users;
            $create = $users->create($fields);
            if (is_array($create)) {
                $olds = ['username' => $fields['username'], 'email' => $fields['email']];
                return $this->render('auth/login', ['errors' => array_values($create), 'old' => $olds]);
            }
        }
    }

    public function register()
    {
        switch ($_SERVER["REQUEST_METHOD"]) {
            case 'GET':
                return $this->render('auth/register', []);
            break;
            case 'POST':
                $fields = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                return $this->registerStore($fields);
            break;
            default:
                return $this->render('auth/register', []);
            break;
        }
    }

    public function registerStore(array $fields)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $users = new Users;
            $create = $users->create($fields);
            if (is_array($create)) {
                $olds = ['username' => $fields['username'], 'email' => $fields['email']];
                return $this->render('auth/register', ['errors' => array_values($create), 'old' => $olds]);
            }
        }
    }
}