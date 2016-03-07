<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use App\Admin;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        //check session
        if (session('login') != null) {
            return redirect('/main');
        } else {
            return view('admin.login');
        }
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);


        if($validator->fails()){
            return redirect('/')->withInput()->withErrors($validator);
        }else{
            $admin = Admin::where('email', $request->email)
                ->where('password', $request->password)->first();

            if(count($admin) > 0){
                //create session
                session(['login' => $admin->name]);
                return redirect('/main');
            }else{
                return redirect('/')->withInput($request->all())->withErrors('Incorrect Credentials!');
            }
        }
    }

    public function logout(Request $request){
        if($request->session()->has('login') != null){
            $request->session()->forget('login');
            return redirect('/m16admin');
        }
    }

    public function doforgotpassword(Request $request){
        if($request != null){
            $admin = Admin::where('email', $request->email);
            $email = $request->email;
            $tempPass = 'asdASD123!@#';

            Mail::send('emails.forgotpassword', ['admin'=>$admin, 'newpass'=>$tempPass], function($m) use ($admin){
                $m->from('heartnett07@hotmail.com', 'Admin');
                $m->to('gabrielcaesario@gmail.com', $admin->name);
                $m->subject('TEST EMAIL');
            });
        }
    }

}
