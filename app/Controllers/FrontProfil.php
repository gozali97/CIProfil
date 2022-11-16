<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\ProfileModel;

class FrontProfil extends BaseController
{
    public function __construct()
    {
        $this->profile =  new ProfileModel();
        $this->pager = \Config\Services::pager();

        // $this->profile->setTable($this->table);
    }

    public function index()
    {

        $data = [
            'tampilProfile' => $this->profile->tampilData()->getResult(),
            'profilePager' => $this->profile->paginate(12, 'profile'),
            'pager' => $this->profile->profilePager,

        ];
        // dd($data['profilePager']);
        return view('front/profil/index', $data);
    }

    public function detail($id = null)
    {

        $profil = new ProfileModel();

        $profile = $profil->ambilData($id);
        $getProfil = $profil->getAll($id);

        // var_dump($getProfil);
        if (count($profile->getResult()) > 0) {
            $row = $profile->getRow();
            $data = [
                'id' => $id,
                'kode' => $row->kode,
                'no_registrasi' => $row->no_registrasi,
                'nama_bumdes' => $row->nama_bumdes,
                'ket' => $row->ket,
                'logo' => $row->logo,
                'email' => $row->email,
                'kontak' => $row->kontak,
                'alamat' => $row->alamat,
                'desa' => $row->desa,
            ];
        }

        echo View('front/profil/detail', [$data, $getProfil]);
    }
}
