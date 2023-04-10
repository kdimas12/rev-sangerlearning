<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriModel;
use App\Models\KelasModel;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $kelasModel = new KelasModel();
        $kategoriModel = new KategoriModel();
        $userModel = new UserModel();

        $data = [
            'totalKelas' => $kelasModel->getTotalKelas(),
            'totalKategori' => $kategoriModel->getTotalKategori(),
            'totalUser' => $userModel->getTotalUser()
        ];

        return view('admin/home/index', $data);
    }
}
