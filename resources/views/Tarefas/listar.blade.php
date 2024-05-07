@extends('Layout.app')

@section('Tarefas/listagem')

@section('content')
<h1>listagem de cadastros</h1>
    <a href="{{ route('tarefas-create')}}" method="post">Novo Registro</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">nome</th>
        <th scope="col">...</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tarefas as $tarefa)
        <tr>
            <th>{{ $tarefa ->id}}</th>
            <th>{{ $tarefa ->nome }}</th>
            <th>
                <a href="{{ route('tarefas-edit', ['id'=>$tarefa ->id]}}">Editar</a>
            </th>
        </tr>
        {{--<a href= ""class="btn btn-sucess">Editar</a>
        <a href= ""class="btn btn-danger">Excluir</a>--}}
    @endforeach
    </tbody>
    </table>
@endsection 



