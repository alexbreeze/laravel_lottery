<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/Home/Index', 'AdminController@index');

Route::get('/Home/AddUser', 'AdminController@addUser');
 
Route::get('/Home/Login', 'AdminController@login');

Route::get('/LotteryGame/Main', 'RecordController@doRecord');

Route::get('/LotteryGame/Deposit', 'CallAPIController@doDeposit');

Route::get('/LotteryGame/Withdrawal', 'CallAPIController@doWithdrawal');

Route::get('/LotteryGame/AccountDetail', 'CallAPIController@showAccountDetail');

Route::get('/LotteryGame/GameInformation', 'LotteryNewsController@showLotteryNews');

Route::get('/LotteryGame/UserRecord', 'RecordController@showUserRecord');

Route::get('/LotteryGame/InitGame', 'LotteryNewsController@initGame');
