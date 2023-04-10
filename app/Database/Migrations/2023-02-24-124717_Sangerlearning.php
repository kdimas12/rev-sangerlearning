<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sangerlearning extends Migration
{
    public function up()
    {
        //=== start tbl_admin ===//
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nama_admin' => ['type' => 'VARCHAR', 'constraint' => 100],
            'username' => ['type' => 'VARCHAR', 'constraint' => 100],
            'password' => ['type' => 'VARCHAR', 'constraint' => 100],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tbl_admin');
        //=== end tbl_admin ===//

        //=== start tbl_kategori ===//
        $this->forge->addField([
            'id_kategori' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nama_kategori' => ['type' => 'VARCHAR', 'constraint' => 20]
        ]);
        $this->forge->addPrimaryKey('id_kategori');
        $this->forge->createTable('tbl_kategori');
        //=== end tbl_kategori ===//

        //=== start tbl_kelas ===//
        $this->forge->addField([
            'id_kelas' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nama_kelas' => ['type' => 'VARCHAR', 'constraint' => 100],
            'deskripsi' => ['type' => 'VARCHAR', 'constraint' => 100],
            'thumbnail' => ['type' => 'VARCHAR', 'constraint' => 100],
            'jumlah_pertemuan' => ['type' => 'INT', 'constraint' => 5],
            'durasi_pertemuan' => ['type' => 'INT', 'constraint' => 5],
            'materi' => ['type' => 'VARCHAR', 'constraint' => 500]
        ]);
        $this->forge->addPrimaryKey('id_kelas');
        $this->forge->createTable('tbl_kelas');
        //=== end tbl_kelas ===//

        //=== start tbl_harga_kelas ===//
        $this->forge->addField([
            'id_harga_kelas' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'id_kelas' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
            'id_kategori' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
            'harga' => ['type' => 'INT', 'constraint' => 20]
        ]);
        $this->forge->addPrimaryKey('id_harga_kelas');
        $this->forge->addKey('id_kelas');
        $this->forge->addForeignKey('id_kelas', 'tbl_kelas', 'id_kelas');
        $this->forge->addKey('id_kategori');
        $this->forge->addForeignKey('id_kategori', 'tbl_kategori', 'id_kategori');
        $this->forge->createTable('tbl_harga_kelas');
        //=== end tbl_harga_kelas ===//

        //=== start tbl_user ===//
        $this->forge->addField([
            'id_user' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'nama' => ['type' => 'VARCHAR', 'constraint' => 100],
            'jenis_kelamin' => ['type' => 'VARCHAR', 'constraint' => 15],
            'email' => ['type' => 'VARCHAR', 'constraint' => 200],
            'password' => ['type' => 'VARCHAR', 'constraint' => 100],
            'nomor_whatsapp' => ['type' => 'VARCHAR', 'constraint' => 20]
        ]);
        $this->forge->addPrimaryKey('id_user');
        $this->forge->createTable('tbl_user');
        //=== end tbl_user ===//

        //=== start tbl_pendaftaran ===//
        $this->forge->addField([
            'id_pendaftaran' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'id_kelas' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
            'id_user' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
            'proses_pembelajaran' => ['type' => 'VARCHAR', 'constraint' => 50],
            'metode_pembelajaran' => ['type' => 'VARCHAR', 'constraint' => 50],
            'hari_pembelajaran' => ['type' => 'VARCHAR', 'constraint' => 50],
            'jam_pembelajaran' => ['type' => 'VARCHAR', 'constraint' => 50],
        ]);
        $this->forge->addPrimaryKey('id_pendaftaran');
        $this->forge->addKey('id_kelas');
        $this->forge->addKey('id_user');
        $this->forge->addForeignKey('id_kelas', 'tbl_kelas', 'id_kelas');
        $this->forge->addForeignKey('id_user', 'tbl_user', 'id_user');
        $this->forge->createTable('tbl_pendaftaran');
        //=== end tbl_pendaftaran ===//

        //=== start tbl_konfirmasi ===//
        $this->forge->addField([
            'id_konfirmasi' => ['type' => 'VARCHAR', 'constraint' => 50],
            'id_pendaftaran' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true],
            'status' => ['type' => 'ENUM', 'constraint' => ['Sudah bayar', 'Belum bayar'], 'default' => 'Belum bayar'],
            'bukti_pembayaran' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
            'tanggal_pembayaran' => ['type' => 'DATE', 'null' => true]
        ]);
        $this->forge->addPrimaryKey('id_konfirmasi');
        $this->forge->addKey('id_pendaftaran');
        $this->forge->addForeignKey('id_pendaftaran', 'tbl_pendaftaran', 'id_pendaftaran');
        $this->forge->createTable('tbl_konfirmasi');
        //=== end tbl_konfirmasi ===//
    }

    public function down()
    {
        $this->forge->dropTable('tbl_admin');
        $this->forge->dropTable('tbl_kelas');
        $this->forge->dropTable('tbl_user');
        $this->forge->dropTable('tbl_pendaftaran');
        $this->forge->dropTable('tbl_konfirmasi');
    }
}
