<?php

namespace App\Controllers;
use App\Models\ProductsModel;

class Products extends BaseController
{
    protected ProductsModel $productsModel;
    public function __construct()
    {
        $this->productsModel = new ProductsModel();
    }
    public function index($id_categories = false)
    {        
        if($id_categories == false){

            $products = $this->productsModel->findAll();
        }else{
            $products = $this->productsModel->where(['id_categories' => $id_categories])->findAll();
        }
        $data = [
            'title' => 'Product|index',
            'products' => $products
        ];
        // dd($data);
        return view('products/index.php', $data);
    }

    public function detail($id)
    {
        // $product = $this->productsModel->where(['id' => $id])->first();
        $product = $this->productsModel->find($id);
        $data = [
            'title' => 'Product|detail',
            'product' => $product
        ];
        return view('products/detail.php', $data);
    }
    public function save()
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'quantity' => $this->request->getVar('quantity'),
            'price' => $this->request->getVar('price'),
            'id_categories' => $this->request->getVar('category'),
            'image' => $this->request->getVar('image'),
        ];
        $this->productsModel->save($data);

        session()->setFlashdata('pesan','Data Berhasil Ditambahkan.');
        return redirect()->to('/admin/products');
    }
    public function update()
    {
    
    }
    public function delete()
    {
    
    }
}
