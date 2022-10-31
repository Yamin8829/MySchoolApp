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
            <h1 class="m-0"><?=$title;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=base_url('/Sma/indukSma');?>">Buku Induk</a></li>
              <li class="breadcrumb-item "><a href="<?=base_url('/Sma');?>">SMA</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

          <!-- general form elements -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Membuat Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="row">
      <div class="mt-3 col-sm-5">
                  <div class="card bg-gradient-primary">
                    <div class="card-header">
                      <h3 class="card-title">Import by Braja's Format</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header onclick="return confirm('Apakah Struktur File Excel sudah sesuai ?');"-->
                    <div class="card-body">

                    <div class="custom-file">
                    <form class="" action="<?=base_url();?>/Sma/importSiswa" method="post"enctype="multipart/form-data">
                                <input type="file" class="custom-file-input" id="excelFile" name="excelFile" required accept=".xls , .xlsx"  onchange="previewExcel()">
                                <label for="excelFile" class="custom-file-label">Choose file excel</label>
                                <button  class="btn btn-success btn-sm ">
                                <i class="fa fa-file-excel"> </i> Import
                              </button>
                    </form>
                              </div>
                              <div class="right col-sm-16  text-right">

                      <a href="<?=base_url('/Sma/create');?>" class="ml-3 btn bg-purple">
                        <i class="fas fa-edit"></i> Manual
                      </a>
                    </div>
                    </div>

                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>

                <div class="mt-3 col-sm-5">
                  <div class="card bg-gradient-primary">
                    <div class="card-header">
                      <h3 class="card-title">Update by Braja's Format</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                    <div class="custom-file">
                    <form class="" action="<?=base_url();?>/Sma/updateSiswa" method="post"enctype="multipart/form-data">
                                <input type="file" class="custom-file-input" id="excelFile2" name="excelFile" required accept=".xls , .xlsx"  onchange="previewExcelKu()">
                                <label for="excelFile2" class="Ex2 custom-file-label">Choose file excel</label>
                                <button  onclick="return confirm('Apakah Struktur File Excel sudah sesuai ?');" class="btn btn-success btn-sm ">
                                <i class="fa fa-file-excel"> </i> Import for update
                              </button>
                    </form>
                              </div>
                              <div class="right col-sm-16  text-right">


                    </div>
                    </div>

                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>

</div>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?=$this->include('coreTemplates/footer');?>

  <?=$this->endSection();?>