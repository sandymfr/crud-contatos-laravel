<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'contato', 'endereco', 'telefone', 'email'
    ];
    //
}
