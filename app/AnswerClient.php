<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerClient extends Model
{
    // protected $table = 'AnswerClient';
    protected $fillable = ['client_id','question_id','answer'];
    
    public function questions(){
        return $this->belongsTo('\App\Questionn','question_id');
    }

    public function clients(){
        return $this->belongsTo('\App\Client','client_id');
    }
    
}
