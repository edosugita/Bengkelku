<?php

namespace App\Models;

use CodeIgniter\Model;

class UserPesan extends Model
{
    protected $table = 'pesan';
    protected $primaryKey = 'id_pesan';
    protected $createdField = 'tgl';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_bengkel', 'id', 'antrian'];

    public function getAntrian($slug)
    {
        return $this->db->table('pesan')
            ->join('bengkel', 'pesan.id_bengkel = bengkel.id_bengkel')
            ->join('users', 'pesan.id = users.id')
            ->where(['bengkel.slug' => $slug])
            ->get()->getResultArray();
    }

    public function cekAntrian()
    {
        return $this->db->table('pesan')
            ->selectMax('antrian')
            ->get()->getResultArray();
    }
}
