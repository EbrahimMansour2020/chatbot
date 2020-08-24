<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['client_id','question_id','answer'];

    public function clientAnswrs(){
        return $this->hasMany('\App\AnswerClient','client_id');
    }
    
}
