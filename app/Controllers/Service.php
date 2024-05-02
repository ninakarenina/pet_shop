<?php

namespace App\Controllers;
use App\Models\ServiceModel;

class Service extends BaseController
{
    public function index(): string
    {
        $serviceModel = new ServiceModel();
        $services = $serviceModel->findAll();
        $data = [
            'title' => 'Home|index',
            'services' => $services
        ];
        return view('service/index.php', $data);
    }
}
