<?php

namespace App\Models;

use CodeIgniter\Model;

class HargaKelasModel extends Model
{
    protected $table            = 'tbl_harga_kelas';
    protected $primaryKey       = 'id_harga_kelas';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_kelas', 'id_kategori', 'harga'];

    public function getHargaKelas()
    {
        $query = $this->db->table('tbl_harga_kelas')
            ->select('tbl_harga_kelas.id_harga_kelas, tbl_kelas.nama_kelas, tbl_kategori.nama_kategori, tbl_harga_kelas.harga')
            ->join('tbl_kelas', 'tbl_harga_kelas.id_kelas = tbl_kelas.id_kelas')
            ->join('tbl_kategori', 'tbl_harga_kelas.id_kategori = tbl_kategori.id_kategori')
            ->get()->getResultArray();

        return $query;
    }
}
