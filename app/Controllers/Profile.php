<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use CodeIgniter\RESTful\ResourceController;

class Profile extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $session = session();
        $prorile = new ProfileModel();
        $data = $prorile->where('email', session('email'))->first();
        if ($data){
            $session->set([
                'kode' => $data['kode'],
                'no_registrasi' => $data['no_registrasi'], 
                'nama_bumdes' => $data['nama_bumdes'], 
                'logo' => $data['logo'],
                'email' => $data['email'], 
                'kontak' => $data['kontak'],
                 'link_fb' => $data['link_fb'], 
                 'link_ig' => $data['link_ig'], 
                 'geolocation' => $data['geolocation'],
                'source' => $data['source'], 
                'ket' => $data['ket'], 
                'status' => $data['status'], 
                'link_web' => $data['link_web'], 
                'link_twitter' => $data['link_twitter'],
                'kode_provinsi' => $data['kode_provinsi'], 
                'kode_kab' => $data['kode_kab'],
                 'kode_kecamatan' => $data['kode_kecamatan'], 
                 'desa' => $data['desa'],
                'alamat' => $data['alamat'], 
                'publicity' => $data['publicity'],
                'date_entry' => $data['date_entry'],
            ]);
        }
        // dd($session);
        return view('admin/profile');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
