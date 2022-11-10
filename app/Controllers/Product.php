<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProductModel;
use CodeIgniter\Session\Session;

class Product extends ResourceController
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
        echo view('admin/product/index', $data);
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
        helper('form');
        Session();
        $data = [
            'validation' => \Config\Services::Validation()
        ];
        return view('admin/product/create', $data);
    }

    public function store()
    {
        if (!$this->validate([
            'nama' => 'required',
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto, 1024]|is_image[foto]|mime_in[foto,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Pilih foto produk anda',
                    'max_size' => "Ukuran foto produk terlalu besar",
                    'is_image' => "Yang anda upload bukan foto",
                    'mime_in' => "Yang anda upload bukan gambar",
                ]
            ],
            'harga' => 'required',
            'deskripsi' => 'required',
        ])) {
            // $validation = \Config\Services::Validation();
            // dd($validation);
            // return redirect()->to('/admin/product/create')->withInput()->with('validation', $validation);
            return redirect()->to('/admin/product/create')->withInput();
        }

        //Ambil foto produk
        $fileFoto = $this->request->getFile('foto');

        //pindah foto ke public
        $fileFoto->move('upload');

        //ambil nama file foto
        $namaFoto = $fileFoto->getName();

        $data = [
            'id_profile' => $this->request->getVar('id_profile'),
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'foto' => $namaFoto,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'status' => $this->request->getVar('status'),
        ];
        // $foto = $this->request->getFile('foto');
        // var_dump($data);
        $produk = new ProductModel();
        $insert = $produk->simpan($data);
        if ($insert) {
            return redirect()->to('/dashboard/product');
        } else {
            return view('admin/product/create');
        }
    }

    public function hapus()
    {
        $uri = service('uri');
        $id = $uri->getSegment('4');
        $produk = new ProductModel();

        $produk->hapusData($id);
        return redirect()->to('/dashboard/product');
    }

    public function edit($id = null)
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

        echo View('admin/product/edit', $data);
    }


    public function updateData($id)
    {

        //Ambil foto produk
        $fileFoto = $this->request->getFile('foto');

        //pindah foto ke public
        $fileFoto->move('upload');

        //ambil nama file foto
        $namaFoto = $fileFoto->getName();
        $id = $this->request->getPost('id');
        $data = [
            'id_profile' => $this->request->getPost('id_profile'),
            'kode' => $this->request->getPost('kode'),
            'nama' => $this->request->getPost('nama'),
            'foto' => $namaFoto,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'status' => $this->request->getPost('status'),
        ];
        // $foto = $this->request->getFile('foto');
        // dd($data);
        $produk = new ProductModel();
        $update = $produk->editData($data, $id);
        // dd($update);
        if ($update) {
            return redirect()->to('/dashboard/product');
        } else {
            return view('admin/product/create');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */


    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */


    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
}
