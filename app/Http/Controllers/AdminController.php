<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    function index()
   {
       return view('Home.Index');
   }
   
   function addUser()
   {
       
       return view('Home.AddUser');
   }
   
    function login()
   {
       
       return view('Home.Login');
   }
}
