<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@welcome');
Route::match(['get', 'post'], '/botman', 'BotManController@handle');
// Route::get('/dash', 'MainController@dash');


Route::get('/questionList', 'MainController@questionsAndAnswers');

// Route::get('/createQuestion', 'MainController@createQuestionPage');
// Route::post('/createQuestion', 'MainController@createQuestion');


Route::get('/createQuestion', 'MainController@createQuestionPage');
Route::post('/createQuestion', 'MainController@testCreatQuestion');


route::get('/chatbot','MainController@chat');

route::get('chatshow', 'MainController@chatShow');
route::get('dash', 'MainController@chatShow');
route::get('everychat/{id?}', 'MainController@everyChat');


//////
Route::get('testq', function () {
    return view('testcreateq');
});


