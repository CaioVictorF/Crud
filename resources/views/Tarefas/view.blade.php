@extends('Layout.app')

@section('Tarefas', 'View')

@section('content')
<link rel="stylesheet" href="/CSS/view.css">
<div class="page">
    <h1>Visualizar tarefa</h1>
        <div class="corpo">
            Id:{{$tarefa->id}}<br>
            Tarefa:{{$tarefa->nome}}<br>
            <a href="{{ route('tarefas-listar') }}">Voltar</a>
        </div>
</div>
@endsection 





