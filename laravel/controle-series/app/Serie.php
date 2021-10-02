<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model{
    protected $table = 'series'; //nao precisa desse comando pq o laravel pega o nome da classe, coloca em minusculo e joga pro plural
    public $timestamps = false;
}