<?php
use App\Http\Controllers\TarefasController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
   //return view('welcome');
// });

//Route::view('/listar','listar');

/*Route::get('listar', function () {
   return view('welcome');
})->name('btn-salve');*/

Route::get('/tarefas/create', [TarefasController::class, 'create']);

Route::post('/tarefas/story', [TarefasController::class, 'story'])->name('story');

Route::get('/tarefas/edit', [TarefasController::class, 'edit']);

Route::get('/tarefas/destroy', [TarefasController::class, 'destroy']);

Route::get('/tarefas/listar', [TarefasController::class, 'listar']);

Route::get('/tarefas/visualizar', [TarefasController::class, 'visualizar']);