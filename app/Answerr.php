<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answerr extends Model
{
    protected $casts = [
        'answer_text' => 'array'
    ];

    public function question(){
        return $this->belongsTo('\App\Questionn','question_id');
    }
}
