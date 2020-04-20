
<!-- jQuery -->
<script src="{{ asset("plugins/jquery/jquery.min.js") }}"></script>
<!-- jquery-validation -->
<script src="{{ asset("plugins/jquery-validation/jquery.validate.min.js") }}"></script>
<script src="{{ asset("plugins/jquery-validation/additional-methods.min.js") }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset("plugins/jquery-ui/jquery-ui.min.js") }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset("plugins/sweetalert2/sweetalert2.min.js") }}"></script>
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


<!-- toast -->
<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    // $('.swalDefaultSuccess').click(function() {
    //   Toast.fire({
    //     type: 'success',
    //     title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    //   })
    // });
    // $('.swalDefaultInfo').click(function() {
    //   Toast.fire({
    //     type: 'info',
    //     title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    //   })
    // });
    // $('.swalDefaultError').click(function() {
    //   Toast.fire({
    //     type: 'error',
    //     title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    //   })
    // });
    // $('.swalDefaultWarning').click(function() {
    //   Toast.fire({
    //     type: 'warning',
    //     title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    //   })
    // });
    // $('.swalDefaultQuestion').click(function() {
    //   Toast.fire({
    //     type: 'question',
    //     title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    //   })
    // });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
  //   $('.toastrDefaultInfo').click(function() {
  //     toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  //   });
  //   $('.toastrDefaultError').click(function() {
  //     toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  //   });
  //   $('.toastrDefaultWarning').click(function() {
  //     toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  //   });

  //   $('.toastsDefaultDefault').click(function() {
  //     $(document).Toasts('create', {
  //       title: 'Toast Title',
  //       body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
  //     })
  //   });
  //   $('.toastsDefaultTopLeft').click(function() {
  //     $(document).Toasts('create', {
  //       title: 'Toast Title',
  //       position: 'topLeft',
  //       body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
  //     })
  //   });
  //   $('.toastsDefaultBottomRight').click(function() {
  //     $(document).Toasts('create', {
  //       title: 'Toast Title',
  //       position: 'bottomRight',
  //       body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
  //     })
  //   });
  //   $('.toastsDefaultBottomLeft').click(function() {
  //     $(document).Toasts('create', {
  //       title: 'Toast Title',
  //       position: 'bottomLeft',
  //       body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
  //     })
  //   });
  //   $('.toastsDefaultAutohide').click(function() {
  //     $(document).Toasts('create', {
  //       title: 'Toast Title',
  //       autohide: true,
  //       delay: 750,
  //       body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
  //     })
  //   });
  //   $('.toastsDefaultNotFixed').click(function() {
  //     $(document).Toasts('create', {
  //       title: 'Toast Title',
  //       fixed: false,
  //       body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
  //     })
  //   });
  //   $('.toastsDefaultFull').click(function() {
  //     $(document).Toasts('create', {
  //       body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
  //       title: 'Toast Title',
  //       subtitle: 'Subtitle',
  //       icon: 'fas fa-envelope fa-lg',
  //     })
  //   });
  //   $('.toastsDefaultFullImage').click(function() {
  //     $(document).Toasts('create', {
  //       body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
  //       title: 'Toast Title',
  //       subtitle: 'Subtitle',
  //       image: '../../dist/img/user3-128x128.jpg',
  //       imageAlt: 'User Picture',
  //     })
  //   });
  //   $('.toastsDefaultSuccess').click(function() {
  //     $(document).Toasts('create', {
  //       class: 'bg-success', 
  //       title: 'Toast Title',
  //       subtitle: 'Subtitle',
  //       body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
  //     })
  //   });
  //   $('.toastsDefaultInfo').click(function() {
  //     $(document).Toasts('create', {
  //       class: 'bg-info', 
  //       title: 'Toast Title',
  //       subtitle: 'Subtitle',
  //       body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
  //     })
  //   });
  //   $('.toastsDefaultWarning').click(function() {
  //     $(document).Toasts('create', {
  //       class: 'bg-warning', 
  //       title: 'Toast Title',
  //       subtitle: 'Subtitle',
  //       body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
  //     })
  //   });
  //   $('.toastsDefaultDanger').click(function() {
  //     $(document).Toasts('create', {
  //       class: 'bg-danger', 
  //       title: 'Toast Title',
  //       subtitle: 'Subtitle',
  //       body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
  //     })
  //   });
  //   $('.toastsDefaultMaroon').click(function() {
  //     $(document).Toasts('create', {
  //       class: 'bg-maroon', 
  //       title: 'Toast Title',
  //       subtitle: 'Subtitle',
  //       body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
  //     })
  //   });
  });

</script>

<!-- change password validate -->
<script type="text/javascript">
$(document).ready(function () 
{
  $.validator.setDefaults
  ({
    submitHandler: function () 
    {
      alert( "Form successful submitted!" );
      form.submit();
    }
  });
  $('#quickForm').validate({
    rules: {
      current_password: {
        required: true,
        minlength: 6
      },
      new_password: {
        required: true,
        minlength: 6
      },
      new_confirm_password: {
        required: true,
        minlength: 6
      },
    },
    messages: 
    {
      current_password: 
      {
        required: "Password field is required",
        minlength: "Your password must be at least 6 characters long"
      },
      new_password: 
      {
        required: "Please provide a new password",
        minlength: "Your password must be at least 6 characters long"
      },
      new_confirm_password: 
      {
        required: "Password confirmation field is required",
        minlength: "Your password must be at least 6 characters long"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) 
    {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) 
    {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) 
    {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

<!-- data tables -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
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
    $('#example3').DataTable({
      "paging": false,
      "lengthChange": false,
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
