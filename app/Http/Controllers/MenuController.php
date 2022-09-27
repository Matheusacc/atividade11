<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PermissionController;
use Auth;

class MenuController extends Controller
{
    public function index() {
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        return view('menu', compact('permissions'));
    }
}
