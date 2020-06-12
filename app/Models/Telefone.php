<?php

namespace App\Models;
use App\Models\Cliente;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = [
        'cliente_id', 'numero'
    ];

    public function rules(){
        return[
            'cliente_id' => 'required',
            'numero' => 'required'

        ];
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'cliente_id','id');
    }
}
