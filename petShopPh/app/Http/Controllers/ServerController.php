<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation;


class ServerController extends Controller
{

//    show index
    public function index () {
        return view ('index');
    }

    //show service up form
    public function boarding() {
        return view('services.boarding');
    }

    public function daycare() {
        return view('services.daycare');
    }

    public function grooming() {
        return view('services.grooming');
    }

    public function petwalking() {
        return view('services.petwalking');
    }

    public function sitting() {
        return view('services.sitting');
    }

    public function training() {
        return view('services.training');
    }

    // store service data
    public function store(Request $request) {
        // dd($request->all());

        $formFields = $request->validate([
        'petType' => 'required',
        'petSize' => 'required',
        'petAge' => 'required',
        'date' => 'required',
        'time' => 'required',
        'petGroom' => 'required',
        'petProgram' => 'required',    
        'daysreq' => 'required',
        'petTrain' => 'required', 
        'walks' => 'required', 
        'petAge' => 'required' 
    ]);

    return redirect('/');
    }
}

