<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table            = 'tbl_kelas';
    protected $primaryKey       = 'id_kelas';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_kelas', 'deskripsi', 'thumbnail', 'jumlah_pertemuan', 'durasi_pertemuan', 'materi'];

    public function getTotalKelas()
    {
        $query = $this->db->table('tbl_kelas')->countAll();
        return $query;
    }
}
