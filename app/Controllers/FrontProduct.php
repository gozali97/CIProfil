<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProductModel;
use CodeIgniter\Session\Session;

class FrontProduct extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $produk =  new ProductModel();
        $data = [
            'tampilProduk' => $produk->tampilData()->getResult()
        ];
        return view('front/produk/index', $data);
    }
}
