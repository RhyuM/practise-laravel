
<!-- jQuery -->
<script src="{{ asset("plugins/jquery/jquery.min.js") }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset("plugins/jquery-ui/jquery-ui.min.js") }}"></script>
<!-- Toastr -->
<script src="{{ asset("plugins/toastr/toastr.min.js") }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset("plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- ChartJS -->
<script src="{{ asset("plugins/chart.js/Chart.min.js") }}"></script>
<!-- Sparkline -->
<script src="{{ asset("plugins/sparklines/sparkline.js") }}"></script>
<!-- JQVMap -->
<script src="{{ asset("plugins/jqvmap/jquery.vmap.min.js") }}"></script>
<script src="{{ asset("plugins/jqvmap/maps/jquery.vmap.usa.js") }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset("plugins/jquery-knob/jquery.knob.min.js") }}"></script>
<!-- daterangepicker -->
<script src="{{ asset("plugins/moment/moment.min.js") }}"></script>
<script src="{{ asset("plugins/daterangepicker/daterangepicker.js") }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}"></script>
<!-- Summernote -->
<script src="{{ asset("plugins/summernote/summernote-bs4.min.js") }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("dist/js/adminlte.js") }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset("dist/js/pages/dashboard.js") }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset("dist/js/demo.js") }}"></script>
<!-- DataTables -->
<script src="{{ asset("plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{ asset("plugins/datatables-responsive/js/dataTables.responsive.min.js") }}"></script>
<script src="{{ asset("plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}"></script>


<!-- data tables -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "paging": false,
    });
    $('#example2').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


<!-- datetime picker-->
<script>
       $(function () 
       {$('#reservationtime').daterangepicker({
               timePicker: true, 
               singleDatePicker: true,
               locale: {
               format: 'YYYY-MM-DD hh:mm A'
               } 
            })
        })
</script>

<!-- date time clock -->
<script type="text/javascript"> 
    function startTime()
     {
        var today = new Date();
        var hr = today.getHours();
        var min = today.getMinutes();
        var sec = today.getSeconds();
        ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
        hr = (hr == 0) ? 12 : hr;
        hr = (hr > 12) ? hr - 12 : hr;
        //Add a zero in front of numbers<10
        hr = checkTime(hr);
        min = checkTime(min);
        sec = checkTime(sec);
        document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
        
        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        var curWeekDay = days[today.getDay()];
        var curDay = today.getDate();
        day = checkDay(curDay);
        var curMonth = months[today.getMonth()];
        var curYear = today.getFullYear();
        var date = curWeekDay+", "+day+" "+curMonth+" "+curYear;
        document.getElementById("date").innerHTML = date;
        
        var time = setTimeout(function(){ startTime() }, 500);
    }
    function checkTime(i) 
    {
        if (i < 10) 
        {
            i = "0" + i;
        }
        return i;
    }
    function checkDay(i) 
    {
        if (i < 10) 
        {
            i = "0" + i;
        }
        return i;
    }
</script>

<style type="text/css">
    #clock
    {
        position: absolute;
        top: 6%;
        left: 41%;
        font-family: Orbitron;
        font-size:25px;
        text-shadow:0px 0px 1px #fff;
        color:#17D4FE;
    }
    #clock span 
    {
        color:#17D4FE;
        text-shadow:0px 0px 1px #333;
        font-size:15px;
        left:-10px;
    }
    #date
    {
        position: absolute;
        top: 60%;
        left: 41%;
        letter-spacing:2px;
        font-size:9px;
        font-family:arial,sans-serif;
        color:#fff;
    }
</style>