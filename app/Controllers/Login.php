<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfileModel;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        return view('front/auth/login');
    }

    public function auth()
    {
        $session = session();
        $model   = new ProfileModel();
        $email   = $this->request->getVar('email');
        $kode    = $this->request->getVar('kode');
        $data    = $model->where('email', $email)->first();
        if (!empty($data['email'])) {
            if ($data['kode'] == $kode) {
                $sessionData = [
                    'email'     => $data['email'],
                    'kode'      => $data['kode'],
                    // 'no_registrasi' => $data['no_registrasi'],
                    // 'nama_bumdes' => $data['nama_bumdes'],
                    // 'logo' => $data['logo'],
                    // 'kontak' => $data['kontak'],
                    // 'link_fb' => $data['link_fb'],
                    // 'link_ig' => $data['link_ig'],
                    // 'geolocation' => $data['geolocation'],
                    // 'source' => $data['source'],
                    // 'ket' => $data['ket'],
                    // 'status' => $data['status'],
                    // 'link_web' => $data['link_web'],
                    // 'link_twitter' => $data['link_twitter'],
                    // 'kode_provinsi' => $data['kode_provinsi'],
                    // 'kode_kab' => $data['kode_kab'],
                    // 'kode_kecamatan' => $data['kode_kecamatan'],
                    // 'desa' => $data['desa'],
                    // 'alamat' => $data['alamat'],
                    // 'publicity' => $data['publicity'],
                    // 'date_entry' => $data['date_entry'],
                    'logged_in' => TRUE
                ];
                $session->set($sessionData);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Maaf, Anda belum berhasil login !');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Maaf, Anda belum berhasil login !');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
