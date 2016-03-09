<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

use App\Event;
use App\Admin;

class MainController extends Controller
{
   //GET
   public function index(){
       if (session('login') != null) {
           return view('admin.home');
       }else{
           return view('admin.login');
       }
   }

   //GET
   public function newevent(){
       return view('admin.newevent', ['events' => Event::all()]);
   }

   public function deleteevent(Request $request, Event $event){
        //$this->authorize('destroy', $event);

       $event->delete();

       return redirect('/newevent');
   }

   //POST
   public function doinsertevent(Request $request){
       $validator = Validator::make($request->all(), [
           'txtEventName' => 'required',
           'txtStartDate' => 'required',
           'txtEndDate' => 'required',
           'txtDescription' => 'required',
           'txtEventPlace' => 'required',
           'image' => 'required|mimes:png,jpg,PNG,JPG'
       ]);

       if($validator->fails()){
           return redirect('/newevent')->withInput()->withErrors($validator);
       }else{
           $event = new Event();

           $dt = new \DateTime();

           $imgName = $dt->format('Ymd').'.'.$request->file('image')->getClientOriginalExtension();

           $event->ev_name = $request->txtEventName;
           $event->ev_page = $request->page;
           $event->ev_place = $request->txtEventPlace;
           $event->ev_start = $request->txtStartDate;
           $event->ev_end = $request->txtEndDate;
           $event->ev_img = $imgName;
           $event->ev_desc = $request->txtDescription;

           $request->file('image')->move(base_path().'/public/sbadmin/eventImages/', $imgName);

           $event->save();

           return redirect('/newevent');
       }
   }

   //GET
   public function editevent(){
       return view('admin.editevent', ['events' => Event::all()]);
   }

   //POST
   public function doeditevent(Request $request){
       $validator = Validator::make($request->all(), [
           'page' => 'required',
           'txtEventName' => 'required',
           'txtStartDate' => 'required',
           'txtEndDate' => 'required|different:txtStartDate',
           'txtDescription' => 'required'
       ]);

       if($validator->fails()){
           return redirect('/editevent')->withInput()->withErrors($validator);
       }else{
           $event = Event::find($request->eventID);

           $event->ev_name = $request->txtEventName;
           $event->ev_page = $request->page;
           $event->ev_start = $request->txtStartDate;
           $event->ev_end = $request->txtEndDate;
           $event->ev_desc = $request->txtDescription;

           $event->save();

           return redirect('/editevent');
       }
   }

   //GET
   public function manageadmin(){
       return view('admin.manageadmin', ['admins' => Admin::all()]);
   }

   //POST
   public function doaddadmin(Request $request){
       if($request != null){
           $name = $request->name;
           $email = $request->email;
           $pass = $request->pass;
           $page = $request->page;

           $admin = new Admin();
           $admin->name = $name;
           $admin->email = $email;
           $admin->password = $pass;
           $admin->page = $request->page;


           if($admin->save()){
               $response = array(
                   'status'=>true,
                   'msg'=>'Success adding new admin'
               );
           }else{
               $response = array(
                   'status'=>false,
                   'msg'=>'FAILED adding new admin'
               );
           }

           return Response::json($response);
       }
   }

   //POST
   public function dodeleteadmin(Request $request){
       if($request != null){
           $admin = Admin::find($request->admin_id);

           if($admin->delete()){
                $response = array(
                    'status'=>true,
                    'msg'=>'Delete Admin Successful'
                );
           }else{
               $response = array(
                   'status'=>false,
                   'msg'=>'FAILED Delete Admin'
               );
           }

           return Response::json($response);
       }
   }

   //POST
   public function doeditadmin(Request $request){
       if($request != null){
           $admin = Admin::find($request->id);

           $admin->name = $request->name;
           $admin->email = $request->email;
           $admin->password = $request->pass;

           if($admin->save()){
               $response = array(
                   'status'=>true,
                   'msg'=>'Update Admin Successful'
               );
           }else{
               $response = array(
                   'status'=>false,
                   'msg'=>'FAILED Update Admin'
               );
           }
           return Response::json($response);
       }
   }
}
