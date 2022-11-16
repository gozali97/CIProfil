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

        // $this->profile->setTable($this->table);
    }

    public function index()
    {

        $data['profilePager'] = $this->profile->paginate(12, 'profile');
        $data['productPager'] = $this->product->paginate(12, 'product');
        return view('front/index', $data);
    }
}
