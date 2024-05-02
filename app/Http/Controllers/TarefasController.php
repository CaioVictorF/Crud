<?php

namespace App\Http\Controllers;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    public function create(){
        return view('Tarefas/create'); 
    }

    public function story(Request $request){
        //dd($request->tarefas);  
        $tarefa = Tarefa::create($request->all());
        dd($tarefa);
    }
 
    public function edit(){
        return view('Tarefas/edit');   
    }

    public function destroy() {
        return view('Tarefas/destroy');    
    }

    public function listar() {
        return view('Tarefas/listar');    
    }
}
