@extends('Layout.app')

@section('Tarefas', 'Delete')

@section('content')
@include('Tarefas/flash-message')
<link rel="stylesheet" href="/CSS/destroy.css">
<div class="page">
<h1>Você deseja excluir esta tarefa?</h1>

    <form action="{{ route('tarefas-delete', ['id' => $tarefas->id]) }}" method="post">
    @csrf 
        <div class="corpo">
            <label class="tarefa" for="name">Tarefa:</label>
            <input type="text" class="nome" class="form control" name="nome" value="{{ $tarefas->nome }}"><br>
            <button type="submit" class="dlt" class="btn btn-danger">Excluir</button><a href="{{ route('tarefas-listar', ['id' => $tarefas->id]) }}"></a>
            <button type="submit" class="cncl" class="btn btn-primary"><a href="{{ route('tarefas-listar') }}">Cancelar</a></button>
        </div>
    </form>
</div>
    