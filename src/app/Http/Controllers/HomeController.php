<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->check()){ 
            $sur = auth()->user();
            $name = $sur;
            return view("movies2")->with('name',$name);
           
        } else{
            return redirect()->route('login'); 
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
        
    }
}
