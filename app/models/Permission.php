<?php

namespace App\Models;

class Permission extends Model {

    protected $table = 'permissions';
    public $timestamps = false;

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_permissions');
    }

}
