<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class ListPriceConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        // $msg = 'list of books'.'<br>'.'book 1 -> 100'. '<br>' .'book 2 -> 120 ';
        
        // $this->bot->reply($msg);

        $question = Question::create("List of Books")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Book one | price : 100$')->value('b1'),
                Button::create('Book two | price : 120$')->value('b2'),
                Button::create('Book three | price : 130$')->value('b3'),
            ]);

        return $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'b1') {                    
                    $this->say("you clicked book one -- its price 100$");
                }
                else if ($answer->getValue() === 'b2') {                    
                    $this->say("you clicked book two -- its price 120$");
                }
                 else {
                    $this->say("you clicked book three -- its price 130$");
                }
            }
        });
    }
}
