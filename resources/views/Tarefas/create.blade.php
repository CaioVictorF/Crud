@extends('Layout.app')

@section('Tarefas')

@section('content')
    <form action="{{ route('story') }}" method="post">
    @csrf
        <header><h1>Novas tarefas</h1></header>
            <section>
                    <label for="nome">Tarefas</label>
                    <input type="text" name="nome" id="nome">
                    <input href="btn-save" class="button2" type="submit" value="Salvar">
                    <a href="{{ route('listar')}}">listar</a>
            </section>
    </form>
@endsection 