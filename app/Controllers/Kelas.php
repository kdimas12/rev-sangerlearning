<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;
use App\Models\KelasModel;
use App\Models\KonfirmasiModel;
use App\Models\PendaftaranModel;
use App\Models\UserModel;

class Kelas extends BaseController
{
    public function index()
    {
        $kelasModel = new KelasModel();

        $data = [
            'kelas' => $kelasModel->findAll()
        ];
        return view('kelas/index', $data);
    }

    public function daftar()
    {
        $userModel = new UserModel();
        $kelasModel = new KelasModel();
        $kategoriModel = new KategoriModel();
        $pendaftaranModel = new PendaftaranModel();
        $konfirmasiModel = new KonfirmasiModel();

        $id_user = session()->get('id_user');
        $data = [
            'user' => $userModel->where('id_user', $id_user)->first(),
            'kelas' => $kelasModel->findAll(),
            'kategori' => $kategoriModel->findAll()
        ];

        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('pendaftaran-kelas/index', $data);
        }

        if (!$this->validate([
            'kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kelas kamu harus dipilih!!'
                ]
            ],
            'proses_pembelajaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Proses pembelajaran harus dipilih!!'
                ]
            ],
            'hari' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Hari harus dipilih!!'
                ]
            ],
            'jam' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Hari harus dipilih!!'
                ]
            ]
        ])) {
            $data['validation'] = $this->validator;
            return view('pendaftaran-kelas/index', $data);
        }

        $pendaftaranModel->insert([
            'id_kelas' => $this->request->getVar('kelas'),
            'id_user' => $id_user,
            'proses_pembelajaran' => $this->request->getVar('proses_pembelajaran'),
            'hari_pembelajaran' => $this->request->getVar('hari'),
            'jam_pembelajaran' => $this->request->getVar('jam')
        ]);

        $idPendaftaran = $pendaftaranModel->getInsertID();

        function create_invoice_code()
        {
            date_default_timezone_set("Asia/Jakarta");
            $current_date = date("Ymd");
            $current_time = date("His");
            $invoice_code = "SL" . $current_date . $current_time;
            return $invoice_code;
        }


        $konfirmasiModel->insert([
            'id_konfirmasi' => create_invoice_code(),
            'id_pendaftaran' => $idPendaftaran
        ]);

        $konfirmasi = $konfirmasiModel->where('id_pendaftaran', $idPendaftaran)->first();

        return redirect()->to(base_url('invoice/' . $konfirmasi['id_konfirmasi']));
        // echo "<pre>";
        // echo $konfirmasi[];
        // echo "</pre>";
    }
}
