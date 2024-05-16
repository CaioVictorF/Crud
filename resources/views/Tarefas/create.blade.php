@extends('Layout.app')

@section('Tarefas')

@section('content')
<link rel="stylesheet" href="/CSS/app.css">
    <form action="{{ route('tarefas-store')}}" method="post">
    @csrf
        <header>
            <div style="flex:1;flex-direction:row">
                <h1>Novas tarefas</h1>
                <a class="link" href="listar">listar</a>
            </div>
        </header>
        @include('Tarefas/flash-message')  
            <div >
                <section class="elements">         
                        <label class="tarefas" for="nome">Tarefas</label><br>
                        <input class="input" type="text" name="nome" id="nome"><br>
                        <input class ="btn" href="btn-save" class="button2" type="submit" value="Salvar">         
                </section>
            </div>
      
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="color: red; text-align: center;">
                        @foreach($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </ul>
                </div>
            @endif
    </form>
@endsection 
