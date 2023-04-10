<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KonfirmasiModel;
use App\Models\PendaftaranModel;
use App\Models\UserModel;

class Laporan extends BaseController
{
    function groupBy($data, $key)
    {
        $result = array();
        foreach ($data as $item) {
            if (!isset($result[$item[$key]])) {
                $result[$item[$key]] = array();
            }
            $result[$item[$key]][] = $item;
        }
        return $result;
    }

    public function siswa()
    {
        $userModel = new UserModel();

        $data = [
            'user' => $userModel->findAll()
        ];
        return view('admin/laporan/siswa', $data);
        // echo "<pre>";
        // echo print_r($data);
        // echo "</pre>";
    }

    public function pembayaran()
    {
        $konfirmasiModel = new KonfirmasiModel();

        $data = [
            'konfirmasi' => $konfirmasiModel->getAllKonfirmasi()
        ];
        return view('admin/laporan/pembayaran', $data);

        // echo "<pre>";
        // echo print_r($idKonfirmasi);
        // echo "</pre>";
    }

    public function konfirmasi($idKonfirmasi)
    {
        $konfirmasiModel = new KonfirmasiModel();

        if ($konfirmasiModel->find($idKonfirmasi)) {
            $konfirmasiModel->update($idKonfirmasi, [
                'status' => 'Sudah bayar'
            ]);
            session()->setFlashdata('berhasil', 'Pembayaran telah dikonfirmasi!!');
        }
        return redirect()->to(base_url('admin/pembayaran'));
    }
}
