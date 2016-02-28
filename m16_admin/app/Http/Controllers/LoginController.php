<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return redirect('/');
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect('/')->withInput()->withErrors($validator);
        }else{
            if($request->email == 'admin' && $request->password == 'admin'){
                return redirect('/main');
            }else{
                return redirect('/')->withInput($request->all())->withErrors('Incorrect Credentials!');
            }
        }
    }
}
