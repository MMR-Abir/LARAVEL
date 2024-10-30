<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   function index(){

$date=['title'=>"Home Page1", 'content'=>"Hurr!Abar kor"];

$date['fruits']=["Mango","Apple","PineApple","Gauava","Cheery"];
        return view('home', $date);
   }

   function about(){
    return view('about');
}

function contact(){
    return view('contact');
}
}
