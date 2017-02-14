<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
class userController extends Controller
{
    public function postSignUp(Request $request){
    	$user=new User();
    	$user->email=$request['email'];
    	$user->name=$request['name'];
    	$user->password=bcrypt($request['pwd']);
    	$user->save();
    	return redirect()->back();
    }

    public function postSignIn(Request $request){

    }
}
