@extends('Layout.app')

@section('Tarefas')

@section('content')
    <header><h1>Novas tarefas</h1></header>
        <input class="button1" type="submit" value="Listar tarefas">
        <section>
            <form action="cad.php" method="get">
                <label for="nome">Tarefas</label>
                <input type="text" name="tarefas" id="nome">

                <!-- AS OPÇÕES DE EDITAR E EXCLUIR PODEM SER OU DEVEM SER LINKS  -->
                <input href="btn-edit" class="button2" type="submit" value="edit">
                <input href="btn-destroy" class="button2" type="submit" value="destroy">
            </form>
        </section>
@endsection 