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
        return view('Tarefas/create', ['listar']);
        

    }
    public function edit($id){
        $tarefas = Tarefa::where('id', $id)->first();
        if(!empty($tarefas)){
            return view('Tarefas/edit', ["tarefas"=>$tarefas]);
        }else{
            //return view('Tarefas/create', ['listar']);
            return redirect()->route('tarefas-listar');
        }   
    }

    public function update(Request $request, $id){
        $update=['nome'=>$request->nome,];
        Tarefa::where('id', $id)->update($update);
        return redirect()->route('tarefas-listar');

    }

    public function destroy($id) {
        Tarefa::where('id', $id)->delete();
        return redirect()->route('tarefas-listar');
    }

    public function listar() {
        $tarefas = Tarefa::all();
        //dd($tarefas);
        return view('Tarefas/listar', ["tarefas"=>$tarefas]);
        //return view('Tarefas/listar')->with('Tarefa', $tarefas);
        //return view('Tarefas/listar', ['nome' => $nome]);    
    }
}
