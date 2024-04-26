@extends('Layouts.app')

@section('Tarefas')

@section('content')
    <header><h1>Novas tarefas</h1></header>
        <input class="button1" type="submit" value="Listar tarefas">
        <section>
            <form action="cad.php" method="get">
                <label for="nome">Tarefas</label>
                <input type="text" name="tarefas" id="nome">
                <input  href="{{route('btn-save}}" class="button2" type="submit" value="Salvar">
            </form>
        </section>
@endsection