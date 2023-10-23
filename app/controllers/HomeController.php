<?php

class HomeController extends View
{
    public function index()
    {
        $lists = new Tasks;
        $this->render('home', [
            'title' => 'Listas gays',
            'lists' => $lists->all()
        ]);
    }
}