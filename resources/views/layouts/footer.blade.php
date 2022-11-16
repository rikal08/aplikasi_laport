<!-- jQuery 3 -->
<script src="{{ asset('template') }}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('template') }}/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('template') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="{{ asset('template') }}/bower_components/raphael/raphael.min.js"></script>
<script src="{{ asset('template') }}/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('template') }}/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{ asset('template') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ asset('template') }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('template') }}/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- DataTables -->
<script src="{{ asset('template') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('template') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('template') }}/bower_components/moment/min/moment.min.js"></script>
<script src="{{ asset('template') }}/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{ asset('template') }}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('template') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{ asset('template') }}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('template') }}/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('template') }}/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template') }}/dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable({
      scrollX       : true,
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      scrollX       : true
    })
  })
</script>

<script type="text/javascript">
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  $(document).ready(function(){
    $('#pilih_ta').change(function(){
      var id_tahun_ajaran = $('#pilih_ta').val();
      var id_kelas = $('#id_kelas').val();
      
      
      $.ajax({
        url:'get-nilai',
        type:'post',
        data: {_token: CSRF_TOKEN, id_tahun_ajaran:id_tahun_ajaran,id_kelas:id_kelas},
        dataType: 'json',
          success: function(response){
            createRows(response);
        }
      });
    });
  });

  function createRows(response){
      var len = 0;
      $('#example2 tbody').empty(); // Empty <tbody>
      if(response['data'] != null){
         len = response['data'].length;
      }

      if(len>0){
        for(var i=0; i<len;i++){
          var nisn_siswa = response['data'][i].nisn_siswa;
          var nilai_akhir = response['data'][i].nilai_akhir;
          var nama_siswa = response['data'][i].nama_siswa;
          var capaian = response['data'][i].capaian;

          var tr_str = "<tr>" +
             "<td align='center'>" + (i+1) + "</td>" +
             "<td align='left'>" + nisn_siswa + "</td>" +
             "<td align='left'>" + nama_siswa + "</td>" +
             "<td align='center'>" + nilai_akhir + "</td>" +
             "<td align='left'>" + capaian + "</td>" +
             "<td align='left'><a class='btn btn-primary'> Edit</a></td>" +
           "</tr>";

           $("#example2 tbody").append(tr_str);
        }
      }
    }
</script>

</body>
</html>