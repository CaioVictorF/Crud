<?php

namespace App\Http\Controllers;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefasController extends Controller{
    public function create(){
        return view('Tarefas/create'); 
    }

    public function store(Request $request){
        Tarefa::create($request->all());
        return view('Tarefas/create', ['listar'])->with('sucesso', 'Tarefa cadastrada com sucesso!' );

    }
    public function edit($id){
        $tarefas = Tarefa::where('id', $id)->first();
        dd($tarefas);
    }

    public function destroy() {
        return view('Tarefas/destroy');    
    }

    public function listar() {
        $tarefas = Tarefa::all();
        //dd($tarefas);
        return view('Tarefas/listar', ["tarefas"=>$tarefas]);
        //return view('Tarefas/listar')->with('Tarefa', $tarefas);
        //return view('Tarefas/listar', ['nome' => $nome]);    
    }
}
