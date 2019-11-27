<!DOCTYPE html>
<html>
<head>
  @include('inc.link')

  @include('inc.header')

</head>
<body>
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="tables">Tabel Pesanan</h1>
      </div>
      <div>
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
            <th>{{$book->id_pesanan}}</th>
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
      </div>
      <!-- tabel last pesanan nya -->
      <div class="page-header">
        <h1 id="tables">Tabel Last Pesanan</h1>
      </div>
        <div>
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
            <tr class="table-active">
              <th>{{$last->id_pesanan}}</th>
              <td>{{$last->id_user}}</td>
              <td>{{$last->id_restoran}}</td>
              <td>{{$last->jam}}</td>
              <td>{{$last->jumlah}}</td>
              <td>{{$last->tanggal}}</td>
              <td>{{$last->status}}</td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
    </div>

</body>

@include('inc.footer')

</html>
