<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home|index'
        ];
        return view('about/index.php', $data);
    }
}
