<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use\app\models\Tarefa;

class TarefasSeeder extends Seeder{

    public function run(): void{
        Tarefa::insert(['nome']);      
    }
} 
