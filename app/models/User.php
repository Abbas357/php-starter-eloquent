<?php

namespace App\Models;

class User extends Model
{
    protected $guarded = [];
    protected $table = 'users';

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    public function hasPermission($permissionName)
    {
        foreach ($this->roles as $role) {
            if ($role->permissions()->where('name', $permissionName)->exists()) {
                return true;
            }
        }
        return false;
    }

}
