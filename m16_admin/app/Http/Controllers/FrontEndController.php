<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;

class FrontEndController extends Controller
{
    public function index(){
        return view('landingpage.index', ['events' => Event::all()]);
    }
}
