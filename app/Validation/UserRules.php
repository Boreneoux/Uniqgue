<?php

namespace App\Validation;

use App\Models\UserModel;

class UserRules
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function validateUser(string $str,string $fields,array $data)
    {
        $user = $this->userModel->where('email', $data['email'])->first();
        if (!$user) {
            return false;
        }
        return password_verify($data['password'], $user['password']);
    }
}
