<?php

namespace App\Http\Controllers;

use App\Models\User;
use Error;
use Illuminate\Http\Request;

class allController extends Controller
{
    public function index(){

        $user = new User;
        $result = $user::all();
        return($result);
        // return view('teste')->with('users',$users);
    }

    public function create(){
    
        return view('create');
    }

    public function store(Request $request){
        try{
            $input = $request->all();
            $sorvete['name']= ($input['name']);
            $sorvete['email'] = ($input['email']);
             $sorvete['password'] = bcrypt($input['password']);
            $user = new User;
            $result = $user::create($sorvete);
            return redirect('users')->with('flash_message', 'User ADD');
            // return view('teste')->('users',$users);

        } catch(Error $e) {
                return $e;
        }

        
    }
    public function show($id){
        try{
            
            $result = User::find(id:$id);
           
            return $result;
            
        } catch(Error $e) {
            return $e;
        }
    }
    
}
