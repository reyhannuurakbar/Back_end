<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\pesanan;

class PesananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //buka halaman pesen
    public function Pesen(){
      return view('user.register_pemesanan');
    }
    // mesen meja
    public function add(Request $request){
      $this->validate($request, [
        'restoran' => 'required',
        'jam' => 'required',
        'jumlah' => 'required',
        'tanggal' => 'required'
      ]);
      $pesanan = new pesanan;
      //$pesanan->timestamps = false;
      //$user_id = Auth::user()->id;
      //$user_id = input('id_user');
      $user_id = Auth::user()->id;
      $pesanan->id_user = $user_id;
      $pesanan->id_restoran = $request->input('restoran');
      $pesanan->jam = $request->input('jam');
      $pesanan->jumlah = $request->input('jumlah');
      $pesanan->tanggal = $request->input('tanggal');
      $pesanan->status = 'Pending';
      // $statuspemesanan = input('statuspemesanan');
      $pesanan->save();
      return redirect('/')->with('info','Pesanan berhasil, tunggu respon dari restoran');
    }
}
