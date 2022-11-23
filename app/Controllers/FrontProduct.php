<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Session\Session;

class FrontProduct extends ResourceController
{

    public function __construct()
    {
        $this->product =  new ProductModel();
        $this->pager = \Config\Services::pager();

        // $this->profile->setTable($this->table);
    }


    public function index()
    {
        $data = [
            'tampilProduct' => $this->product->tampilData()->getResult(),
            'productPager' => $this->product->paginate(12, 'product'),
            'pager' => $this->product->productPager,
        ];
        return view('front/produk/index', $data);
    }

    public function detail($id = null)
    {

        $produk = new ProductModel();

        $getProduk = $produk->ambilData($id);

        if (count($getProduk->getResult()) > 0) {
            $row = $getProduk->getRow();
            $data = [
                'id' => $id,
                'nama' => $row->nama,
                'id_profile' => $row->id_profile,
                'foto' => $row->foto,
                'harga' => $row->harga,
                'deskripsi' => $row->deskripsi,
                'status' => $row->status,
                'kode' => $row->kode,
            ];
        }


        echo View('front/product_detail', $data);
    }
}
