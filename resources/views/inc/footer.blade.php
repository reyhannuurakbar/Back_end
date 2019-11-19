<footer id="footer" class="text text-center">
  <p>Copyright &copy 2019 Mamamtoki</p>
</footer>

<script src="{{asset('bootstrap-spacex/assets/scripts/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap-spacex/assets/scripts/modernizr.min.js')}}"></script>
<script src="{{asset('bootstrap-spacex/assets/plugin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('bootstrap-spacex/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('bootstrap-spacex/assets/plugin/nprogress/nprogress.js')}}"></script>
<script src="{{asset('bootstrap-spacex/assets/plugin/sweet-alert/sweetalert.min.js')}}"></script>
  <script src="{{asset('bootstrap-spacex/assets/plugin/waves/waves.min.js')}}"></script>
  <script src="{{asset('bootstrap-spacex/assets/scripts/sweetalert.init.min.js')}}"></script>

<!-- Sparkline Chart -->
<script src="{{asset('bootstrap-spacex/assets/plugin/chart/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('bootstrap-spacex/assets/scripts/chart.sparkline.init.min.js')}}"></script>

<!-- Jquery UI -->
<script src="{{asset('bootstrap-spacex/assets/plugin/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('bootstrap-spacex/assets/plugin/jquery-ui/jquery.ui.touch-punch.min.js')}}"></script>

<!-- FullCalendar -->
<script src="{{asset('bootstrap-spacex/assets/plugin/moment/moment.js')}}"></script>
<script src="{{asset('bootstrap-spacex/assets/plugin/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('bootstrap-spacex/assets/scripts/fullcalendar.init.js')}}"></script>

  <!-- Select2 -->
<script src="{{asset('bootstrap-spacex/assets/plugin/select2/js/select2.min.js')}}"></script>

  <!-- Timepicker -->
  <script src="{{asset('bootstrap-spacex/assets/plugin/timepicker/bootstrap-timepicker.min.js')}}"></script>

  <!-- Datepicker -->
  <script src="{{asset('bootstrap-spacex/assets/plugin/datepicker/js/bootstrap-datepicker.min.js')}}"></script>

  <!-- Demo Scripts -->
  <script src="{{asset('bootstrap-spacex/assets/scripts/form.demo.min.js')}}"></script>
  <script src="{{asset('bootstrap-spacex/assets/scripts/main.min.js')}}"></script>

  <script>
      function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('txt').innerHTML =
      h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
      }
      function checkTime(i) {
          if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
          return i;
      }
  </script>
