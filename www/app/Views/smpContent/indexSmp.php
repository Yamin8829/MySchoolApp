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
            <li class="breadcrumb-item"><a href="<?=base_url('/Smp/input');?>">Membuat Data</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('/Smp/indukSmp');?>">Buku Induk</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pernah Terdaftar</span>
                <span class="info-box-number">
                  <?=$totalSiswa;?>
                  <small>Siswa</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-down"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mutasi</span>
                <span class="info-box-number"><?=$totalMutasi;?>
                <small>Siswa</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <!-- <div class="clearfix hidden-md-up"></div> -->

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Aktif</span>
                <span class="info-box-number"><?=$totalAktif;?>
                <small>Siswa</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-graduation-cap"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Lulus</span>
                <span class="info-box-number"><?=$totalLulus;?>
                <small>Siswa</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->


<?=$this->include('smpContent/charts');?>
          <div class="card col-12">
              <div class="card-header">
                <h3 class="card-title">Kelas Aktif</h3>
              </div>
<div class="body">
        <!-- /.row   -->
        <div class="mt-3 col-md-12">
                  <div class="card bg-gradient-lightblue collapsed-card">
                    <div class="card-header">
                      <h3 class="card-title">Kelas 7  <span class="badge badge-success right"> <?=$totalKls7;?> siswa</span></h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class=" card-body">
                    <div class="row">
                    <?php foreach ($totalSiswaPerKls7->getResultArray() as $dataKls): ?>

                      <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-navy elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
              <a  class="btn btn-info" href="<?=base_url() . '/Smp/kelas/' . $dataKls['kls_4'];?>">
                <span class="info-box-text">Kelas <?=$dataKls['kls_4'];?></span></a>
                <span style="color: black;" class="info-box-number"><?=$dataKls['jumlahSiswaKls'];?>
                <small>Siswa</small>

                </span>
            </div>
          </div>
        </div>
                      <?php endforeach?>
                      </div>
                    </div>

                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>

                <div class="mt-3 col-md-12">
                  <div class="card bg-gradient-primary collapsed-card">
                    <div class="card-header">
                      <h3 class="card-title">Kelas 8 <span class="badge badge-success right"> <?=$totalKls8;?> siswa</span></h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class=" card-body">
                    <div class="row">
                    <?php foreach ($totalSiswaPerKls8->getResultArray() as $dataKls): ?>

                      <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-navy elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
              <a  class="btn btn-info" href="<?=base_url() . '/Smp/kelas/' . $dataKls['kls_4'];?>">
                <span class="info-box-text">Kelas <?=$dataKls['kls_4'];?></span></a>
                <span style="color: black;" class="info-box-number"><?=$dataKls['jumlahSiswaKls'];?>
                <small>Siswa</small>

                </span>
            </div>
          </div>
        </div>
                      <?php endforeach?>
                      </div>
                    </div>

                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>

                <div class="mt-3 col-md-12">
                  <div class="card bg-gradient-indigo collapsed-card">
                    <div class="card-header">
                      <h3 class="card-title">Kelas 9 <span class="badge badge-success right"> <?=$totalKls9;?> siswa</span></h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class=" card-body">
                    <div class="row">
                    <?php foreach ($totalSiswaPerKls9->getResultArray() as $dataKls): ?>

                      <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-navy elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
              <span class="info-box-text">
              <a  class="btn btn-info" href="<?=base_url() . '/Smp/kelas/' . $dataKls['kls_4'];?>">
                Kelas <?=$dataKls['kls_4'];?></a></span>
                <span style="color: black;" class="info-box-number"><?=$dataKls['jumlahSiswaKls'];?>
                <small>Siswa</small>

                </span>
            </div>
          </div>
        </div>
                      <?php endforeach?>
                      </div>
                    </div>

                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>

                <div class="mt-3 col-md-12">
                  <div class="card bg-gradient-danger collapsed-card">
                    <div class="card-header">
                      <h3 class="card-title">Salah Kelas <span class="badge badge-success right"> <?=$totalKls0;?> siswa</span></h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class=" card-body">
                    <div class="row">
                    <?php foreach ($totalSiswaPerKls0->getResultArray() as $dataKls): ?>

                      <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-navy elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
              <span class="info-box-text">
              <a  class="btn btn-info" href="<?=base_url() . '/Smp/kelas/' . $dataKls['kls_4'];?>">
                Kelas <?=$dataKls['kls_4'];?></a></span>
                <span style="color: black;" class="info-box-number"><?=$dataKls['jumlahSiswaKls'];?>
                <small>Siswa</small>

                </span>
            </div>
          </div>
        </div>
                      <?php endforeach?>
                      </div>
                    </div>

                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                </div>
                </div>

            <div class="row">
          <!-- general form elements -->
          <div class="card card-indigo">
              <div class="card-header">
                <h3 class="card-title"> All Classes</h3>
              </div>
              <!-- /.card-header -->

      <div class="mt-3 col-sm-12">
                  <!-- <div class="card bg-gradient-primary">
                    <div class="card-header">
                      <h3 class="card-title">Buku Induk</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>

                    </div>

                    <div class="card-body">

          <form class="">

              <input class="form-control form-control-navbar" type="search" name="search" placeholder="Search" aria-label="Search">

                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
          </form>

                    </div>


                  </div> -->


                  <table id="example1" class="table table-bordered table-hover  table-striped">
                  <thead>
                  <tr>
                          <th>Nomor Induk</th>
                          <th>Pas Poto</th>
                          <th>Nama Lengkap</th>
                          <th>Tempat Lahir</th>
                          <th>Action</th>
                          <th>Tahun Ajaran</th>
                          <th>Di Kelas</th>
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
                          <td><div class="d-flex"> <a href="<?=base_url();?>/Siswa/data/<?=$dt['slug'];?>/<?=$dt['nis_siswa_smp']?>" class="btn btn-sm btn-success">Detail</a>
                          <a href="<?=base_url();?>/Smp/edit/<?=$dt['slug'];?>/<?=$dt['nis_siswa_smp']?>" class="mx-2 btn btn-sm btn-warning">Edit</a>

                           <form class="" method="post" action="<?=base_url();?>/Smp/delete/<?=$dt['id_siswa_smp'];?>">
                            <input type="hidden" name="_method" value="DELETE" >
                            <button onclick="return confirm('Apakah Anda yakin ?');" class="btn btn-sm btn-danger" type="submit">Delete</button>
                             </form> </div></td>

                          <td><?php if ($dt['thn_ajaran_3'] == 2223): ?>
                            2022/2023
                            <?php endif;?>
                          </td>

                          <td><?=$dt['kls_4'];?></td>

                          </tr>
                  <?php endforeach;?>

        </tbody>
            </table>
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
  <?=$this->include('coreTemplates/smpCharts');?>

  <?=$this->endSection();?>