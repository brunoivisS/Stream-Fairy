<?php

namespace App\Http\Controllers;

use App\Models\User;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class allController extends Controller
{
    public function index(){

        $user = new User;
        $users = $user::all();
        // return($index);
        return view('teste')->with('users',$users);
    }

    public function create(){
    
        if(auth()->check()){
            return redirect()->route('home.index')->with('success','Logged in'); 
        } else{
            return view("create");
        }
    }
    public function register(){
            return view("register");
    }
    public function store(Request $request){
        try{
            $input = $request->all();
            $sorvete['name']= ($input['name']);
            $sorvete['email'] = ($input['email']);
             $sorvete['password'] = bcrypt($input['password']);
            $user = new User;
            $store = $user::create($sorvete);
            return redirect('users')->with('flash_message', 'User ADD');
            // return view('teste')->('users',$users);

        } catch(Error $e) {
                return $e;
        }

        
    }
    public function edit($id){
        $user = new User;
        $edit = $user::find($id);
        return view('edit')->with('edit',$edit);

    }
    public function update(Request $request,$id){
        $user = new User;
        $edit = $user::find($id);
        $input = $request->all();
        

        $edit->update($input);
        return redirect('users')->with('flash_message','User updated!');


    }

    public function delete($id){
        $user = new User;
        $delete = $user::destroy($id);
        return redirect('users')->with('flash_message','User deleted!');
    }

    public function show($id){
        try{
            $user = new User;
            $show = $user::find(id:$id);
  


            return view('show')->with('show',$show);
            
        } catch(Error $e) {
            return $e;
        }
    }
}
