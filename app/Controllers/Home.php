<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\ProductModel;


class Home extends BaseController
{
    protected $profile, $product, $pager;

    public function __construct()
    {
        $this->profile =  new ProfileModel();
        $this->product =  new ProductModel();
        $this->pager = \Config\Services::pager();
        $session = session();
        helper('form');

        // $this->profile->setTable($this->table);
    }

    public function index()
    {
        $data['profilePager'] = $this->profile->paginate(12, 'profile');
        $data['productPager'] = $this->product->paginate(12, 'product');
        $data['cart'] = \Config\Services::cart();

        return view('front/index', $data);
    }

    public function cek()
    {
        $cart = \Config\Services::cart();
        $response = $cart->contents();
        // $data = json_encode($response);
        echo '<pre>';
        print_r($response);
        echo '</pre>';
    }

    public function add()
    {
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $this->request->getPost('id'),
            'qty'     => 1,
            'harga'   => $this->request->getPost('harga'),
            'nama'    => $this->request->getPost('nama'),
            'foto'    => $this->request->getPost('foto'),
        ));
        // dd($cart);
        session()->setFlashdata('pesan', 'Produk berhasil ditambahkan');

        return redirect()->to(base_url('/'));
    }

    public function clear()
    {
        $cart = \Config\Services::cart();
        $cart->destroy();
    }
}
