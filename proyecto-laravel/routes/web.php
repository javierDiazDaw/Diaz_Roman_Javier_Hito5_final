<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidenciaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\AulaController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//INCIDENCIA

Route::get('/incidencias', [IncidenciaController::class, 'index']);

Route::get('/incidencias/crear', [IncidenciaController::class, 'create'])->middleware(['cliente']);

Route::post('/incidencias/crear', [IncidenciaController::class, 'store'])->middleware(['cliente']);

Route::get('/incidencias/editar/{idIncidencia}', [IncidenciaController::class, 'edit'])->middleware(['cliente']);

Route::post('/incidencias/editar/{idIncidencia}', [IncidenciaController::class, 'update'])->middleware(['cliente']);

Route::get('/incidencias/comentarios/ver/{idIncidencia}', [ComentarioController::class, 'show'])->middleware(['cliente']);

Route::get('/incidencias/borrar/{idIncidencia}', [IncidenciaController::class, 'destroy'])->middleware(['cliente']);

//EMAIL

Route::get('/sendEmail', [IncidenciaController::class, 'recibirLibro']);

Route::post('/sendEmail/enviarEmail', [IncidenciaController::class, 'index']);

//USUARIO

Route::get('/perfiles', [UsuarioController::class, 'index'])->middleware(['administrador']);

Route::get('/perfiles/editar/{IdUsuario}', [UsuarioController::class, 'edit'])->middleware(['administrador']);

Route::get('/perfiles/borrar/{IdUsuario}', [UsuarioController::class, 'destroy'])->middleware(['cliente']);



Route::get('/perfil/editar/{IdUsuario}', [UsuarioController::class, 'edit'])->middleware(['cliente']);

Route::get('/incidencias/{IdUsuario}', [IncidenciaController::class, 'incidenciaPerfil'])->middleware(['cliente']);

Route::put('/perfil/editar/{IdUsuario}', [UsuarioController::class, 'update'])->middleware(['cliente']);


//COMENTARIOS

Route::get('/comentarios', [ComentarioController::class, 'index'])->middleware(['cliente']);

Route::get('/comentarios/ver/{idIncidencia}', [ComentarioController::class, 'show'])->middleware(['cliente']);

Route::get('/comentarios/borrar/{idComentario}', [ComentarioController::class, 'destroy'])->middleware(['cliente']);


//AULA

Route::get('/aulas', [AulaController::class, 'index'])->middleware(['cliente']);

Route::get('/aulas/crear', [AulaController::class, 'create'])->middleware(['cliente']);

Route::post('/aulas/crear', [AulaController::class, 'store'])->middleware(['cliente']);

Route::get('/aulas/borrar/{aula}', [AulaController::class, 'destroy'])->middleware(['cliente']);

//NOTIFICACIONES

	
Route::get('notify/index', 'NotificationController@index');


require __DIR__.'/auth.php';





