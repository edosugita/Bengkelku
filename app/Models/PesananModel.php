<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table      = 'daftarpesanan';
    protected $primaryKey = 'antrian';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'alamat', 'date'];

    public function getPesanan($antrian = false)
    {
        if ($antrian == false) {
            return $this->findall();
        }

        return $this->where(['antrian' => $antrian])->first();
    }
}
