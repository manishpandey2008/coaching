<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function Login()
    {
    	$pass_code=request('passCode');
    	$pass=request('password');
    	$checker=Registration::all()->where('pass_code',$pass_code)->where('password',$pass)->count();

    	if($checker){
    		$user=Registration::all()->where('pass_code',$pass_code)->where('password',$pass)->first();
            session()->put('pass', $pass_code);
    		return redirect()->route('admin-home',['userName'=>$user['user_name']]);
    	}else{
    		return redirect()->route('getLogin');
    	}
    	
    }
}
