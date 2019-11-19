<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pesanan;

class HomeUserController extends Controller
{
    //buat ngeset kalo mau ke home itu harus login ato register
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function HomeUser(){
      $pesanan = pesanan::all();
      return view('user.user', ['pesanan' => $pesanan]);
    }
}
