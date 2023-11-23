<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //show register
    public function create() {
        return view('users.signup');
    }

    // create new user
    public function store(Request $request) {

    $formFields = $request->validate([
        'name' => 'required',
        'Lastname' => 'required',
        'email' => ['required', 'email', Rule::unique('users','email')],
        'password' => 'required',
        // 'password_confirmation' => 'required',
    ]);

    //hash password
    $formFields['password']=bcrypt($formFields['password']);

    //create user
    $user=User::create($formFields);

    auth()->login($user);

    return redirect('/')->with('message', 'User created and logged in');
}
}
