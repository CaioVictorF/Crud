<?php
use App\Http\Controllers\listartarefas;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//   return view('welcome');git s
//});

//Route::view('/listar','listar');

/*Route::get('listar', function () {
   return view('welcome');
})->name('btn-salve');*/

Route::get('/listar123', [listartarefas::class, 'index']);