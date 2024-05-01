<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function cliente(){
        return $this->hasOne('App\Cliente', 'id', 'cliente_id');
    }

    public function produtos(){
        return $this->belongsToMany('App\Item', 'pedido_produtos', 'pedido_id', 'produto_id')->withPivot('id','created_at', 'updated_at');
        /*
            1 - Modelo do relacionamento NxN em relação o modelo que estamos implementando
            2 - É a tabela auxiliar que armazena os registros de relacionamento
            3 - Representa o nome da FK da tabela mapeada pelo modelo na tabela de relacionamento
            4 - Representa o nome da FK da tabela mapeada pelo model utilizado na tabela no relacionamento
        */
    }
}
