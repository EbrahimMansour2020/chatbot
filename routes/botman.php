<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('team name', function ($bot) {
    $bot->reply('Be in Track');
});

// $botman->hears('start', BotManController::class.'@startConversation');

$botman->fallback(function($bot) {
    $bot->reply('Sorry, I did not understand ..... ');
});