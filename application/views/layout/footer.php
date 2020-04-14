<!-- /.content-wrapper -->
    <footer class="main-footer animated fadeInDown slower">
        <strong>Đồ án 2016-2020</strong>
        <div class="float-right d-none d-sm-inline-block">
        </div>
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>
    <script src="{$url}plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{$url}plugins/jquery/jquery.min.js"></script>
    <script src="{$url}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{$url}plugins/select2/js/select2.full.min.js"></script>
    <script src="{$url}plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{$url}plugins/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="{$url}plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="{$url}plugins/moment/moment.min.js"></script>
    <script src="{$url}plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{$url}plugins/datatables/jquery.dataTables.js"></script>
    <script src="{$url}plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="{$url}dist/js/adminlte.min.js"></script>
    <script src="{$url}plugins/jquery-ui/jquery-ui.min.js"></script>
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
    <script type="text/javascript">
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
   </body>
</html>
