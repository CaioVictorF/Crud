@extends('Layout.app')

@section('Tarefas', 'Delete')

@section('content')
@include('Tarefas/flash-message')
<h1>Você deseja excluir esta tarefa?</h1>
    <hr>
    <form action="{{ route('tarefas-delete', ['id' => $tarefas->id]) }}" method="post">
    @csrf 
        <div>
            <label for="name">Tarefa:</label>
            <input type="text" class="form control" name="nome" value="{{ $tarefas->nome }}">
        </div>
      
        <button type="submit" class="btn btn-danger">Excluir</button><a href="{{ route('tarefas-listar', ['id' => $tarefas->id]) }}"></a>
        <button type="submit"  class="btn btn-primary"><a href="{{ route('tarefas-listar', ['id' => $tarefas->id]) }}">Cancelar</a></button>
        

    </form>
    </hr>