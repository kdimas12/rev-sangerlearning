<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Autentikasi extends BaseController
{
    public function masuk()
    {
        $userModel = new UserModel();

        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('masuk/index');
        }

        if (!$this->validate([
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'E-mail kamu harus diisi!!'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password kamu harus diisi!!'
                ]
            ]
        ])) {
            $data['validation'] = $this->validator;
            return view('masuk/index', $data);
        }

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $dataUser = $userModel->where('email', $email)->first();

        if ($dataUser) {
            $passwordUser = $dataUser['password'];
            $verifyPassword = password_verify($password, $passwordUser);

            if ($verifyPassword) {
                session()->set([
                    'id_user' => $dataUser['id_user'],
                    'nama' => $dataUser['nama'],
                    'role' => 'user',
                    'logged_in' => true
                ]);
                return redirect()->to(base_url());
            } else {
                session()->setFlashdata('gagal', 'Password kamu salah!!');
                return redirect()->to(base_url('masuk'));
            }
        } else {
            session()->setFlashdata('gagal', 'E-mail kamu tidak terdaftar!!');
            return redirect()->to(base_url('masuk'));
        }
    }

    public function daftar()
    {
        $userModel = new UserModel();

        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('daftar/index');
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
            'email' => [
                'rules' => 'required|is_unique[tbl_user.email]|valid_email',
                'errors' => [
                    'required' => 'E-mail kamu harus diisi!!',
                    'is_unique' => 'E-mail kamu sudah terdaftar!!',
                    'valid_email' => 'E-mail kamu tidak valid!!'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password kamu harus diisi!!'
                ]
            ],
            'konfirmasi_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi password harus diisi!!',
                    'matches' => 'Konfirmasi password tidak sama dengan password'
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
            return view('daftar/index', $data);
        }

        $userModel->insert([
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('konfirmasi_password'), PASSWORD_DEFAULT),
            'nomor_whatsapp' => $this->request->getVar('nomor_whatsapp')
        ]);

        return redirect()->to(base_url('masuk'));
    }

    public function keluar()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}
