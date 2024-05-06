@extends('Layout.app')

@section('Tarefas/listagem')

@section('content')
<h1>listagem de cadastros</h1>
    <a href="{{ route('create')}}" method="post">Novo Registro</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">nome</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tarefas as $tarefa)
        <tr>
            <th>{{ $tarefa ->nome }}</th>
        </tr>
        <a href= ""class="btn btn-sucess">Editar</a>
        <a href= ""class="btn btn-danger">Excluir</a>
    @endforeach
    </tbody>
    </table>
{{--<a href="{{ route('create'}}"></a>--}}
{{--<a href="{{ route('create'}}"></a>--}}
@endsection 



