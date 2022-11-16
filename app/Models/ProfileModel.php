<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'mst_profile';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'kode', 'no_registrasi', 'nama_bumdes', 'logo',
        'email', 'kontak', 'link_fb', 'link_ig', 'geolocation',
        'source', 'ket', 'status', 'link_web', 'link_twitter',
        'kode_provinsi', 'kode_kab', 'kode_kecamatan', 'desa',
        'alamat', 'publicity', 'date_entry',
    ];

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

    function tampilData()
    {
        return $this->db->table('mst_profile')->get();
    }

    function ambilData($id)
    {
        return $this->db->table('mst_profile')->getWhere(['id' => $id]);
    }

    function getAll($id)
    {
        $builder = $this->db->table('mst_profile');
        $builder->select('mst_profile.*, mst_produk.*');
        $builder->join('mst_produk', 'mst_profile.id = mst_produk.id_profile');
        $builder->where('mst_profile.id', $id);
        $query = $builder->get();

        return $query->getResultArray();
    }

    /**
     *@return self 
     */


    public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }
}
