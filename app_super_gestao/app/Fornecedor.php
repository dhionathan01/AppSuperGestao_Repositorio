<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    //
    use SoftDeletes;

    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'site', 'uf', 'email'];

    public function produtos(){
        return $this->hasMany('App\Item', 'fornecedor_id', 'id');
       /* Como as tabelas utilizam os nomes padrões formados pelo laravel apenas dessa forma já funcionaria:
        return $this->hasMany('App\Item'); */
    }
}
