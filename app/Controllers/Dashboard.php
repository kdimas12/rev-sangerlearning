<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KonfirmasiModel;
use App\Models\PendaftaranModel;

class Dashboard extends BaseController
{
    public function index()
    {
        // $konfirmasiModel = new KonfirmasiModel();
        $pendaftaranModel = new PendaftaranModel();

        $idUser = session()->get('id_user');
        $data = [
            'pendaftaran' => $pendaftaranModel->getPendaftaranByUser($idUser)
        ];
        return view('dashboard/index', $data);
        // echo "<pre>";
        // echo print_r($data);
        // echo "</pre>";
    }
}
