<?php

namespace App\Models;

class User extends Model
{
    protected $guarded = [];
    protected $table = 'users';
    // public function __construct()
    // {
    //     parent::__construct(pdo());
    // }

    // public function checkUsername($username)
    // {
    //     return $this->checkExistence('username', $username);
    // }

    // public function checkEmail($email)
    // {
    //     return $this->checkExistence('email', $email);
    // }
}
