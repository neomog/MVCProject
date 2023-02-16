<?php

class Pages extends Controller
{
    private mixed $postModel;

    public function __construct() {
    }

    public function index()
    {
        $data = [
            'title' => 'Welcome To SharePost',
            'description' => 'Simple social network built with my custom mvc framework',
        ];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'Demo Share post app built on my framework',
        ];
        $this->view('pages/about', $data);
    }

}