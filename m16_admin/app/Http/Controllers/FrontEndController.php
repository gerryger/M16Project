<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontEndController extends Controller
{
    public function index(){
        return view('landingpage.index');
    }
}
