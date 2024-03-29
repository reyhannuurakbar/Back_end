<!DOCTYPE html>
<html>
<head>
  @include('inc.link')

  @include('inc.headeradmin')

</head>
<body>
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Tabel Pesanan</h1>
            </div>
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
                <th scope="col">Aksi</th>
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
                <td>
                  <a href='{{url("/accepted/{$book->id_pesanan}")}}' class="alert alert-success">Accepted</a>
                  <a href='{{url("/deny/{$book->id_pesanan}")}}' class="alert alert-danger">Deny</a>
                </td>
              </tr>
                @endforeach
              @endif

              <div class="page-header">
                <h1 id="tables">Tabel User</h1>
              </div>

              <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">ID User</th>
                  <th scope="col">Nama Pemesan</th>
                  <th scope="col">Nama Restoran</th>
                  <th scope="col">Jam Pesanan</th>
                  <th scope="col">Jumlah Pemesan</th>
                  <th scope="col">Tanggal Pesanan</th>
                  <th scope="col">Status Pesanan</th>
                  <th scope="col">Aksi</th>
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
                  <td>
                    <a href='{{url("/accepted/{$book->id_pesanan}")}}' class="alert alert-success">Accepted</a>
                    <a href='{{url("/deny/{$book->id_pesanan}")}}' class="alert alert-danger">Deny</a>
                  </td>
                </tr>
                  @endforeach
                @endif

                <div class="page-header">
                  <h1 id="tables">Tabel Restoran</h1>
                </div>

                <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID User</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">Nama Restoran</th>
                    <th scope="col">Jam Pesanan</th>
                    <th scope="col">Jumlah Pemesan</th>
                    <th scope="col">Tanggal Pesanan</th>
                    <th scope="col">Status Pesanan</th>
                    <th scope="col">Aksi</th>
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
                    <td>
                      <a href='{{url("/accepted/{$book->id_pesanan}")}}' class="alert alert-success">Accepted</a>
                      <a href='{{url("/deny/{$book->id_pesanan}")}}' class="alert alert-danger">Deny</a>
                    </td>
                  </tr>
                    @endforeach
                  @endif
            </div>
          </div>
  </tbody>
</table>

</body>

@include('inc.footer')

</html>
