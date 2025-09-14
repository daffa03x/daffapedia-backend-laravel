<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasPermissions;

class Role extends Model
{
    use HasPermissions;
    public function permissions()
    {
        return $this->belongsToMany(
            Permission::class, 
            'role_has_permissions',
            'role_id',
            'permission_id'
        );
    }
}
