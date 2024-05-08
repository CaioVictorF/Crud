@extends('Layout.app')

@section('Tarefas/listagem')

@section('content')
<h1>listagem de cadastros</h1>
    <a href="{{ route('tarefas-create') }}">Novo Registro</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">.....</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tarefas as $tarefa)
        <tr>
            <th>{{ $tarefa->id }}</th>
            <th>{{ $tarefa->nome }}</th>
            <th>
                <a href="{{ route('tarefas-edit', ['id' => $tarefa->id]) }}">Editar</a>
                <a href="{{ route('tarefas-destroy', ['id' => $tarefa->id]) }}">Excluir</a>
            </th>
        </tr>
    @endforeach
    
    </tbody>
    </table>
@endsection 



