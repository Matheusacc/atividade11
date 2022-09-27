<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PermissionController;
use Illuminate\Http\Request;
use App\Models\Disciplina;
use App\Models\Curso;
use Auth;

class DisciplinaController extends Controller
{
    public function listar() {
        $disciplinas = Disciplina::with('curso')->get();
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        return view('disciplinas.listar', compact('disciplinas', 'permissions'));
    }

    public function criar() {
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        if($permissions['disciplinas.criar']) {
            $cursos = Curso::get();
            return view('disciplinas.criar', compact('cursos'));
        } else {
            echo 'Não autorizado';
        }
    }

    public function criarDisciplina(Request $request) {
        $disciplina = new Disciplina();
        $disciplina->nome = $request->get('nome');
        $disciplina->curso_id = $request->get('curso');
        $disciplina->carga = $request->get('carga');
        $disciplina->save();
        return redirect()->route('disciplinas.listar');
    }

    public function deletar($id) {
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        if($permissions['disciplinas.deletar']) {
            $disciplina = Disciplina::where('id', $id)->first();
            $disciplina->delete();
            return redirect()->route('disciplinas.listar');
        } else {
            echo 'Não autorizado';
        }
    }

    public function editar($id) {
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        if($permissions['disciplinas.deletar']) {
            $disciplina = Disciplina::where('id', $id)->first();
            $cursos = Curso::get();
            return view('disciplinas.editar', compact('disciplina', 'cursos'));
        } else {
            echo 'Não autorizado';
        }
    }

    public function editarDisciplina(Request $request) {
        $disciplina = Disciplina::where('id', $request->get('id'))->first();
        $disciplina->nome = $request->get('nome');
        $disciplina->curso_id = $request->get('curso');
        $disciplina->carga = $request->get('carga');
        $disciplina->save();
        return redirect()->route('disciplinas.listar');
    }
}
