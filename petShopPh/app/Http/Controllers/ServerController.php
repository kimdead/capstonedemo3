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

    public function signup () {
        return view ('signup');
    }
    public function contact () {
        return view ('contact');
    }

    //show service form
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



    // public function store(Request $request){
    //     dd($request->all());
    // }



    // store service data
    public function store(Request $request) {
        

        $formFields = $request->validate([
        // 'petType' => 'required',
        // 'petSize' => 'required',
        // 'petAge' => 'required',
        // 'date' => 'required',
        // 'time' => 'required',
        // 'petGroom' => 'required',
        // 'petProgram' => 'required',    
        // 'daysreq' => 'required',
        // 'petTrain' => 'required', 
        // 'walks' => 'required', 
        // 'petAge' => 'required' 
            'breed' => 'required'

    ]);

    ServerController::grooming($formFields);

    return redirect('/')->with('message', 'Book successful!');
    }
}

