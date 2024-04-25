<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listartarefas extends Controller
{
    public function index(){
        return view('listar'); 
    }
}
