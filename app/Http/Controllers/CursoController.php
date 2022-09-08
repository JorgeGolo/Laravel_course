<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){

        // para obtener todos los cursos paginados
        $cursos = Curso::paginate();
        
        // para obtener todos los cursos
        // $cursos = Curso::all();

        // return $cursos;

        return view("cursos.index", compact('cursos'));
    }

    public function create(){
        return view("cursos.create");
    }

    // public function show($curso){
    //     // return view("cursos.show", ['curso' => $curso]);
    //     return view("cursos.show", compact("curso"));
    // }

    public function show($id){
        $curso = Curso::find($id);
        return view("cursos.show", compact("curso"));
    }
}
