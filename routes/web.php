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



/*Route::get('/tarefas/create', [TarefasController::class, 'create'])->name('create');

Route::post('/tarefas/story', [TarefasController::class, 'story'])->name('story');

Route::get('/tarefas/edit', [TarefasController::class, 'edit']);

Route::get('/tarefas/destroy', [TarefasController::class, 'destroy']);

Route::get('/tarefas/listar', [TarefasController::class, 'listar'])->name('listar');

Route::get('/tarefas/visualizar', [TarefasController::class, 'visualizar']);*/

   Route::prefix('tarefas')->group(function(){
   //Route::get('/create', [TarefasController::class, 'create'])->name('tarefas/create');
   Route::get('/create', [TarefasController::class, 'create'])->name('tarefas-create');
   Route::post('/store', [TarefasController::class, 'store'])->name('tarefas-store');
   Route::get('/listar', [TarefasController::class, 'listar'])->name('tarefas-listar');
   Route::get('/{id}/edit', [TarefasController::class, 'edit'])->whereNumber('id')->name('tarefas-edit');
   //Route::post('/update', [TarefasController::class, 'update'])->whereNumber('id')->name('tarefas-update');
   Route::put('/{id}/update', [TarefasController::class, 'update'])->whereNumber('id')->name('tarefas-update');
   Route::get('/{id}', [TarefasController::class, 'destroy'])->whereNumber('id')->name('tarefas-destroy');
   Route::post('/{id}', [TarefasController::class, 'delete'])->whereNumber('id')->name('tarefas-delete');
   //Route::get('/{id}', [TarefasController::class, 'view'])->whereNumber('id')->name('tarefas-view');
});

