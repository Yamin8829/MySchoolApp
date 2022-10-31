<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> <?=$title;?> | My School App</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/dist/css/adminlte.css">
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/dist/css/style.css">
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/dist/css/induk.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/plugins/summernote/summernote-bs4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
      <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?=base_url('public');?>/assets/adminLTE/plugins/toastr/toastr.min.css">
  <style>
    @font-face {
    font-family:'Poppins';
    font-style:normal;
    font-weight:400;
    font-display:swap;
    src: url( "<?=base_url('public');?>/assets/adminLTE/plugins/fontawesome-free/webfonts/Poppins-Regular.woff") format("woff"),url("/www/assets/adminLTE/plugins/fontawesome-free/webfonts/Poppins-Regular.ttf") format("truetype");
  }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div style="font-weight: 600; font-size:8em;" class="preloader flex-column justify-content-center align-items-center">
  <i  class="animation_shake fas fa-university"></i>
  <!-- <img class="animation__shake" src="assets/adminLTE/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> -->
  </div>


  <?=$this->renderSection('page-content');?>


 