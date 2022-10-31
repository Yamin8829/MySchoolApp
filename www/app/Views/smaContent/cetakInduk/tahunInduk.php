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
            <li class="breadcrumb-item"><a href="<?=base_url('/Sma/indukSmp');?>">Buku Induk</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('/Sma');?>">SMA</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('/Sma/input');?>">Membuat Data</a></li>
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

          <div class="col-12 col-sm-6 col-md-3"> <a href="<?=base_url('/Sma/sampulInduk');?>" target="_blank">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-print"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Print</span>
                <small>Lembar Sampul</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div> </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-3"> <a href="<?=base_url('/Smp/pengesahanInduk');?>" target="_blank">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-print"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Print</span>
                <small>Lembar Pengesahan</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div> </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-3"> <a href="<?=base_url('/Smp/pemeriksaanInduk');?>" target="_blank">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-print"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Print</span>
                <small>Lembar Pemeriksaan</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div> </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

        </div>
        <!-- /.row   -->


            <div class="row">

<?php if ($dataSiswa): ?>
            <div class="card col-12  card-danger collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Daftar Peserta 1  <span class="badge badge-success right"><a href="<?=base_url('/Sma/generatePeserta1/' . $thn);?>" target="_blank"> Print daftar peserta</a></span></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>

                </div>
              </div>
              <div style="background-color:aliceblue;" class="card-body">
              <table id="example1" class="table table-bordered table-hover  table-striped">
                  <thead>
                  <tr>
                          <th>Nomor Urut</th>
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
                    <?php $no = 1;?>
                  <?php foreach ($dt7a as $dt): ?>
                        <tr>
                            <td><?=$no;?></td>
                          <td><?=$dt['nis_siswa_sma'];?></td>
                          <td>
                            <div class="bg-poto-data">
                              <div class="img-pro-data">
                              <img class="img-fluid  rounded-circle rounded-circle" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $dt['img_1'];?>" alt="">
                              </div>
                            </div>
                          </td>
                          <td><?=$dt['nama_lengkap_siswa'];?></td>
                          <td><?=$dt['tmp_lahir_siswa'];?></td>
                          <td>
                            <div class="aksi d-flex">
                              <div class="detail"><a data-bs-toggle="tooltip" data-bs-html="true" title="Detail"  href="<?=base_url();?>/SiswaSma/data/<?=$dt['slug'];?>/<?=$dt['nis_siswa_sma']?>" class="mx-2 btn btn-sm btn-success"> <i class="fas fa-user"></i></a></div>
                              <div class="detail"><a data-bs-toggle="tooltip" data-bs-html="true" title="Edit"  href="<?=base_url();?>/Sma/edit/<?=$dt['slug'];?>/<?=$dt['nis_siswa_sma']?>" class="mx-2 btn btn-sm btn-info"> <i class="fas fa-user-edit"></i></a></div>
                              <div class="print"><a data-bs-toggle="tooltip" data-bs-html="true" title="Print"  href="<?=base_url();?>/SiswaSma/generate/<?=$dt['slug'];?>" target="_blank" class="mx-2 btn btn-sm btn-warning"><i class="fas fa-print"></i></a></div>
                              <div class="hapus"> <form data-bs-toggle="tooltip" data-bs-html="true" title="Delete"  class="" method="post" action="<?=base_url();?>/Sma/delete/<?=$dt['id_siswa_sma'];?>">
<input type="hidden" name="_method" >
<button onclick="return confirm('Apakah Anda yakin ?');" class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                             </form></div>
                            </div>
                          </td>
                          <td><?=$dt['thn_ajaran_1'];?>
                          </td>

                          <td><?=esc($dt['kls_4']);?></td>

                          </tr>
                          <?php $no++;?>
                  <?php endforeach;?>


        </tbody>
            </table>
              </div>
              <!-- /.card-body -->
            </div>
            <?php endif;?>

<?php if ($dataSiswa2): ?>
            <div class="card col-12  card-danger collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Daftar Peserta 2  <span class="badge badge-success right"><a href="<?=base_url('/Sma/generatePeserta2/' . $thn);?>" target="_blank"> Print daftar peserta</a></span></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>

                </div>
              </div>
              <div style="background-color:aliceblue;" class="card-body">
              <table id="example1" class="table table-bordered table-hover  table-striped">
                  <thead>
                  <tr>
                          <th>Nomor Urut</th>
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
                    <?php $no = 1;?>
                  <?php foreach ($dataSiswa2 as $dt): ?>
                        <tr>
                            <td><?=$no;?></td>
                          <td><?=$dt['nis_siswa_sma'];?></td>
                          <td>
                            <div class="bg-poto-data">
                              <div class="img-pro-data">
                              <img class="img-fluid  rounded-circle rounded-circle" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $dt['img_1'];?>" alt="">
                              </div>
                            </div>
                          </td>
                          <td><?=$dt['nama_lengkap_siswa'];?></td>
                          <td><?=$dt['tmp_lahir_siswa'];?></td>
                          <td>
                            <div class="aksi d-flex">
                              <div class="detail"><a data-bs-toggle="tooltip" data-bs-html="true" title="Detail"  href="<?=base_url();?>/SiswaSma/data/<?=$dt['slug'];?>/<?=$dt['nis_siswa_sma']?>" class="mx-2 btn btn-sm btn-success"> <i class="fas fa-user"></i></a></div>
                              <div class="detail"><a data-bs-toggle="tooltip" data-bs-html="true" title="Edit"  href="<?=base_url();?>/Sma/edit/<?=$dt['slug'];?>/<?=$dt['nis_siswa_sma']?>" class="mx-2 btn btn-sm btn-info"> <i class="fas fa-user-edit"></i></a></div>
                              <div class="print"><a data-bs-toggle="tooltip" data-bs-html="true" title="Print"  href="<?=base_url();?>/SiswaSma/generate/<?=$dt['slug'];?>" target="_blank" class="mx-2 btn btn-sm btn-warning"><i class="fas fa-print"></i></a></div>
                              <div class="hapus"> <form data-bs-toggle="tooltip" data-bs-html="true" title="Delete"  class="" method="post" action="<?=base_url();?>/Sma/delete/<?=$dt['id_siswa_sma'];?>">
<input type="hidden" name="_method" >
<button onclick="return confirm('Apakah Anda yakin ?');" class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                             </form></div>
                            </div>
                          </td>

                          <td><?=$dt['thn_ajaran_1'];?>
                          </td>

                          <td><?=esc($dt['kls_4']);?></td>

                          </tr>
                          <?php $no++;?>
                  <?php endforeach;?>


        </tbody>
            </table>
              </div>
              <!-- /.card-body -->
            </div>
            <?php endif;?>

<?php if ($dataSiswa3): ?>
            <div class="card col-12  card-danger collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Daftar Peserta 3  <span class="badge badge-success right"><a href="<?=base_url('/Sma/generatePeserta3/' . $thn);?>" target="_blank"> Print daftar peserta</a></span></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>

                </div>
              </div>
              <div style="background-color:aliceblue;" class="card-body">
              <table id="example1" class="table table-bordered table-hover  table-striped">
                  <thead>
                  <tr>
                          <th>Nomor Urut</th>
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
                    <?php $no = 1;?>
                  <?php foreach ($dataSiswa3 as $dt): ?>
                        <tr>
                            <td><?=$no;?></td>
                          <td><?=$dt['nis_siswa_sma'];?></td>
                          <td>
                            <div class="bg-poto-data">
                              <div class="img-pro-data">
                              <img class="img-fluid  rounded-circle rounded-circle" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $dt['img_1'];?>" alt="">
                              </div>
                            </div>
                          </td>
                          <td><?=$dt['nama_lengkap_siswa'];?></td>
                          <td><?=$dt['tmp_lahir_siswa'];?></td>
                         <td>
                            <div class="aksi d-flex">
                              <div class="detail"><a data-bs-toggle="tooltip" data-bs-html="true" title="Detail"  href="<?=base_url();?>/SiswaSma/data/<?=$dt['slug'];?>/<?=$dt['nis_siswa_sma']?>" class="mx-2 btn btn-sm btn-success"> <i class="fas fa-user"></i></a></div>
                              <div class="detail"><a data-bs-toggle="tooltip" data-bs-html="true" title="Edit"  href="<?=base_url();?>/Sma/edit/<?=$dt['slug'];?>/<?=$dt['nis_siswa_sma']?>" class="mx-2 btn btn-sm btn-info"> <i class="fas fa-user-edit"></i></a></div>
                              <div class="print"><a data-bs-toggle="tooltip" data-bs-html="true" title="Print"  href="<?=base_url();?>/SiswaSma/generate/<?=$dt['slug'];?>" target="_blank" class="mx-2 btn btn-sm btn-warning"><i class="fas fa-print"></i></a></div>
                              <div class="hapus"> <form data-bs-toggle="tooltip" data-bs-html="true" title="Delete"  class="" method="post" action="<?=base_url();?>/Sma/delete/<?=$dt['id_siswa_sma'];?>">
<input type="hidden" name="_method" >
<button onclick="return confirm('Apakah Anda yakin ?');" class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                             </form></div>
                            </div>
                          </td>

                          <td><?=$dt['thn_ajaran_1'];?>
                          </td>

                          <td><?=esc($dt['kls_4']);?></td>

                          </tr>
                          <?php $no++;?>
                  <?php endforeach;?>


        </tbody>
            </table>
              </div>
              <!-- /.card-body -->
            </div>
            <?php endif;?>

<?php if ($dataSiswa4): ?>
            <div class="card col-12  card-danger collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Daftar Peserta 4  <span class="badge badge-success right"><a href="<?=base_url('/Sma/generatePeserta4/' . $thn);?>" target="_blank"> Print daftar peserta</a></span></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>

                </div>
              </div>
              <div style="background-color:aliceblue;" class="card-body">
              <table id="example1" class="table table-bordered table-hover  table-striped">
                  <thead>
                  <tr>
                          <th>Nomor Urut</th>
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
                    <?php $no = 1;?>
                  <?php foreach ($dataSiswa4 as $dt): ?>
                        <tr>
                            <td><?=$no;?></td>
                          <td><?=$dt['nis_siswa_sma'];?></td>
                          <td>
                            <div class="bg-poto-data">
                              <div class="img-pro-data">
                              <img class="img-fluid  rounded-circle rounded-circle" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $dt['img_1'];?>" alt="">
                              </div>
                            </div>
                          </td>
                          <td><?=$dt['nama_lengkap_siswa'];?></td>
                          <td><?=$dt['tmp_lahir_siswa'];?></td>
                         <td>
                            <div class="aksi d-flex">
                              <div class="detail"><a data-bs-toggle="tooltip" data-bs-html="true" title="Detail"  href="<?=base_url();?>/SiswaSma/data/<?=$dt['slug'];?>/<?=$dt['nis_siswa_sma']?>" class="mx-2 btn btn-sm btn-success"> <i class="fas fa-user"></i></a></div>
                              <div class="detail"><a data-bs-toggle="tooltip" data-bs-html="true" title="Edit"  href="<?=base_url();?>/Sma/edit/<?=$dt['slug'];?>/<?=$dt['nis_siswa_sma']?>" class="mx-2 btn btn-sm btn-info"> <i class="fas fa-user-edit"></i></a></div>
                              <div class="print"><a data-bs-toggle="tooltip" data-bs-html="true" title="Print"  href="<?=base_url();?>/SiswaSma/generate/<?=$dt['slug'];?>" target="_blank" class="mx-2 btn btn-sm btn-warning"><i class="fas fa-print"></i></a></div>
                              <div class="hapus"> <form data-bs-toggle="tooltip" data-bs-html="true" title="Delete"  class="" method="post" action="<?=base_url();?>/Sma/delete/<?=$dt['id_siswa_sma'];?>">
<input type="hidden" name="_method" >
<button onclick="return confirm('Apakah Anda yakin ?');" class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                             </form></div>
                            </div>
                          </td>

                          <td><?=$dt['thn_ajaran_1'];?>
                          </td>

                          <td><?=esc($dt['kls_4']);?></td>

                          </tr>
                          <?php $no++;?>
                  <?php endforeach;?>


        </tbody>
            </table>
              </div>
              <!-- /.card-body -->
            </div>
            <?php endif;?>

<?php if ($dataSiswa5): ?>
            <div class="card col-12  card-danger collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Daftar Peserta 5  <span class="badge badge-success right"><a href="<?=base_url('/Sma/generatePeserta5/' . $thn);?>" target="_blank"> Print daftar peserta</a></span></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>

                </div>
              </div>
              <div style="background-color:aliceblue;" class="card-body">
              <table id="example1" class="table table-bordered table-hover  table-striped">
                  <thead>
                  <tr>
                          <th>Nomor Urut</th>
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
                    <?php $no = 1;?>
                  <?php foreach ($dataSiswa5 as $dt): ?>
                        <tr>
                            <td><?=$no;?></td>
                          <td><?=$dt['nis_siswa_sma'];?></td>
                          <td>
                            <div class="bg-poto-data">
                              <div class="img-pro-data">
                              <img class="img-fluid  rounded-circle rounded-circle" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $dt['img_1'];?>" alt="">
                              </div>
                            </div>
                          </td>
                          <td><?=$dt['nama_lengkap_siswa'];?></td>
                          <td><?=$dt['tmp_lahir_siswa'];?></td>
                         <td>
                            <div class="aksi d-flex">
                              <div class="detail"><a data-bs-toggle="tooltip" data-bs-html="true" title="Detail"  href="<?=base_url();?>/SiswaSma/data/<?=$dt['slug'];?>/<?=$dt['nis_siswa_sma']?>" class="mx-2 btn btn-sm btn-success"> <i class="fas fa-user"></i></a></div>
                              <div class="detail"><a data-bs-toggle="tooltip" data-bs-html="true" title="Edit"  href="<?=base_url();?>/Sma/edit/<?=$dt['slug'];?>/<?=$dt['nis_siswa_sma']?>" class="mx-2 btn btn-sm btn-info"> <i class="fas fa-user-edit"></i></a></div>
                              <div class="print"><a data-bs-toggle="tooltip" data-bs-html="true" title="Print"  href="<?=base_url();?>/SiswaSma/generate/<?=$dt['slug'];?>" target="_blank" class="mx-2 btn btn-sm btn-warning"><i class="fas fa-print"></i></a></div>
                              <div class="hapus"> <form data-bs-toggle="tooltip" data-bs-html="true" title="Delete"  class="" method="post" action="<?=base_url();?>/Sma/delete/<?=$dt['id_siswa_sma'];?>">
<input type="hidden" name="_method" >
<button onclick="return confirm('Apakah Anda yakin ?');" class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                             </form></div>
                            </div>
                          </td>

                          <td><?=$dt['thn_ajaran_1'];?>
                          </td>

                          <td><?=esc($dt['kls_4']);?></td>

                          </tr>
                          <?php $no++;?>
                  <?php endforeach;?>


        </tbody>
            </table>
              </div>
              <!-- /.card-body -->
            </div>
            <?php endif;?>

            <?php if ($dataSiswa6): ?>
            <div class="card col-12  card-danger collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Daftar Peserta 6  <span class="badge badge-success right"><a href="<?=base_url('/Sma/generatePeserta6/' . $thn);?>" target="_blank"> Print daftar peserta</a></span></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>

                </div>
              </div>
              <div style="background-color:aliceblue;" class="card-body">
              <table id="example1" class="table table-bordered table-hover  table-striped">
                  <thead>
                  <tr>
                          <th>Nomor Urut</th>
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
                    <?php $no = 1;?>
                  <?php foreach ($dataSiswa6 as $dt): ?>
                        <tr>
                            <td><?=$no;?></td>
                          <td><?=$dt['nis_siswa_sma'];?></td>
                          <td>
                            <div class="bg-poto-data">
                              <div class="img-pro-data">
                              <img class="img-fluid  rounded-circle rounded-circle" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $dt['img_1'];?>" alt="">
                              </div>
                            </div>
                          </td>
                          <td><?=$dt['nama_lengkap_siswa'];?></td>
                          <td><?=$dt['tmp_lahir_siswa'];?></td>
                          <td class=" d-flex"> <a href="<?=base_url();?>/Siswa/data/<?=$dt['slug'];?>" class="btn btn-sm btn-success">Detail</a>
                          <a href="<?=base_url();?>/Smp/edit/<?=$dt['slug'];?>" class="mx-2 btn btn-sm btn-warning">Edit</a>

                           <form class="" method="post" action="<?=base_url();?>/Sma/delete/<?=$dt['id_siswa_sma'];?>">

                            <input type="hidden" name="_method" value="DELETE" >
                            <button onclick="return confirm('Apakah Anda yakin ?');" class="btn btn-sm btn-danger" type="submit">Delete</button>
                             </form></td>

                          <td><?=$dt['thn_ajaran_1'];?>
                          </td>

                          <td><?=esc($dt['kls_4']);?></td>

                          </tr>
                          <?php $no++;?>
                  <?php endforeach;?>


        </tbody>
            </table>
              </div>
              <!-- /.card-body -->
            </div>
<?php endif;?>

<?php if ($dataSiswa7): ?>
            <div class="card col-12  card-danger collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Daftar Peserta 7  <span class="badge badge-success right"><a href="<?=base_url('/Sma/generatePeserta7/' . $thn);?>" target="_blank"> Print daftar peserta</a></span></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>

                </div>
              </div>
              <div style="background-color:aliceblue;" class="card-body">
              <table id="example1" class="table table-bordered table-hover  table-striped">
                  <thead>
                  <tr>
                          <th>Nomor Urut</th>
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
                    <?php $no = 1;?>
                  <?php foreach ($dataSiswa7 as $dt): ?>
                        <tr>
                            <td><?=$no;?></td>
                          <td><?=$dt['nis_siswa_sma'];?></td>
                          <td>
                            <div class="bg-poto-data">
                              <div class="img-pro-data">
                              <img class="img-fluid  rounded-circle rounded-circle" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $dt['img_1'];?>" alt="">
                              </div>
                            </div>
                          </td>
                          <td><?=$dt['nama_lengkap_siswa'];?></td>
                          <td><?=$dt['tmp_lahir_siswa'];?></td>
                         <td>
                            <div class="aksi d-flex">
                              <div class="detail"><a data-bs-toggle="tooltip" data-bs-html="true" title="Detail"  href="<?=base_url();?>/SiswaSma/data/<?=$dt['slug'];?>/<?=$dt['nis_siswa_sma']?>" class="mx-2 btn btn-sm btn-success"> <i class="fas fa-user"></i></a></div>
                              <div class="detail"><a data-bs-toggle="tooltip" data-bs-html="true" title="Edit"  href="<?=base_url();?>/Sma/edit/<?=$dt['slug'];?>/<?=$dt['nis_siswa_sma']?>" class="mx-2 btn btn-sm btn-info"> <i class="fas fa-user-edit"></i></a></div>
                              <div class="print"><a data-bs-toggle="tooltip" data-bs-html="true" title="Print"  href="<?=base_url();?>/SiswaSma/generate/<?=$dt['slug'];?>" target="_blank" class="mx-2 btn btn-sm btn-warning"><i class="fas fa-print"></i></a></div>
                              <div class="hapus"> <form data-bs-toggle="tooltip" data-bs-html="true" title="Delete"  class="" method="post" action="<?=base_url();?>/Sma/delete/<?=$dt['id_siswa_sma'];?>">
<input type="hidden" name="_method" >
<button onclick="return confirm('Apakah Anda yakin ?');" class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                             </form></div>
                            </div>
                          </td>

                          <td><?=$dt['thn_ajaran_1'];?>
                          </td>

                          <td><?=esc($dt['kls_4']);?></td>

                          </tr>
                          <?php $no++;?>
                  <?php endforeach;?>


        </tbody>
            </table>
              </div>
              <!-- /.card-body -->
            </div>
            <?php endif;?>

<?php if ($dataSiswa8): ?>
            <div class="card col-12  card-danger collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Daftar Peserta 8  <span class="badge badge-success right"><a href="<?=base_url('/Sma/generatePeserta8/' . $thn);?>" target="_blank"> Print daftar peserta</a></span></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>

                </div>
              </div>
              <div style="background-color:aliceblue;" class="card-body">
              <table id="example1" class="table table-bordered table-hover  table-striped">
                  <thead>
                  <tr>
                          <th>Nomor Urut</th>
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
                    <?php $no = 1;?>
                  <?php foreach ($dataSiswa8 as $dt): ?>
                        <tr>
                            <td><?=$no;?></td>
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
                          <td class=" d-flex"> <a href="<?=base_url();?>/Siswa/data/<?=$dt['slug'];?>" class="btn btn-sm btn-success">Detail</a>
                          <a href="<?=base_url();?>/Sma/edit/<?=$dt['slug'];?>" class="mx-2 btn btn-sm btn-warning">Edit</a>

                           <form class="" method="post" action="<?=base_url();?>/delete/<?=$dt['id_siswa_sma'];?>">

                            <input type="hidden" name="_method" value="DELETE" >
                            <button onclick="return confirm('Apakah Anda yakin ?');" class="btn btn-sm btn-danger" type="submit">Delete</button>
                             </form></td>

                          <td><?=$dt['thn_ajaran_1'];?>
                          </td>

                          <td><?=esc($dt['kls_4']);?></td>

                          </tr>
                          <?php $no++;?>
                  <?php endforeach;?>


        </tbody>
            </table>
              </div>
              <!-- /.card-body -->
            </div>
<?php endif;?>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?=$this->include('coreTemplates/footer');?>

  <?=$this->endSection();?>