<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Model\user_line;
use App\Models\User;


use function PHPUnit\Framework\callback;

class UserControler extends Controller
{
    // public readonly User $user;

    // public function __construct()
    // {
    //     $this->user =  new User();
    // }




    public function index(){
        if(auth()->check()){
            return redirect()->route('home.index')->with('success','Logged in'); 
        } else{
            return view("login");
        }
    }

    // public function all(){
    //     $users = $this->->all();
    //     return view('teste')->with('teste',$users);
    // }
    public function store(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:8'
        ],[
            'email.required'=>'Esse campo de email é obrigatório',
            'email.email'=>'Esse campo deve ter email um email valido',
            'password.required'=>'O campo de senha é obrigatório',
            'password.min'=>'senha minima é :min caracteres'
        ]);

        $credentials= $request->only('email','password');
       
        $authenticated = Auth::attempt($credentials);

        if(!$authenticated) {
            return redirect()->route('user.index')->withErrors(['error' =>'email or password invalid']);
        }

        return redirect()->route('home.index')->with('success','Logged in');

        
        
        
    }
    
    
    public function destroy()
    { 
        Auth::logout();
        return redirect()->route('user.index');
    }

    public function register(){
        if(auth()->check()){
            return redirect()->route('home.index')->with('success','Logged in'); 
        } else{
            return view("create");
        }
    }

    public function create(Request $request)
    { 
        //     'name'             => 'required',                        // just a normal required validation
        //     'email'            => 'required|email|unique:ducks',     // required and must be unique in the ducks table
        //     'password'         => 'required',
        //     'password_confirm' => 'required|same:password'         
        // ]
       
        $data = $request->all();
        if($request->imagem == null){
            return error_log(404);
        } else{
            echo"nice";
        }
        dd($data);
        // do the validation ----------------------------------
        // validate against the inputs from our form
        
    
        // check if the validator failed -----------------------
        // if ($validator->fails()) {
    
        //     // get the error messages from the validator
        //     $messages = $validator->messages();
    
        //     // redirect our user back to the form with the errors from the validator
        //     return redirect()->route('login')
        //         ->withErrors($validator);
        // }





        return redirect()->route('user.index')->whith('Sucess', 'Logged in');
    }


    public function show($id){

    }


    public function edit(string $id)
    { 
       
    }
 
    public function update(Request $request,string $id)
    { 
    
    }
    
    public function delete($id)
    { 
        
    }















    // public function login(UserFormRequest $request,ModelsUser $user)
   
    // {
    //         $data = $request->validated();
    //         $user = new ModelsUser;
    //         $user->email = $request->email;
    //         $user->password = $request->password;
    //         if($user->all() == $request->password){
    //             dd("feklnm");
    //         }else{
    //             dd(334343);
    //         }
    //         dd($user);

            

            // if($email == $emailR){
            //     return view("sorteve");
            // } else {
            //     return view('Erro email não existe');
            // }
             
        // $validated = $request->validated();

        // $validated = $request->safe()->only(['name','email']);
        // $validated = $request->safe()->except(['name','email']);

        // return redirect('/fsdw');

            // $request->validate([
            //     'name'=>'required',
            //     'name'=>'required'
            // ]);

            //     dd($request->all());      
            // dd($request->all());
    // }
    // public function vai(UserFormRequest $request)
    // {
        // dd();
        // $data = $request->validated();
        // $user = new ModelsUser();
        // dd($user);
        // $user->name = $data['email'];
        // $user->password = $data['password'];
        // if($user->name = $request->email){
        //     dd('logou');

        // }else {
        //     dd('não');
        // }



        // $request->validate([
        //     'email' => 'required;',
        //     'password'=> 'required|password',
        // ]);

        // dd($request->all());




        // $user->save();

        // return redirect()->route('save');

       
    // }
}
