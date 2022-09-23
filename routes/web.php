<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
return "Bienvenido a mi proyecto de Laravel";
});
*/

Route::get('/', HomeController::class);

// grupos de rutas

// Route::controller(CursoController::class)->group(function(){
//     Route::get('cursos','index')->name('cursos.index');
//     Route::get('cursos/create','create')->name('cursos.create');
//     Route::get('cursos/{curso}','show')->name('cursos.show');
// });

// Route::post('cursos', [CursoController::class, 'index'])->name('cursos.index');

// Route::post('cursos/create', [CursoController::class, 'store'])->name('cursos.create');

// Route::post('cursos/{curso}', [CursoController::class, 'store'])->name('cursos.show');

// Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

// Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

// Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

// Route::delete('cursos/{curso}',[CursoController::class, 'destroy'])->name('cursos.destroy');

Route::resource('cursos', CursoController::class);

// Route::resource('blabla', CursoController::class)->parameters(['blabla' => 'curso'])->names('cursos');

/*
Route::get('cursos', [CursoController::class, 'index']);
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::get('cursos/{curso}', [CursoController::class, 'show']);
*/

/*Route::get('nuevaruta/{subruta}', function($subruta) {
    return "Estamos en la ruta $subruta";
});

Route::get('nuevaruta/{subruta}/{otrasubruta}', function($subruta, $otrasubruta) {
    return "Estamos en la ruta $subruta y en la subruta $otrasubruta";
});*/

/*
Route::get('nuevaruta/{subruta}/{otrasubruta?}', function($subruta, $otrasubruta = null) {
    if ($otrasubruta) {
        return "Estamos en la ruta $subruta y en la subruta $otrasubruta";
    }
    else {
        return "Estamos en la ruta $subruta";
    }
});*/