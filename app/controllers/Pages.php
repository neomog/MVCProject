<?php

class Pages extends Controller
{
    public function __construct() {
//         $this->about(3);
    }

    public function index()
    {
        $data = [
            'title' => 'Welcome'
        ];
        $this->view('pages/index', $data);
    }

    public function about()
    {
        $this->view('pages/about');
    }

}