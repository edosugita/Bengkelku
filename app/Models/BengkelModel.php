<?php

namespace App\Models;

use CodeIgniter\Model;

class BengkelModel extends Model
{
    protected $table            = 'bengkel';
    protected $primaryKey       = 'id_bengkel';
    protected $useTimestamps    = true;

    public function getBengkel($slug = false)
    {
        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        return $this->table('bengkel')->like('nama', $keyword);
    }
}
