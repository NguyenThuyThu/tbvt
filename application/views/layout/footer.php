<!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Đồ án 2016-2020</strong>
        <div class="float-right d-none d-sm-inline-block">
        </div>
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
    <!-- jQuery UI 1.11.4 -->
    <script src="{$url}plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{$url}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{$url}plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{$url}plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{$url}plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{$url}plugins/jqvmap/maps/jquery.vmap.world.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{$url}plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{$url}plugins/moment/moment.min.js"></script>
    <script src="{$url}plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{$url}plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{$url}plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{$url}plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script type="text/javascript" src="{$url}public/Toastr/tienganh.js"></script>
    <script type="text/javascript" src="{$url}public/Toastr/toastr.js"></script>
    <!-- jQuery -->
    <script src="{$url}plugins/jquery/jquery.min.js"></script>

    <!-- DataTables -->
    <script src="{$url}plugins/datatables/jquery.dataTables.js"></script>
    <script src="{$url}plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

    <!-- AdminLTE App -->
    <script src="{$url}dist/js/adminlte.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{$url}plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="{$url}dist/js/pages/dashboard.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="{$url}dist/js/demo.js"></script>
    {if !empty($message)}
    <script type="text/javascript">
    	  setTimeout(function() {
    	    toastr.options = {
    	      closeButton: true,
    	      progressBar: true,
    	      showMethod: 'slideDown',
    	      timeOut: 5000
    	    };
    	    toastr.{$message.type}("{$message.title}","{$message.message}");
    	  }, 200);
    </script>
    {/if}
   </body>
</html>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
    $('#example3').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
       "pageLength": 3
    });
  });
</script>