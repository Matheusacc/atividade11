<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\VinculoAlunoDisciplina;
use App\Http\Controllers\PermissionController;
use Auth;

class AlunoController extends Controller
{
    public function listar() {
        $alunos = Aluno::get();
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        return view('alunos.listar', compact('alunos', 'permissions'));
    }

    public function criar() {
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        if($permissions['alunos.criar']) {
            $cursos = Curso::get();
            return view('alunos.criar', compact('cursos'));
        } else {
            echo 'Não autorizado';
        }
    }

    public function criarAluno(Request $request) {
        $aluno = new Aluno();
        $aluno->nome = $request->get('nome');
        $aluno->curso_id = $request->get('curso');
        $aluno->save();
        return redirect()->route('alunos.listar');
    }

    public function deletar($id) {
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        if($permissions['alunos.deletar']) {
            $aluno = Aluno::where('id', $id)->first();
            $aluno->delete();
            return redirect()->route('alunos.listar');
        } else {
            echo 'Não autorizado';
        }
    }

    public function editar($id) {
        $permissions = PermissionController::loadPermissions(Auth::user()->role_id);
        if($permissions['alunos.editar']) {
            $aluno = Aluno::where('id', $id)->first();
            $cursos = Curso::get();
            return view('alunos.editar', compact('aluno', 'cursos'));
        } else {
            echo 'Não autorizado';
        }
    }

    public function editarAluno(Request $request) {
        $aluno = Aluno::where('id', $request->get('id'))->first();
        $aluno->nome = $request->get('nome');
        $aluno->curso_id = $request->get('curso');
        $aluno->save();

        return redirect()->route('alunos.listar');
    }

    public function vincular($id) {
        $aluno = Aluno::where('id', $id)->first();
        $disciplinas = Disciplina::where('curso_id', $aluno->curso_id)->get();
        return view('alunos.vincular', compact('aluno', 'disciplinas'));
    }

    public function vincularDisciplinas(Request $request) {
        $aluno = Aluno::where('id', $request->get('id'))->first();
        $disciplinas = Disciplina::where('curso_id', $aluno->curso_id)->get();
        foreach($disciplinas as $disciplina) {
            if($request->get('disciplinas_'.$disciplina->id) != null
                && $request->get('disciplinas_'.$disciplina->id) == $disciplina->id) {
                    $vinculo = new VinculoAlunoDisciplina();
                    $vinculo->aluno_id = $aluno->id;
                    $vinculo->disciplina_id = $disciplina->id;
                    $vinculo->save();
            }
        }
        return redirect()->route('alunos.listar');
    }

}
