<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
   public function index(){
    return view('login');
   }


public function login(Request $request){
   dd($request->all());
}

}

