<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    public static function loadPermissions($role_id) {
        $sess = Array();
        $perm = Permission::where('role_id', $role_id)->get();
        foreach($perm as $item) {
            $sess[$item->resource->name] = (boolean) $item->permissao;
        }
        return $sess;
    }

    public static function isAuthorized($rule) {
        $permissions = session('user_permissions');
        return $permissions[$rule];
    }

}
