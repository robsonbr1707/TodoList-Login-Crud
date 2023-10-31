<?php

class HomeController extends View
{
    public function index()
    {
        $lists = new Tasks;
        $this->render('home', [
            'title' => 'Listas',
            'lists' => $lists->all()
        ]);
    }
}