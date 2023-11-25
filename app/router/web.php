<?php

$routes = [
    '/db'         => 'DbController@index',
    '/'           => 'HomeController@index',
    '/lists'      => 'ListController@index',
    '/lists/{id}' => 'ListController@show',

    //Login
    '/login'             => 'AuthenticationController@login',
    '/register'          => 'AuthenticationController@register',
    '/register-store'    => 'AuthenticationController@registerStore',
];