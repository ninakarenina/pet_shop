<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    protected UsersModel $userModel;
    protected Sessions $session;
    public function __construct()
    {
        $this->userModel = new UsersModel();
        $this->session = new Sessions();
    }
    public function registrasi()
    {
        $data = [
            'title' => 'Form Registrasi'
        ];
        return view('users/registrasi.php', $data);
    }
    public function postRegister()
    {
        $model = [
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'name' => $this->request->getVar('name'),
            'image' => $this->request->getVar('image'),
        ];
        $this->userModel->save($model);

        session()->setFlashdata('pesan','Data Berhasil Ditambahkan.');
        return redirect()->to('/users/login');
    }

    public function login()
    {
        $data = [
            'title' => 'Users|login'
        ];
        return view('users/login.php', $data);
    }
    public function postLogin()
    {
        $model = [
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];

        $user = $this->userModel->where(['email' => $model['email']])->first();
        // dd($user);

        if($user != null && password_verify($model['password'], $user['password'])){
            $data = [
                'title' => 'Users|login',
                'user' => $user
            ];

            $this->session->create(intval($user['id']));
            return redirect()->to(base_url("/"));
        }else{
            $data = [
                'title' => 'Users|login'
            ];
            session()->setFlashdata('error','User or password is wrong.');
            return view('/users/login',$data);
            
        }
    }
    public function akun()
    {
        $data = [
            'title' => 'Users|akun'
        ];
        return view('users/akun.php', $data);
    }
}
