<?php

namespace App\Models;
use App\Models\Permission;

class Role extends Model {

    protected $table = 'roles';
    public $timestamps = false;

    public function permissions() {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }

    public function assignRole($roleId)
    {
        $this->roles()->attach($roleId);
    }

    public function assignPermission($permissionId)
    {
        $this->permissions()->attach($permissionId);
    }

    public function removeRole($roleId)
    {
        $this->roles()->detach($roleId);
    }

    public function removePermission($permissionId)
    {
        $this->permissions()->detach($permissionId);
    }

    public function hasRole($roleName)
    {
        return $this->roles()->where('name', $roleName)->exists();
    }

    public function hasPermission($permissionName)
    {
        return $this->permissions()->where('name', $permissionName)->exists();
    }
    
}