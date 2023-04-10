<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class Kategori extends BaseController
{
    public function index()
    {
        $kategoriModel = new KategoriModel();
        $data = ['kategori' => $kategoriModel->findAll()];
        return view('admin/kategori-kelas/index', $data);
    }

    public function tambah()
    {
        $kategoriModel = new KategoriModel();
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('admin/kategori-kelas/tambah');
        }

        if (!$this->validate([
            'kategori' => [
                'rules' => 'required|is_unique[tbl_kategori.nama_kategori]',
                'errors' => [
                    'required' => 'Kategori harus diisi!!',
                    'is_unique' => 'Kategori sudah terfaftar!!',
                ]
            ]
        ])) {
            $data['validation'] = $this->validator;
            return view('admin/kategori-kelas/tambah', $data);
        }

        $kategoriModel->save([
            'nama_kategori' => $this->request->getVar('kategori')
        ]);

        session()->setFlashdata('berhasil', 'Kategori berhasil ditambahkan');

        return redirect()->to(base_url('admin/kategori-kelas'));
    }

    public function hapus($id)
    {
        $kategoriModel = new KategoriModel();

        if ($kategoriModel->find($id)) {
            $kategoriModel->delete($id);
            session()->setFlashdata('berhasil', 'Kategori telah dihapus');
        }

        return redirect()->to(base_url('admin/kategori-kelas'));
    }

    public function ubah($id)
    {
        $kategoriModel = new KategoriModel();
        $data = [
            'kategori' => $kategoriModel->where('id_kategori', $id)->first()
        ];

        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('admin/kategori-kelas/ubah', $data);
        }

        if (!$this->validate([
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori harus diisi!!',
                ]
            ]
        ])) {
            $data['validation'] = $this->validator;
            return view('admin/kategori-kelas/tambah', $data);
        }

        $kategoriModel->update($id, [
            'nama_kategori' => $this->request->getVar('kategori')
        ]);

        session()->setFlashdata('berhasil', 'Kategori berhasil diubah');

        return redirect()->to(base_url('admin/kategori-kelas'));
    }
}
