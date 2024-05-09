@extends('Layout.app')

@section('Tarefas', 'Exclusão')

@section('content')
    <h1>Editar tarefa</h1>
    <hr>
    <form action="{{ route('tarefas-update', ['id'=>$tarefas->id]) }}" method="POST">
    @csrf
    @method('put')
        <div>
            <label for="name">Nome:</label>
            <input type="text" class="form control" name="nome" value="{{ $tarefas->nome }}" placeholder="Digite um nome...">
        </div>
        <input type="submit" name="submit" value=Atualizar>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
    </hr>
@endsection 