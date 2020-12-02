<?php

namespace App\Validation;

use App\Models\AdminModel;
use App\Models\UserModel;

class UserRules
{
    public function validateUser(string $str, string $field, array $data)
    {
        $model = new UserModel();
        $user = $model->where('email', $data['email'])->first();

        if (!$user) {
            return false;
        }

        return password_verify($data['password'], $user['password']);
    }

    public function validateAdmin(string $str, string $field, array $data)
    {
        $m = new AdminModel();
        $admin = $m->where('nama', $data['nama'])->first();

        if (!$admin) {
            return false;
        }

        return password_verify($data['password'], $admin['password']);
    }
}
