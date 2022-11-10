<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContatoModel extends Model
{
    protected $table = "tbcontato";
    protected $filliable = ['idContato', 'nomeCliente',	'emailCliente',	'telefoneCliente', 'mensagemCliente'];
    public $timestamps = false;
}
