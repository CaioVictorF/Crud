@extends('Layout.app')

@section('Tarefas/listagem')

@section('content')

<link rel="stylesheet" href="/CSS/listar.css">
<div class="page">
    <h1>listagem de cadastros</h1>
    @include('Tarefas/flash-message')
    <div class="corpo">
        <a href="{{ route('tarefas-create') }}">Novo Registro</a>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
    </div>
    <div class="corpo2">
        <tbody>
        @foreach($tarefas as $tarefa)  
            
                <td>{{ $tarefa->id }}</td>
                <td>{{ $tarefa->nome }}</td>
                <td>
                    <a href="{{ route('tarefas-edit', ['id' => $tarefa->id]) }}">Editar</a>
                    <a href="{{ route('tarefas-destroy', ['id' => $tarefa->id]) }}">Excluir</a>
                    <a href="{{ route('tarefas-view', ['id' => $tarefa->id]) }}">Visualizar</a>
                </td>
            </tr>
        @endforeach    
        </tbody>
    </div>
        </table>
</div>
@endsection 



