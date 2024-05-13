@extends('Layout.app')

@section('Tarefas', 'View')

@section('content')
    <h1>Visualizar tarefa</h1>
        
        Id:{{$tarefa->id}}<br>
        Tarefa:{{$tarefa->nome}}<br>
    
    <a href="{{ route('tarefas-listar') }}">Voltar</a>
@endsection 





