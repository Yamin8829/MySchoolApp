<footer class="main-footer">
    <strong>Copyright &copy; 2022 - <?=date('Y');?> <a href="">My School App</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<!-- DataTables  & Plugins -->
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/jszip/jszip.min.js"></script>
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/moment/moment.min.js"></script>
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('public');?>/assets/adminLTE/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?=base_url('public');?>/assets/adminLTE/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url('public');?>/assets/adminLTE/dist/js/pages/dashboard.js"></script>
<!-- SweetAlert2 -->
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?=base_url('public');?>/assets/adminLTE/plugins/toastr/toastr.min.js"></script>

<script>
// update_last_activity();
// setInterval(function(){
//  update_last_activity();
// }, 5000);

//   function update_last_activity(){
//     $.ajax({
//       url:'<?=base_url('/User/user-status');?>',
//       success:function(){
//       }
//     });
//   }

  function previewImg() {
  const img = document.querySelector('#img');
  const imgLabel = document.querySelector('.custom-file-label');
  const imgPreview = document.querySelector('.img-preview');

  imgLabel.textContent = img.files[0].name;

  const fileImg = new FileReader();
  fileImg.readAsDataURL(img.files[0]);

  fileImg.onload = function(e) {
    imgPreview.src = e.target.result;
  }
}
</script>

<script>
$scope.generatePdf = function() {
  // create the window before the callback
  var win = window.open('', '_blank');
  $http.post('/someUrl', data).then(function(response) {
    // pass the "win" argument
    pdfMake.createPdf(docDefinition).open({}, win);
  });
};

</script>

<script>
  $(function () {

    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "buttons": [ "colvis"],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
  $('#reservationdate').datetimepicker({
        format: 'L'
    });
</script>



<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
function previewImg() {
  const img = document.querySelector('#img');
  const imgLabel = document.querySelector('.custom-file-label');
  const imgPreview = document.querySelector('.img-preview');

  imgLabel.textContent = img.files[0].name;

  const fileImg = new FileReader();
  fileImg.readAsDataURL(img.files[0]);

  fileImg.onload = function(e) {
    imgPreview.src = e.target.result;
  }
}
function previewExcel() {
  const img = document.querySelector('#excelFile');
  const imgLabel = document.querySelector('.custom-file-label');
  const imgPreview = document.querySelector('.file-preview');

  imgLabel.textContent = img.files[0].name;

  const fileImg = new FileReader();
  fileImg.readAsDataURL(img.files[0]);

  fileImg.onload = function(e) {
    imgPreview.src = e.target.result;
  }
}
function previewExcelKu() {
  const img = document.querySelector('#excelFile2');
  const imgLabel = document.querySelector('.Ex2');
  const imgPreview = document.querySelector('.file-preview');

  imgLabel.textContent = img.files[0].name;

  const fileImg = new FileReader();
  fileImg.readAsDataURL(img.files[0]);

  fileImg.onload = function(e) {
    imgPreview.src = e.target.result;
  }
}

</script>

<div class="modal fade" id="modal-warning">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <form action="<?=base_url('/logout');?>">
            <div class="modal-header">
              <h4 class="modal-title">  <i class="fas fa-exclamation-triangle"></i> Warning </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h3>Are ready to sign out ?</h3>
              <p>Hit Sign out button below, if you are ready to quit &hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-ku-out btn-outline-dark" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-ku-out btn-outline-dark">Sign Out</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

</body>
</html>
