<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pesanan;
use Auth;

class HomeUserController extends Controller
{
    //buat ngeset kalo mau ke home itu harus login ato register
    public function __construct()
    {
        $this->middleware('auth');
    }
    //nampilin data + dataterakhir
    public function HomeUser(){
      $user_id = Auth::user()->id;
      //$pesanan = pesanan::all();
      // ini buat total pesanan berdasarkan id
      $pesanan = pesanan::where('id_user', $user_id)->get();
      // fungsi last pesanan
      $last = pesanan::where('id_user', $user_id)->orderBy('id_pesanan', 'DESC')->first();
      return view('user.user', ['pesanan' => $pesanan], ['last' => $last]);
    }


}
