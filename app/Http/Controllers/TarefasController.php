<?php

namespace App\Http\Controllers;
use App\Models\Tarefa;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
 
class TarefasController extends Controller{
    public function create(){
        return view('Tarefas/create'); 
    }

    public function store(StorePostRequest $request){
        Tarefa::create($request->validated());
        //$validated = $request->validated();
        return redirect()->route('tarefas-create')->with('success','Tarefa cadastrada com sucesso!');
    }

    public function edit($id){
        $tarefas = Tarefa::where('id', $id)->first();
        if(!empty($tarefas)){
            return view('Tarefas/edit', ["tarefas"=>$tarefas]);
        }else{
            return redirect()->route('tarefas-listar');
        }   
    }

    public function update(StorePostRequest $request, $id){
        $update=['nome'=>$request->nome];
        Tarefa::where('id', $id)->update($update);
        return redirect()->route('tarefas-listar')->with('success','Tarefa atualizada com sucesso!');

    } 

    public function destroy($id){
        $tarefas = Tarefa::where('id', $id)->first();
        return view('Tarefas/destroy', ["tarefas"=>$tarefas]);
    }

    public function delete($id){
        Tarefa::where('id', $id)->delete();
        return redirect()->route('tarefas-listar')->with('success','Tarefa excluída com sucesso!');
    }


    public function listar(){
        $tarefas = Tarefa::all();
        //dd($tarefas);
        return view('Tarefas/listar', ["tarefas"=>$tarefas]);
        //return view('Tarefas/listar')->with('Tarefa', $tarefas);
        //return view('Tarefas/listar', ['nome' => $nome]);    
    }

    public function visualizar($id){
        $tarefas = Tarefa::where('id', $id)->first();
        return view('Tarefas/visualizar', ["tarefas"=>$tarefas]);
    }

}


