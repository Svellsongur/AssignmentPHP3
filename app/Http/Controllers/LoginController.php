<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request){

        //Kiểm tra email và mk có dúng hay ko 
        if (Auth::attempt(['email' => $request['loginemail'], 'password' => $request['loginpassword']])){
            $request->session()->regenerate(); 
        }

        return redirect('/main'); //trả về route main ()
    }

    public function logout(){
        Auth::logout();
        return view('default.login');
    }
}
