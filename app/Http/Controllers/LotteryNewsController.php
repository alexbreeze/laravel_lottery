<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LotteryNewsController extends Controller
{
    function initGame()
    {
       return view('LotteryGame.InitGame');
    }
    
    
    
    
    function showLotteryNews()
    {
       return view('LotteryGame.GameInformation');
    }
    
}
