<?php

class ListController extends View
{
    public function index()
    {
        echo 'echo list gay';
    }

    public function show($id)
    {
        $id = $id[0];
        $db = new Tasks;

        $this->render('lists/show', [
            'list' => $db->findOrFail($id)
        ]);

    }
}