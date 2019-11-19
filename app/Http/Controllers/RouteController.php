<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RouteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function HomeUser(){
      return view('user.user');
    }
    public function Pesen(){
      return view('user.register_pemesanan');


      $user_id = Auth::user()->id;
    }
    // public function Register(){
    //   return view('register');
    // }
}
