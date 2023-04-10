<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Akun extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $id_user = session()->get('id_user');
        $data = [
            'user' => $userModel->where('id_user', $id_user)->first()
        ];

        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('akun/index', $data);
        }

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama kamu harus diisi!!'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis kelamin kamu harus dipilih!!'
                ]
            ],
            'nomor_whatsapp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor WhatsApp harus diisi!!'
                ]
            ]
        ])) {
            $data['validation'] = $this->validator;
            return view('akun/index', $data);
        }

        $userModel->update($id_user, [
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'nomor_whatsapp' => $this->request->getVar('nomor_whatsapp')
        ]);

        session()->setFlashdata('berhasil', 'Data pengguna berhasil diubah');

        return redirect()->to(base_url('akun'));
    }
}
