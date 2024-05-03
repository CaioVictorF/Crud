@extends('Layout.app')

@section('Tarefas')

@section('content')
    <header><h1>Novas tarefas</h1></header>
        <section>
            <form action="cad.php" method="get">
                <label for="nome">Tarefas</label>
                <input>
                <!--<input type="text" name="tarefas" id="nome">-->
                <input href="btn-edit" class="button2" type="submit" value="Editar">
                <input href="btn-" class="button2" type="submit" value="Editar">
            </form>
        </section>
@endsection 