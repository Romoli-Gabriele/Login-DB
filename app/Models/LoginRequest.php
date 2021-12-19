<?php
namespace App\Models;

use Exception;
use Illuminate\Support\Facades\DB;

class LoginRequest{

    public String $email;
    protected String $password;


    function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    function findUsr(String $mail){
        try{
            $user = DB::table('users')->where('email', $mail)->first();
        }catch(Exception ){
            return false;
        }
        return $user;
    }


}