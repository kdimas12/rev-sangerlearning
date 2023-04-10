<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KelasModel;

class Kelas extends BaseController
{
    public function index()
    {
        $kelasModel = new KelasModel();
        $data = [
            'kelas' => $kelasModel->findAll(),
        ];
        return view('admin/kelas/index', $data);
    }

    public function tambah()
    {
        $uri = service('uri');
        $kelasModel = new KelasModel();

        $data = [
            'dashboard_active' => ($uri->getSegment(2) == 'kelas') ? 'active' : ''
        ];
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('admin/kelas/tambah', $data);
        }

        if (!$this->validate([
            'nama_kelas' => [
                'rules' => 'required|is_unique[tbl_kelas.nama_kelas]',
                'errors' => [
                    'required' => 'Nama kelas harus diisi!!',
                    'is_unique' => 'Nama kelas sudah terdaftar!!'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi!!'
                ]
            ],
            'jumlah_pertemuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jumlah pertemuan harus diisi!!'
                ]
            ],
            'durasi_pertemuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Durasi pertemuan harus diisi!!'
                ]
            ],
            'materi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Materi pertemuan harus diisi!!'
                ]
            ],
            // 'thumbnail' => 'required'
        ])) {
            $data = [
                'validation' => $this->validator,
                'dashboard_active' => ($uri->getSegment(2) == 'kelas') ? 'active' : ''
            ];
            return view('admin/kelas/tambah', $data);
        }

        $kelasModel->insert([
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            // 'thumbnail' => $this->request->getVar('thumbnail'),
            'jumlah_pertemuan' => $this->request->getVar('jumlah_pertemuan'),
            'durasi_pertemuan' => $this->request->getVar('durasi_pertemuan'),
            'materi' => $this->request->getVar('materi'),
        ]);

        session()->setFlashdata('berhasil', 'Kelas berhasil ditambahkan');

        return redirect()->to(base_url('admin/kelas'));
    }

    public function hapus($id)
    {
        $kelasModel = new KelasModel();

        if ($kelasModel->find($id)) {
            $kelasModel->delete($id);
            session()->setFlashdata('berhasil', 'Kelas telah dihapus');
        }

        return redirect()->to(base_url('admin/kelas'));
    }

    public function ubah($id)
    {
        $kelasModel = new KelasModel();
        $data = [
            'kelas' => $kelasModel->where('id_kelas', $id)->first()
        ];

        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('admin/kelas/ubah', $data);
        }

        if (!$this->validate([
            'nama_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama kelas harus diisi!!',
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi!!'
                ]
            ],
            'jumlah_pertemuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jumlah pertemuan harus diisi!!'
                ]
            ],
            'durasi_pertemuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Durasi pertemuan harus diisi!!'
                ]
            ],
            'materi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Materi pertemuan harus diisi!!'
                ]
            ],
        ])) {
            $data['validation'] = $this->validator;
            return view('admin/kelas/tambah', $data);
        }

        $kelasModel->update($id, [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            // 'thumbnail' => $this->request->getVar('thumbnail'),
            'jumlah_pertemuan' => $this->request->getVar('jumlah_pertemuan'),
            'durasi_pertemuan' => $this->request->getVar('durasi_pertemuan'),
            'materi' => $this->request->getVar('materi'),
        ]);

        session()->setFlashdata('berhasil', 'Kelas berhasil diubah');

        return redirect()->to(base_url('admin/kelas'));
    }
}
