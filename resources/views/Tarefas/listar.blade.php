@extends('Layout.app')

@section('Tarefas/listagem')

@section('content')
<form action="{{ route('listar') }}" method="post">
        <h1>{{$nome}}</h1>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">nome</th>
            </tr>
        </thead>
        <tbody>
        {{--@foreach($tarefa)
            <tr>
                <th>{{ $tarefa ->nome }}</th>
            </tr>
        endforeach--}}
        </tbody>
        </table>
        </form>

@endsection 