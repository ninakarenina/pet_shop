<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\ProductsModel;
use App\Models\CategoriesModel;

class Admin extends BaseController
{
    protected AdminModel $adminModel;
    protected ProductsModel $productsModel;
    protected CategoriesModel $categoriesModel;
    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->productsModel = new ProductsModel();
        $this->categoriesModel = new CategoriesModel();
    }
    public function index(): string
    {
        $data = [
            'title' => 'Home|index'
        ];
        return view('home/index.php', $data);
    }
    public function dasboard(): string
    {
        $data = [
            'title' => 'Dasboard'
        ];
        return view('admin/dasboard.php', $data);
    }
    public function login(): string
    {
        $data = [
            'title' => 'Home|dasboard'
        ];
        return view('admin/login.php', $data);
    }
    public function products()
    {
        $products = $this->productsModel->findAll();
        $data = [
            'title' => 'Daftar Produk',
            'products' => $products
        ];
        return view('admin/products.php', $data);
    }
    public function add()
    {        
        $categories = $this->categoriesModel->findAll();
        // dd($categories);
        $data = [
            'title' => 'Form Tambah Produk',
            'categories' => $categories,
        ];
        return view('admin/formAdd.php', $data);
    }
    public function registrasi()
    {
        $data = [
            'title' => 'Form Registrasi Admin'
        ];
        return view('admin/registrasi.php', $data);
    }
    public function save()
    {
        $data = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'name' => $this->request->getVar('name'),
            'image' => $this->request->getVar('image'),
        ];
        $this->adminModel->save($data);

        session()->setFlashdata('pesan','Data Berhasil Ditambahkan.');
        return redirect()->to('/admin/dasboard');
    }
}