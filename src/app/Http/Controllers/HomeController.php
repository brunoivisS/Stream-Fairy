<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(!auth()->check()){ 
            return redirect()->route('user.index'); 
        } else{
            return view("movies2");
        }
        // @if(auth()->check())
       
        // it's workingg!
        // @else
        
        // @endif


        // if(auth()-> check()){
        //     return ;
        // // }else {
  
        // }
    }

    public function image()
    {
         $sur = auth()->user();
           return $sur;
    }
}
