<!DOCTYPE html>
<html>
<head>
  @include('inc.link')

  @include('inc.headeradmin')

</head>
<body>
  <!-- nama restoran harus dihapus -->
  <!-- ganti id_user jadi nama user -->
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID Pemesanan</th>
      <th scope="col">Nama Pemesan</th>
      <!-- nama restoran perlu ga perlu sii -->
      <th scope="col">Nama Restoran</th>
      <th scope="col">Jam Pesanan</th>
      <th scope="col">Jumlah Pemesan</th>
      <th scope="col">Tanggal Pesanan</th>
      <th scope="col">Status Pesanan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <!-- ini yang dirubah -->
    @if(count($pesanan) >0 )
      @foreach($pesanan -> all() as $book)
        @foreach($User ->all() as $user)
          @if($book->id_user == $user->id)
    <tr class="table-active">
      <th>{{$book->id_pesanan}}</th>
      <!-- gw ngambil nama user karena kita buat dalam 1 tabel -->
      <td>{{$user->name}}</td>
      <!-- buat nampilin nama restoran nya di tarik dengan cara auth -->
      <td>{{ Auth::user()->name }}</td>
      <td>{{$book->jam}}</td>
      <td>{{$book->jumlah}}</td>
      <td>{{$book->tanggal}}</td>
      <td>{{$book->status}}</td>
      <td>
        <a href='{{url("/accepted/{$book->id_pesanan}")}}' class="alert alert-success">Accepted</a>
        <a href='{{url("/deny/{$book->id_pesanan}")}}' class="alert alert-danger">Deny</a>
      </td>
    </tr>
          @endif
        @endforeach
      @endforeach
    @endif
  </tbody>
</table>

</body>

@include('inc.footer')

</html>
