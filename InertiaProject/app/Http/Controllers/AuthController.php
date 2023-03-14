<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function index(){
        return inertia('Login/Login');
    }

    public function store(Request $request){
        Log::emergency($request->all());
        if(Auth::attempt($request->all())){
            return redirect('/listing');
        }
    }
}
