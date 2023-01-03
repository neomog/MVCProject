<?php

class Pages
{
    public function __construct() {
//         $this->about(3);
    }

    public function index()
    {

    }

    public function about($id)
    {
        echo '<pre>';
        echo 'Love you Nath about PAGE ' . $id;
        echo '</pre>';
    }

}