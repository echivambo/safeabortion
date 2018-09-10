<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionarioGeral extends Model
{
    protected $table = 'questionario';

    protected $fillable = [
        'franquia_id', 'data_avaliacao', 'questao', 'resposta', 'codigo', 'categoria','user_id',
    ];
}
