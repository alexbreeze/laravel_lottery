<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RecordController extends Controller
{
    
    
    function doRecord()
    {
       return view('LotteryGame.Main');
    }
    
    function showUserRecord()
    {
       return view('LotteryGame.UserRecord');
    }
    
}
