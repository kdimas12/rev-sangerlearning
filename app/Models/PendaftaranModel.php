<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table            = 'tbl_pendaftaran';
    protected $primaryKey       = 'id_pendaftaran';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_kelas', 'id_user', 'proses_pembelajaran', 'metode_pembelajaran', 'hari_pembelajaran', 'jam_pembelajaran'];

    public function getPendaftaranByUser($idUser)
    {
        return $this->db->table('tbl_pendaftaran')
            ->where('id_user', $idUser)
            ->join('tbl_kelas', 'tbl_pendaftaran.id_kelas = tbl_kelas.id_kelas')
            ->join('tbl_konfirmasi', 'tbl_pendaftaran.id_pendaftaran = tbl_konfirmasi.id_pendaftaran')
            ->get()->getResultArray();
    }
}
