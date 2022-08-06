<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\token;
use Illuminate\Support\Str;
use DateTime;
class LoginAPIController extends Controller
{
    
    public function  login(Request $req){

        $user = user::where('name',$req->username)->where('password',$req->password)->first();
        session()->put('name',$user->name);
        if($user){
            $api_token = Str::random(64);
            $token = new Token();
            $token->userid = $user->id;
            $token->token = $api_token;
            $token->created_at = new DateTime();
            $token->save();
            return $token;
        }
        return "No user found";

    }
    public function  logout(Request $request){

        $token = Token::where('token',$request->token)->first();

        if($token){
            $token->expired_at = new DateTime();
            $token->save();
            return "Logout";
        }

    }


} 