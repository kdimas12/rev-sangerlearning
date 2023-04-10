<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Autentikasi extends BaseController
{
    public function masuk()
    {
        $adminModel = new AdminModel();

        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('admin/masuk/index');
        }

        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username harus diisi!!',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi!!',
                ]
            ]
        ])) {
            $data['validation'] = $this->validator;
            return view('admin/masuk/index', $data);
        }

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $dataAdmin = $adminModel->where('username', $username)->first();

        if ($dataAdmin) {
            $passwordAdmin = $dataAdmin['password'];
            $verifyPassword = password_verify($password, $passwordAdmin);

            if ($verifyPassword) {
                session()->set([
                    'id_user' => $dataAdmin['id'],
                    'nama' => $dataAdmin['nama_admin'],
                    'role' => 'admin',
                    'logged_in' => true
                ]);
                return redirect()->to(base_url('admin'));
            } else {
                session()->setFlashdata('gagal', 'Password kamu salah!!');
                return redirect()->to(base_url('admin/masuk'));
            }
        } else {
            session()->setFlashdata('gagal', 'Username kamu tidak terdaftar!!');
            return redirect()->to(base_url('admin/masuk'));
        }
    }

    public function keluar()
    {
        session()->destroy();
        return redirect()->to(base_url('admin/masuk'));
    }
}
