<!DOCTYPE html>
<html>
<head>
  @include('inc.link')

  @include('inc.header')

</head>
<body>

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID Pemesanan</th>
      <th scope="col">Nama Pemesan</th>
      <th scope="col">Nama Restoran</th>
      <th scope="col">Jam Pesanan</th>
      <th scope="col">Jumlah Pemesan</th>
      <th scope="col">Tanggal Pesanan</th>
      <th scope="col">Status Pesanan</th>
    </tr>
  </thead>
  <tbody>
    @if(count($pesanan) >0 )
      @foreach($pesanan -> all() as $book)
    <tr class="table-active">
      <th>{{$book->id_pemesanan}}</th>
      <td>{{$book->id_user}}</td>
      <td>{{$book->id_restoran}}</td>
      <td>{{$book->jam}}</td>
      <td>{{$book->jumlah}}</td>
      <td>{{$book->tanggal}}</td>
      <td>{{$book->status}}</td>
    </tr>
      @endforeach
    @endif
  </tbody>
</table>

</body>

@include('inc.footer')

</html>
