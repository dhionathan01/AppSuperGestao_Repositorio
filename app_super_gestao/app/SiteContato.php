<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contatos_id', 'mensagem'];

    public function motivo_contato(){
        return $this->hasOne('App\MotivoContato', 'id', 'motivo_contatos_id');
    }
}
