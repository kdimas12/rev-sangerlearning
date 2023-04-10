<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\HargaKelasModel;
use App\Models\KategoriModel;
use App\Models\KelasModel;

class HargaKelas extends BaseController
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

    public function index()
    {
        $uri = service('uri');
        $hargaKelasModel = new HargaKelasModel();

        $data = [
            'harga_kelas' => $this->groupBy($hargaKelasModel->getHargaKelas(), 'nama_kelas'),
            'dashboard_active' => ($uri->getSegment(2) == 'harga-kelas') ? 'active' : ''
        ];

        return view('admin/harga-kelas/index', $data);
        // echo '<pre>';
        // echo print_r($this->groupBy($hargaKelasModel->getHargaKelas(), 'nama_kelas'));
        // echo '</pre>';
    }

    public function tambah()
    {
        $kelasModel = new KelasModel();
        $kategoriModel = new KategoriModel();
        $hargaKelasModel = new HargaKelasModel();

        $data = [
            'kelas' => $kelasModel->findAll(),
            'kategori' => $kategoriModel->findAll()
        ];
        if (strtolower($this->request->getMethod() !== 'post')) {
            return view('admin/harga-kelas/tambah', $data);
        }

        if (!$this->validate([
            'nama_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Kelas harus diisi!!'
                ]
            ],
            'kategori_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori Kelas harus diisi!!'
                ]
            ],
            'harga_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga Kelas harus diisi!!'
                ]
            ]
        ])) {
            $data['validation'] = $this->validator;
            return view('admin/harga-kelas/tambah', $data);
        }

        // dd($this->request->getPost());

        $hargaKelas = str_replace('.', '', $this->request->getVar('harga_kelas'));
        $hargaKelasModel->insert([
            'id_kelas' => $this->request->getVar('nama_kelas'),
            'id_kategori' => $this->request->getVar('kategori_kelas'),
            'harga' => $hargaKelas
        ]);

        session()->setFlashdata('berhasil', 'Harga Kelas berhasil ditambahkan');

        return redirect()->to(base_url('admin/harga-kelas'));
    }

    public function hapus($id)
    {
        $hargaKelas = new HargaKelasModel();

        if ($hargaKelas->find($id)) {
            $hargaKelas->delete($id);
            session()->setFlashdata('berhasil', 'Harga kelas telah dihapus');
        }

        return redirect()->to(base_url('admin/harga-kelas'));
    }

    public function ubah($id)
    {
        $kelasModel = new KelasModel();
        $kategoriModel = new KategoriModel();
        $hargaKelasModel = new HargaKelasModel();

        $data = [
            'kelas' => $kelasModel->findAll(),
            'kategori' => $kategoriModel->findAll(),
            'hargaKelas' => $hargaKelasModel->where('id_harga_kelas', $id)->first()
        ];

        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('admin/harga-kelas/ubah', $data);
        }

        if (!$this->validate([
            'nama_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Kelas harus diisi!!'
                ]
            ],
            'kategori_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori Kelas harus diisi!!'
                ]
            ],
            'harga_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga Kelas harus diisi!!'
                ]
            ]
        ])) {
            $data['validation'] = $this->validator;
            return view('admin/harga-kelas/tambah', $data);
        }

        $hargaKelas = str_replace('.', '', $this->request->getVar('harga_kelas'));
        $hargaKelasModel->update($id, [
            'id_kelas' => $this->request->getVar('nama_kelas'),
            'id_kategori' => $this->request->getVar('kategori_kelas'),
            'harga' => $hargaKelas
        ]);

        session()->setFlashdata('berhasil', 'Harga Kelas berhasil diubah');

        return redirect()->to(base_url('admin/harga-kelas'));
    }
}
