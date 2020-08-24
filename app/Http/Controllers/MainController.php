<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionn;
use App\Answerr;
use App\Client;
use App\AnswerClient;


class MainController extends Controller
{
    public $clients;
    public function __construct()
    {
         $this->clients = Client::orderby('id','desc')->get();
    }
    public function welcome(){
        $intromesg = 'hello .. As you know the whole world is effected from the COVID-19. I am becoming the part of Sunlife to help my community in this tough time to offer best services in regards of protections and investment.';
        return view('welcome')->with('intromsg',$intromesg);
    }

    // public function dash(){
    //     return view('clients');
    // }

    public function chat(){
        return view('try');
    }
    
    public function questionsAndAnswers(){
        $data = Questionn::with('answers')->get();
        //  dd($data['id']);       
        // return response()->json($data);
        return view('questionsList')->with('data',$data);
    }

    // public function createQuestionPage(){
    //     return view('createQuestion');
    // }

    // public function createQuestion(Request $r){
    //     $question = new Questionn;
    //     $question->question_txt = $r->question_txt;
    //     $question->save();
    
    //     $answers = new Answerr;
    //     $answers->answer_text = ["$r->first_answer","$r->second_answer","$r->third_answer"];
    //     $answers->question_id = $question->id;
    //     $answers->save();

    //     return redirect('questionList');
    // }

    public function createQuestionPage(){
        return view('testcreateq');
    }

    public function testCreatQuestion(Request $r){
        $question = new Questionn;
        $question->question_txt = $r->question_txt;
        $question->save();
        
        $answersarr =[];
        for ($i=0; $i < $r->inputcounts ; $i++) { 
                $aa = "answer$i";
                $answersarr[$i]= $r->$aa;
        }

        $answers = new Answerr;
        $answers->answer_text = $answersarr;
        $answers->question_id = $question->id;
        $answers->save();

        return redirect('questionList');
    }

    // public function clientList(){
    //     // $data = Client::with('clientAnswrs')->with('questionforanswer')->get();
    //     // $data = Questionn::with('clienttAnswers')->get();
    //     $data = AnswerClient::where('client_id',1)->with('clients')->with('questions')->get();
    //     // return response()->json($data);
    //     return view('clients')->with('data',$data);

    // }

    public function chatShow(){
        // $data = Client::all();
        // return response()->json($data);
        return view('chatShow')->with('data',$this->clients);
    }

    public function everyChat($id){
        $clientname = Client::where('id',$id)->first();
        // $dd = Client::where('id',$id)->with('clientAnswrs')->with('questions')->get();
        $dd = AnswerClient::where('client_id',$id)->with('clients')->with('questions')->get();
        return view('everyOne')->with('data',$this->clients)
                                ->with('cli',$dd)
                                ->with('clientname',$clientname);

        // return response()->json($dd);

    }



}
