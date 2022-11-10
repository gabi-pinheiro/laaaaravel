<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutosModel extends Model
{
    protected $table = "tbproduto"; 
    protected $filliable = ['idProduto', 'idCategoria',	'produto',	'valor', 'imagem'];
    public $timestamps = false;
}
