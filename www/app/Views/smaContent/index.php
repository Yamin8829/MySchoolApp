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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Siswa</li>
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
                <h3 class="card-title">Jenjang Sekolah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="row">
      <div class="mt-3 col-md-3">
                  <div class="card bg-gradient-primary">
                    <div class="card-header">
                      <h3 class="card-title">Jenjang SMP</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <a href="<?=base_url('/Smp');?>" class="btn btn-info"><i class="fas fa-users"></i> SMP    <span class="badge badge-pill badge-success right"><?=$totalSiswa;?></span></a>
                    </div>

                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <div class="mt-3 col-md-3">
            <div class="card bg-gradient-primary">
              <div class="card-header">
                <h3 class="card-title">Jenjang SMA</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="<?=base_url('/Sma');?>" class="btn btn-info"><i class="fas fa-users"></i> SMA    <span class="badge badge-pill badge-success right"><?=$totalSiswaSma;?></span></a>
              </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

            <!-- <div>
            <div class="overflow-auto"> <table id="example1" class="table table-bordered table-hover  table-striped">
                  <thead>
                  <tr>
                          <th>Nomor Induk</th>
                          <th>Pas Poto</th>
                          <th>Nama Lengkap</th>
                          <th>Tempat Lahir</th>
                          <th>Action</th>
                          <th>Terakhir diubah</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($dt7a as $dt): ?>
                        <tr>

                          <td><?=$dt['nis_siswa_smp'];?></td>
                          <td>
                            <div class="bg-poto-data">
                              <div class="img-pro-data">
                              <img class="img-fluid  rounded-circle rounded-circle" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $dt['img_1'];?>" alt="">
                              </div>
                            </div>
                          </td>
                          <td><?=$dt['nama_lengkap_siswa'];?></td>
                          <td><?=$dt['tmp_lahir_siswa'];?></td>
                          <td class=" d-flex"> <a href="<?=base_url($linkSMP);?>/dataKelas7/data7a20_21/<?=$dt['slug'];?>" class="btn btn-sm btn-success">Detail</a>
                          <a href="<?=base_url($linkSMP . '/edit7a20_21/') . $dt['slug'];?>" class="mx-2 btn btn-sm btn-warning">Edit</a>

                           <form class="" method="post" action="<?=base_url($linkSMP);?>/delete/<?=$dt['id_siswa_smp'];?>">

                            <input type="hidden" name="_method" value="DELETE" >
                            <button onclick="return confirm('Apakah Anda yakin ?');" class="btn btn-sm btn-danger" type="submit">Delete</button>
                             </form></td>

                          <td><?=date('F d, Y l. h:i A', (int) $dt['updated_at']);?></td>

                          </tr>
                  <?php endforeach;?>

        </tbody>
            </table></div>

          </div> -->
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