<?php

namespace App\Models;

use CodeIgniter\Model;

class KonfirmasiModel extends Model
{
    protected $table            = 'tbl_konfirmasi';
    protected $primaryKey       = 'id_konfirmasi';
    protected $allowedFields    = ['id_konfirmasi', 'id_pendaftaran', 'status', 'bukti_pembayaran', 'tanggal_pembayaran'];

    public function getKonfirmasi($idKonfirmasi)
    {
        return $this->db->table('tbl_konfirmasi')
            ->where('id_konfirmasi', $idKonfirmasi)
            ->join('tbl_pendaftaran', 'tbl_konfirmasi.id_pendaftaran = tbl_pendaftaran.id_pendaftaran')
            ->join('tbl_kelas', 'tbl_pendaftaran.id_kelas = tbl_kelas.id_kelas')
            ->join('tbl_harga_kelas', 'tbl_kelas.id_kelas = tbl_harga_kelas.id_kelas AND tbl_pendaftaran.proses_pembelajaran = tbl_harga_kelas.id_kategori')
            ->get()->getResultArray();
    }

    public function getAllKonfirmasi()
    {
        return $this->db->table('tbl_user')
            ->select('tbl_user.nama, tbl_kategori.nama_kategori, tbl_pendaftaran.*, tbl_kelas.nama_kelas, tbl_konfirmasi.*')
            ->join('tbl_pendaftaran', 'tbl_pendaftaran.id_user = tbl_user.id_user')
            ->join('tbl_kategori', 'tbl_pendaftaran.proses_pembelajaran = tbl_kategori.id_kategori')
            ->join('tbl_konfirmasi', 'tbl_pendaftaran.id_pendaftaran = tbl_konfirmasi.id_pendaftaran')
            ->join('tbl_kelas', 'tbl_pendaftaran.id_kelas = tbl_kelas.id_kelas')
            ->orderBy('tbl_pendaftaran.id_pendaftaran', 'DESC')
            ->get()->getResultArray();
    }
}
