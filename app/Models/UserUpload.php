<?php

namespace App\Models;

use CodeIgniter\Model;

class UserUpload extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_depan', 'nama_belakang', 'number', 'alamat', 'email', 'picture'];
    protected $beforeUpdate = ['beforeUpdate'];


    protected function beforeUpdate(array $data)
    {
        return $data;
    }
}
