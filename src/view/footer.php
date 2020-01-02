<footer class="main-footer">
    <strong>Copyright &copy; 2019-2020 <a href="http://orbitturner.yj.fr/" target="_blank">Orbit Turner</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./🔳 GLOBAL WRAPPER 🔳  -->

<!-- jQuery -->
<script src="<?= getProjectTemplate();?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= getProjectTemplate();?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= getProjectTemplate();?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= getProjectTemplate();?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= getProjectTemplate();?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= getProjectTemplate();?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= getProjectTemplate();?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= getProjectTemplate();?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= getProjectTemplate();?>plugins/moment/moment.min.js"></script>
<script src="<?= getProjectTemplate();?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= getProjectTemplate();?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= getProjectTemplate();?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= getProjectTemplate();?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- PACE PROGRESS LOADING -->
<script src="<?= getProjectTemplate();?>plugins/pace-progress/pace.min.js"></script>
<!-- GOOGLE MAPS API -->
<script src="<?= getProjectTemplate();?>js/citymap.js"></script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS7l7aIE8RlGCBTCkGrAQH2-rxqk9MLsE&callback=initMap">
    </script>
<!-- AdminLTE App -->
<script src="<?= getProjectTemplate();?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= getProjectTemplate();?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= getProjectTemplate();?>dist/js/demo.js"></script>
</body>
</html>
