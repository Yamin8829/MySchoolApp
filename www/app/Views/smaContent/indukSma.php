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
          <div class="col-sm-6">
            <h1 class="m-0"><?=$title;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=base_url('/Sma/input');?>">Membuat Data</a></li>
              <li class="breadcrumb-item active">Buku Induk</li>
              <li class="breadcrumb-item"><a href="<?=base_url('/Sma');?>">SMA</a></li>
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
          <!-- general form elements -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tahun Ajaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="row">

              <?php foreach ($totalSiswaPerThn->getResultArray() as $dataKls): ?>
                <div class="col-12 col-sm-6 col-md-4">
<div class="info-box mb-3">
<span class="info-box-icon bg-navy elevation-1"><i class="fas fa-users"></i></span>

<div class="info-box-content">
<span class="info-box-text">
<a  class="btn btn-info" href="<?=base_url() . '/Sma/tahun/' . $dataKls['thn_ajaran_1'];?>">
Tahun Ajaran <?=$dataKls['thn_ajaran_1'];?></a></span>
<span style="color: black;" class="info-box-number"><?=$dataKls['jumlahSiswa2'];?>
<small> Siswa</small>
<a  class="" href="<?=base_url() . '/Sma/export/' . $dataKls['thn_ajaran_1'];?>">
<i class="fa fa-file-excel"> </i> Export For Edit</a>
</span>
</div>
</div>
</div>

              <?php endforeach?>
          </div>

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