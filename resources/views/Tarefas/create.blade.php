@extends('Layout.app')

@section('Tarefas')

@section('content')
    <header><h1>Novas tarefas</h1></header>
        <section>
            <form action="cad.php" method="get">
                <label for="nome">Tarefas</label>
                <input type="text" name="tarefas" id="nome">
                <input href="btn-save" class="button2" type="submit" value="Salvar">
            </form>
        </section>
@endsection 