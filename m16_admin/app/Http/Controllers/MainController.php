<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

use App\Event;

class MainController extends Controller
{
   public function index(){
       return view('home');
   }

   public function newevent(){
       return view('newevent', ['events' => Event::all()]);
   }

   public function doinsertevent(Request $request){
       $validator = Validator::make($request->all(), [
           'txtEventName' => 'required',
           'txtStartDate' => 'required',
           'txtEndDate' => 'required',
           'txtDescription' => 'required'
       ]);

       if($validator->fails()){
           return redirect('/newevent')->withInput()->withErrors($validator);
       }else{
           $event = new Event();

           $event->ev_name = $request->txtEventName;
           $event->ev_page = $request->page;
           $event->ev_start = $request->txtStartDate;
           $event->ev_end = $request->txtEndDate;
           $event->ev_desc = $request->txtDescription;

           $event->save();

           return redirect('/newevent');
       }
   }
}
