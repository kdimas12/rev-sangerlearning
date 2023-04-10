<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'tbl_user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama', 'jenis_kelamin', 'email', 'password', 'nomor_whatsapp'];

    public function getTotalUser()
    {
        $query = $this->db->table('tbl_user')->countAll();
        return $query;
    }
}
