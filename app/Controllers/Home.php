<?php

namespace App\Controllers;

class Home extends BaseController
{
    private Sessions $session;
    public function __construct()
    {
        $this->session = new Sessions();
    }
    public function index(): string
    {
        $user = $this->session->current();
        // dd($user);
        if($user == null){
            $data = [
                'title' => 'Home|index'
            ];
            return view('home/index.php', $data);
        }else{
            $data = [
                'title' => 'Home|dasboard',
                'user' => $user
            ];
            return view('home/dasboard.php', $data);
        }
    }
    public function dasboard()
    {
        $data = [
            'title' => 'Home|dasboard'
        ];
        return view('home/dasboard.php', $data);
    }
}
