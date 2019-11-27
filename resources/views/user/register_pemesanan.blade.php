<!DOCTYPE html>
<html>
<head>
  @include('inc.link')

  @include('inc.header')

</head>
<body>


  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form method="post" action="{{url('/insertpesanan')}}">
            {{csrf_field()}}
            <fieldset>
              <legend>Pemesanan</legend>
              @if(count($errors)>0)
                @foreach($errors -> all() as $error)
                  <div class="alert alert-danger">
                    {{$error}}
                  </div>
                @endforeach
              @endif
              <!-- value dari id restoran itu nanti diganti berdasarkan id restoran yang dimasukin -->
              <!-- untuk saat ini gw masukin value 1 sampe 3 karena akun user yang gw buat itu 3 user yang bisa jadi admin -->
              <!-- intinya ganti value nya nanti berdasarkan id nya nanti -->
              <div class="form-group col-md-6">
                <select name="restoran" class="form-control" id="exampleSelect1" required>
                  <option value="" disabled hidden selected>Restourant *</option>
                  <option value="1">Hanamasa</option>
                  <option value="2">Shabuhaci</option>
                  <option value="3">Bambu Dimsum</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <select name="jam" class="form-control" id="exampleSelect1" required>
                  <option value="" disabled hidden selected>Time *</option>
                  <option value="10.00-12.00">10.00-12.00</option>
                  <option value="12.00-14.00">12.00-14.00</option>
                  <option value="14.00-16.00">14.00-16.00</option>
                  <option value="16.00-18.00">16.00-18.00</option>
                  <option value="18.00-20.00">18.00-20.00</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <select name="jumlah" class="form-control" id="Select" required>
                  <option value="" disabled hidden selected>Persons *</option>
                  <option value="1">Number of guests 1</option>
                  <option value="2">Number of guests 2</option>
                  <option value="3">Number of guests 3</option>
                  <option value="4">Number of guests 4</option>
                </select>
              </div>
              <!-- mestinya css nya ada cuma untuk saat ini by text format -->
              <div class="form-group col-md-6">
                <div class="input-group">
                  <input type="text" name="tanggal"  class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" required>
                  <span class="input-group-addon bg-primary text-white"><i class="fa fa-calendar"></i></span>
                </div>
                <!-- /.input-group -->
              </div>

              </fieldset>
              <br><br>
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href="{{url('/')}}" class="btn btn-primary">Back</a>
            </fieldset>
          </form>

        </div>
      </div>
    </div>

</body>

@include('inc.footer')

</html>
