<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Nivel1',//1
        ]);
        DB::table('roles')->insert([
            'name' => 'Nivel2',
        ]);
        DB::table('roles')->insert([
            'name' => 'Nivel3',
        ]);

        //resources cursos
        DB::table('resources')->insert([
            'name' => 'cursos.listar',//1
        ]);
        DB::table('resources')->insert([
            'name' => 'cursos.criar',
        ]);
        DB::table('resources')->insert([
            'name' => 'cursos.editar',
        ]);
        DB::table('resources')->insert([
            'name' => 'cursos.deletar',
        ]);

        //resources disciplinas
        DB::table('resources')->insert([
            'name' => 'disciplinas.listar',//5
        ]);
        DB::table('resources')->insert([
            'name' => 'disciplinas.criar',
        ]);
        DB::table('resources')->insert([
            'name' => 'disciplinas.editar',
        ]);
        DB::table('resources')->insert([
            'name' => 'disciplinas.deletar',
        ]);

        //resources eixos
        DB::table('resources')->insert([
            'name' => 'eixos.listar',//9
        ]);
        DB::table('resources')->insert([
            'name' => 'eixos.criar',
        ]);
        DB::table('resources')->insert([
            'name' => 'eixos.editar',
        ]);
        DB::table('resources')->insert([
            'name' => 'eixos.deletar',
        ]);

        //resources alunos
        DB::table('resources')->insert([
            'name' => 'alunos.listar',//13
        ]);
        DB::table('resources')->insert([
            'name' => 'alunos.criar',
        ]);
        DB::table('resources')->insert([
            'name' => 'alunos.editar',
        ]);
        DB::table('resources')->insert([
            'name' => 'alunos.deletar',
        ]);

        //resources professores
        DB::table('resources')->insert([
            'name' => 'professores.listar',//17
        ]);
        DB::table('resources')->insert([
            'name' => 'professores.criar',
        ]);
        DB::table('resources')->insert([
            'name' => 'professores.editar',
        ]);
        DB::table('resources')->insert([
            'name' => 'professores.deletar',
        ]);


        //permissions NIVEL1
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '1',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '2',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '3',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '4',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '5',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '6',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '7',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '8',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '9',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '10',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '11',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '12',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '13',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '14',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '15',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '16',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '17',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '18',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '19',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '1',
            'resource_id' => '20',
            'permissao' => '0'
        ]);


        //permissions NIVEL2
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '1',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '2',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '3',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '4',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '5',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '6',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '7',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '8',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '9',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '10',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '11',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '12',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '13',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '14',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '15',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '16',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '17',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '18',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '19',
            'permissao' => '0'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '2',
            'resource_id' => '20',
            'permissao' => '0'
        ]);


        //permissions NIVEL3
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '1',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '2',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '3',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '4',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '5',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '6',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '7',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '8',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '9',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '10',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '11',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '12',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '13',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '14',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '15',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '16',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '17',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '18',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '19',
            'permissao' => '1'
        ]);
        DB::table('permissions')->insert([
            'role_id' => '3',
            'resource_id' => '20',
            'permissao' => '1'
        ]);
    }
}
