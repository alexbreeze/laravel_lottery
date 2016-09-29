<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CallAPIController extends Controller
{
    function doDeposit()
    {
       return view('LotteryGame.Deposit');
    }
    
    function doWithdrawal()
    {
       return view('LotteryGame.Withdrawal');
    }
    
    function showAccountDetail()
    {
       return view('LotteryGame.AccountDetail');
    }
}
