<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KonfirmasiModel;
use App\Models\PendaftaranModel;

class Invoice extends BaseController
{
    public function index($idKonfirmasi)
    {
        $konfirmasiModel = new KonfirmasiModel();

        // $dataKonfirmasi = $konfirmasiModel->where('id_konfirmasi', $idKonfirmasi)->first();
        $dataKonfirmasi = $konfirmasiModel->getKonfirmasi($idKonfirmasi);
        if ($dataKonfirmasi) {
            $data = [
                'konfirmasi' => $konfirmasiModel->getKonfirmasi($idKonfirmasi)[0],
            ];

            if (strtolower($this->request->getMethod()) !== 'post') {
                return view('invoice/index', $data);
            }

            if (!$this->validate([
                'tanggal_pembayaran' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal pembayaran harus diisi!!'
                    ]
                ],
                'bukti_pembayaran' => [
                    'rules' => 'max_size[bukti_pembayaran,1024]|is_image[bukti_pembayaran]|mime_in[bukti_pembayaran,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Gambar harus di bawah 1mb',
                        'is_image' => 'Yang kamu pilih bukan gambar',
                        'mime_in' => 'File harus berupa gambar'
                    ]
                ]
            ])) {
                $data['validation'] = $this->validator;
                return view('invoice/index', $data);
            }

            if ($file = $this->request->getFile('bukti_pembayaran')) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $namaFile = $file->getRandomName();
                    $file->move('bukti_pembayaran', $namaFile);
                }
            }

            $konfirmasiModel->update($idKonfirmasi, [
                'tanggal_pembayaran' => $this->request->getVar('tanggal_pembayaran'),
                'bukti_pembayaran' => $namaFile
            ]);

            return redirect()->to(base_url());
        } else {
            return redirect()->to(base_url());
        }
    }
}
