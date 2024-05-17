@extends('Layout.app')

@section('Tarefas')

@section('content')

<link rel="stylesheet" href="/CSS/app.css">
<div class="page">
        <form action="{{ route('tarefas-store')}}" method="post">
        @csrf
            <header>
                <h1>Novas tarefas</h1>
                <a class="link" href="listar">listar</a>
            </header>
            @include('Tarefas/flash-message')  
                <div class="corpo">         
                    <label class="tarefas" for="nome">Tarefas</label><br>
                    <input class="input" type="text" name="nome" id="nome"><br>
                    <input class ="btn" href="btn-save" class="button2" type="submit" value="Salvar">         
                </div>
            
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
</div>
@endsection 
