<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist Crud</title>
    <link rel="stylesheet" href="<?= CSS ?>root.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            border: none;
            font-family: Arial, Helvetica, sans-serif;
            list-style: none;
            text-decoration: none;
        }

        body{
            background-color: var(--color-black);
            color: var(--color-gray);
        }

        /* Formulario */

        #section-form{
            margin:100px auto;
            width: 500px;
            background-color: var(--color-black3);
        }

        #section-form ul li{
            text-align: left;
        }

        form{
            padding: 10px;
        }

        #section-form h1{
            text-align: center;
            font-size: 32px;
            padding-top: 20px;
        }

        form input{
            display: block;
            margin-top: 10px;
            color: rgb(233, 230, 230);
            font-size: 22px;
            width: 90%;
            padding: 14px;
            outline: none;
            background-color: var(--color-black);
        }

        form input::placeholder{
            background-color: var(--color-black);
        }

        #submit{
            display: block;
            margin: auto;
            margin-top: 20px;
            text-align: center;
            width: 70%;
            padding: 15px;
            background-color: var(--color-green);
            color: var(--color-gray);
            border: 1px solid var(--color-green);
            border-radius: 5px;
            cursor: pointer;
        }

        #submit:hover{
            border: 1px solid var(--color-green2);
        }

        #auth-link{
            padding: 20px 0;

        }

        #auth-link a{
            text-align: left;
            color: var(--color-gray);
        }
    </style>
</head>
<body>
    <main>