@extends('Layout.app')

@section('Tarefas', 'Update')

@section('content')
<link rel="stylesheet" href="/CSS/edit.css">
<div class="page">
    <h1>Editar tarefa</h1>
    <form action="{{ route('tarefas-update', ['id' => $tarefas->id]) }}" method="POST">
    @csrf
    @method('put')
        <div class="corpo">
            <label class="nome" for="name">Nome:</label>
            <input type="text" class="fc" class="form control" name="nome" value="{{ $tarefas->nome }}" placeholder="Digite um nome..."><br>
            <input class="btn" type="submit" name="submit" value=Atualizar>
        </div>
        
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="color: red;">
                        @foreach($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    <ul>
                </div>
        @endif
    </form>
</div>
@endsection 