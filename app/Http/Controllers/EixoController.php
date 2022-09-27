<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PermissionController;
use Illuminate\Http\Request;
use App\Models\Eixo;
use Auth;

class EixoController extends Controller
{
    public function listar() {
        $eixos = Eixo::get();
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        return view('eixos.listar', compact('eixos', 'permissions'));
    }

    public function criar() {
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        if($permissions['eixos.criar']) {
            return view('eixos.criar');
        } else {
            echo 'Não autorizado';
        }
    }

    public function criarEixo(Request $request) {
        $eixo = new Eixo();
        $eixo->nome = $request->get('nome');
        $eixo->save();

        return redirect()->route('eixos.listar');
    }

    public function deletar($id) {
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        if($permissions['eixos.criar']) {
            $eixo = Eixo::where('id', $id)->first();
            $eixo->delete();
            return redirect()->route('eixos.listar');
        } else {
            echo 'Não autorizado';
        }
    }

    public function editar($id) {
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        if($permissions['eixos.criar']) {
            $eixo = Eixo::where('id', $id)->first();
            return view('eixos.editar', compact('eixo'));
        } else {
            echo 'Não autorizado';
        }
    }

    public function editarEixo(Request $request) {
        $eixo = Eixo::where('id', $request->get('id'))->first();
        $eixo->nome = $request->get('nome');
        $eixo->save();

        return redirect()->route('eixos.listar');
    }
}
