<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pesanan;
use App\User;
use Auth;

class AdminController extends Controller
{
    // buat masuk akun karena 1 tabel user
    public function __construct()
    {
        $this->middleware('auth');
    }

    // ini buat admin restoran
    // nampilin data pesanan
    public function Home(){
      $user_id = Auth::user()->id;
      // masih ada rancu name itu perlu di declare ato engga karena setelah di coba ga bisa di tampilin tapi
      // karena di tabel ada name dari restoran
      // jadi narik dari tabel user aja liat di halaman admin.blade.php ato user.blade.php

      // $data_restoran itu digunakan buat ngebandingin id nanti nya setiap restoran sama admin
      $data_restoran = [
        [
          "id" => 1,
          "name" => "Hanamasa"
        ],
        [
          "id" => 2,
          "name" => "Shabuhaci"
        ],
        [
          "id" => 3,
          "name" => "Bamboo Dimsum"
        ]
      ];
      // jika dia masuk role admin, dan dia memiliki id == tertentu atau misal admin = udin dengan id =7 maka tampilin semua pesanan
      // mau ngecek kalo termasuk dalam array maka munculinnya berdasarkan id nya
      // dan ini masih belum tentu soalnya id restoran belum ditentuin
      // maksudnya kalo dia restoran dengan id yang masuk dalam array data di bawah ini maka dia cuma bisa nampilin data sesuai restoranya

      // fungsi utama buat ngebedain admin sama restoran
      if($user_id == 1){
          $pesanan = pesanan::all();
      }
      else {
        // code...
        foreach ($data_restoran as $restoran) {
          if ($restoran['id'] == $user_id) {
            $pesanan = pesanan::where('id_restoran', $user_id)->get();
            $nama_restoran = $restoran;

          }
        }
      }
      //$pesanan = pesanan::where('id_user', $user_id)->get();

      //$pesanan = pesanan::all();
      $User = User::all();
      return view('admin.admin', ['pesanan' => $pesanan], ['User' => $User], ['nama_restoran', $nama_restoran]);
    }

    // fungsi restoran
    public function accepted($id_pemesanan){
      $data = array(
        'status' => "Accepted"
      );
      $accepted = pesanan::where('id_pesanan',$id_pemesanan)->update($data);
      $pesanan = pesanan::all();
      $User = User::all();
      return view('admin.admin', ['pesanan' => $pesanan], ['User' => $User]);
    }
    public function deny($id_pemesanan){
      $data = array(
        'status' => "Deny"
      );
      $deny = pesanan::where('id_pesanan',$id_pemesanan)->update($data);
      $pesanan = pesanan::all();
      $User = User::all();
      return view('admin.admin', ['pesanan' => $pesanan], ['User' => $User]);
    }
}
