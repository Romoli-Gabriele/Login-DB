<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\LoginRequest;
use phpDocumentor\Reflection\Types\This;

class UsersController extends Controller
{
    public function index()
    {
        session_start();
        $_SESSION["users"] = User::all();
        return view('users.index');
    }
    public function addUser()
    {
        $newUser = new User;
        $newUser->name= request('name');
        $newUser->email= request('email');
        $newUser->password= request('password');
        $newUser->save();
        session_start();
        $_SESSION["newUser"]=$newUser;

        return view('users.SingInComplete');
    }
    public function login(LoginRequest $request){

        if($request->findUsr($request->email)!=false){
            
            
        }
        
        

        

        
    }
}