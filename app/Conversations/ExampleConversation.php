<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

use App\Questionn;
use App\Client;
use App\AnswerClient;

class ExampleConversation extends Conversation
{

    protected $firstname;
    public $data;
    public $count;
    public $flag=0;
    public $lastclient;
    public $lclient;
    // public $questionsandanswer=[];
    public $answers;
    public function __construct(){

        // $this->data = Questionn::where('id',3)->with('answers')->get()->keyBy('id');
        $this->count = Questionn::with('answers')->get()->count();
        $this->lclient = Client::all()->count();
        // if(Client)
        //     $this->lastclient = Client::orderby('id','desc')->first();
        //     $this->lclient = $this->lastclient['id']+1;
        // }
    }
    public function createClient(){
        $ss = new Client;
        $ss->code_num = rand(111,999);
        $ss->name = $this->firstname ;
        $ss->save();
    }

    public function answerclient($client_id,$question_id,$answer){
            
            $data = new AnswerClient;
            $data->client_id = $client_id;
            $data->question_id = $question_id;
            $data->answer = $answer;
            $data->save();
    }


    public function askName()
    {
        $this->ask('Hello! What is your fullname?', function(Answer $answer) {
            $this->firstname = $answer->getText();
            $this->say('Nice to meet you '.$this->firstname);

                $this->questionAndAnswers1();
                $this->createClient();

        });
    }
    
    
    public function questionAndAnswers1(){
        $this->flag++;
        $questionAndAnswers = Questionn::where('id',$this->flag)->with('answers')->get()->keyBy('id');
        
        
            foreach ($questionAndAnswers as $key => $item) {

            $buttonArray = [];
            foreach ($item->answers as $id => $answer) {
                foreach ($answer->answer_text as $key => $value) {
                    $button = Button::create($value)->value($value);
                    $buttonArray[] = $button;   
                }                
            }

            $question = Question::create($item->question_txt)
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons($buttonArray);            
        return $this->ask($question, function (Answer $answer) use($item) {
            if ($answer->isInteractiveMessageReply()) {
                $this->say($answer->getValue());                      
                
                $this->answerclient($this->lclient+1,$item->id,$answer->getValue());
                if ($this->flag < $this->count) {
                    $this->questionAndAnswers1();    
                }
                else{
                    $msg = 'Thanks For You Answers';
        
                    $this->bot->reply($msg);
                }
                
            }
            
        });
        
        }
        
    }

    //,,,
    /**
     * Start the conversation
     */
    public function run()
    {
        
        $this->askName();        

    }
}
    