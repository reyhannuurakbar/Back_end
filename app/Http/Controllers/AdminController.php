<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pesanan;
use App\User;

class AdminController extends Controller
{
    // ini buat admin restoran
    // nampilin data pesanan
    public function Home(){
      $pesanan = pesanan::all();
      $User = User::all();
      return view('admin.admin', ['pesanan' => $pesanan], ['User' => $User]);
    }

    // fungsi restoran
    public function accepted($id_pemesanan){
      $data = array(
        'status' => "Accepted"
      );
      $accepted = pesanan::where('id_pesanan',$id_pemesanan)->update($data);
      $pesanan = pesanan::all();
      return view('admin.admin', ['pesanan' => $pesanan]);
    }
    public function deny($id_pemesanan){
      $data = array(
        'status' => "Deny"
      );
      $deny = pesanan::where('id_pesanan',$id_pemesanan)->update($data);
      $pesanan = pesanan::all();
      return view('admin.admin', ['pesanan' => $pesanan]);
    }
}
