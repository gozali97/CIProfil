<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'mst_produk';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'foto', 'id_profile', 'kode', 'harga', 'status', 'deskripsi'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // function __construct()
    // {
    //     $this->db = db_connect();
    // }

    function tampilData()
    {
        return $this->db->table('mst_produk')->get();
    }

    function simpan($data)
    {
        return $this->db->table('mst_produk')->insert($data);
    }

    function ambilData($id)
    {
        return $this->db->table('mst_produk')->getWhere(['id' => $id]);
    }

    function hapusData($id)
    {
        return $this->db->table('mst_produk')->delete(['id' => $id]);
    }

    function editData($data, $id)
    {
        return $this->db->table('mst_produk')->update($data, ['id' => $id]);
    }

    public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }
}
