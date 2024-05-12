@extends('Layout.app')

@section('Tarefas')

@section('content')

    <form action="{{ route('tarefas-store')}}" method="post">
    @csrf
        <header><h1>Novas tarefas</h1></header>
        @include('Tarefas/flash-message')
            <section>
                    <label for="nome">Tarefas</label>
                    <input type="text" name="nome" id="nome">
                    <input href="btn-save" class="button2" type="submit" value="Salvar">
                    <a href="listar">listar</a>
            </section>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="color: red;">
                        @foreach($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </ul>
                </div>
            @endif
    </form>
@endsection 
