<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Eixo;
use App\Http\Controllers\PermissionController;
use Auth;

class CursoController extends Controller
{
    public function listar() {
        $cursos = Curso::get();
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        return view('cursos.listar', compact('cursos', 'permissions'));
    }

    public function criar() {
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        if($permissions['cursos.criar']) {
            $eixos = Eixo::get();
            return view('cursos.criar', compact('eixos'));
        } else {
            echo 'Não autorizado';
        }
    }

    public function criarCurso(Request $request) {
        $curso = new Curso();
        $curso->nome = $request->get('nome');
        $curso->sigla = $request->get('sigla');
        $curso->tempo = $request->get('tempo');
        $curso->eixo_id = $request->get('eixo');
        $curso->save();

        return redirect()->route('cursos.listar');
    }

    public function deletar($id) {
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        if($permissions['cursos.deletar']) {
            $curso = Curso::where('id', $id)->first();
            $curso->delete();
            return redirect()->route('cursos.listar');
        } else {
            echo 'Não autorizado';
        }
    }

    public function editar($id) {
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        if($permissions['cursos.editar']) {
            $curso = Curso::where('id', $id)->first();
            $eixos = Eixo::get();
            return view('cursos.editar', compact('curso', 'eixos'));
        } else {
            echo 'Não autorizado';
        }
    }

    public function editarCurso(Request $request) {
        $curso = Curso::where('id', $request->get('id'))->first();
        $curso->nome = $request->get('nome');
        $curso->sigla = $request->get('sigla');
        $curso->tempo = $request->get('tempo');
        $curso->eixo_id = $request->get('eixo');
        $curso->save();

        return redirect()->route('cursos.listar');
    }
}
