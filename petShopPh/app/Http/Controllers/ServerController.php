<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerController extends Controller
{

//    show index
    public function index () {
        return view ('index');
    }

    //show sign up form
    public function boarding() {
        return view('services.boarding');
    }
}

