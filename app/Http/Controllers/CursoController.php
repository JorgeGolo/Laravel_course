<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){

        // para obtener todos los cursos paginados
        $cursos = Curso::orderBy('id','desc')->paginate();
        
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

    public function store(Request $request){
        // return $request->all();

        $curso = new Curso();

        $curso ->name= $request->name;
        $curso ->description= $request->description;
        $curso ->categoria= $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show',$curso->id);
    }

    public function show(Curso $curso){
        // $curso = Curso::find($id);
        return view("cursos.show", compact("curso"));
    }

    public function edit(Curso $curso) {

        // return $curso;        
        return view("cursos.edit", compact('curso'));

    }
    public function update(Request $request, Curso $curso) {
        // return $request->all();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show',$curso->id);

    }

}
