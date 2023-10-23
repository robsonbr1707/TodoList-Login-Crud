<?php

$routes = [
    '/'           => 'HomeController@index',
    '/lists'      => 'ListController@index',
    '/lists/{id}' => 'ListController@show',
];