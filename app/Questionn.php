<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionn extends Model
{
    protected $table = 'questionns';
    protected $fillable = ['question_txt'];
    
    public function answers(){
        return $this->hasMany('\App\Answerr','question_id');
    }

    public function clienttAnswers(){
        return $this->hasMany('\App\AnswerClient','question_id');
    }
}
