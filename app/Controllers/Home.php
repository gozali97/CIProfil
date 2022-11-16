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

        $data = [
            'tampilProfile' => $this->profile->tampilData()->getResult(),
            'tampilProduct' => $this->product->tampilData()->getResult(),
            'profilePager' => $this->profile->paginate(12, 'profile'),
            // 'productPager' => $this->product->paginate(12, 'product'),
            'pager' => $this->profile->profilePager,

        ];
        // dd($data['profilePager']);
        return view('front/index', $data);
    }
}
