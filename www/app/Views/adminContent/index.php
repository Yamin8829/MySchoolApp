<?=$this->extend('coreTemplates/header');?>

<?=$this->section('page-content');?>

<?=$this->include('coreTemplates/sidebar')?>
<?=$this->include('coreTemplates/topbar');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <?php if (session()->getTempdata('pesan')): ?>
          <?=session()->getTempdata('pesan');?>
          <?php endif;?>
          <div class="col-sm-6">
            <h1 class="m-0">Admin Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div   class="my_user_data">

          <!-- /.col -->
          </div>
      </div><!-- /.container-fluid -->



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?=$this->include('coreTemplates/footer');?>
  <?=$this->include('coreTemplates/getUser');?>

  <?=$this->endSection();?>