<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){

    }
    public function registration(RegistrationRequest $request){
        dd($request->all());
    }
}
