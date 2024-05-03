<?php

namespace App\Http\Controllers;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefasController extends Controller{
    public function create(){
        return view('Tarefas/create'); 
    }

    public function story(Request $request){
        Tarefa::create($request->all());
        return view('Tarefas/create', ['listar']);

    }
    public function edit(){
        return view('Tarefas/edit');     
    }

    public function destroy() {
        return view('Tarefas/destroy');    
    }

    public function listar() {
        //$tarefa = Tarefa::all();
        $nome= 'Caio';
        return view('Tarefas/listar', ['nome' => $nome]);    
    }
}
