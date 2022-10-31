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
              <li class="breadcrumb-item"><a href="<?=base_url('/tahun');?>">Tahun</a></li>
              <li class="breadcrumb-item "><a href="<?=base_url('tahun/smp20_21');?>">Jenjang SMP</a></li>
              <li class="breadcrumb-item "><a href="<?=base_url('Smp/inputSiswa');?>">Membuat Data Kelas 7</a></li>
            
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
  <div class="col-12">
          <!-- general form elements -->
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Database Class 7 A</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <!-- <div class="row float-right" style="position:absolute;top:0; right:2.5%; z-index:3;">
              <form class="" method="post" action="<?=base_url($linkSMP);?>/export">
                  <button onclick="return confirm('Apakah Anda yakin ?');"  type="submit" class="btn btn-success"><i class="fa fa-file-excel"></i> Export</button>
              </form>
              <form class="" method="post" action="<?=base_url($linkSMP);?>/resetdb">
                  <button onclick="return confirm('Apakah Anda yakin ?');"  type="submit" class="btn btn-warning"><i class="fa fa-exclamation-triangle"></i> Reset Data</button>
              </form>
                </div> -->

                <table id="example1" class="table table-bordered table-hover  table-striped">
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

                          <td><?=$dt['nis_siswa_6thn'];?></td>
                          <td>
                            <div class="bg-poto-data">
                              <div class="img-pro-data">
                              <img class="img-fluid  rounded-circle rounded-circle" src="<?=base_url().'/public/assets/images/dk20_21/SMP/kls7/7a/'. $dt['img_1'];?>" alt="">
                              </div>
                            </div>
                          </td>
                          <td><?=$dt['nama_lengkap_siswa'];?></td>
                          <td><?=$dt['tmp_lahir_siswa'];?></td>
                          <td class=" d-flex"> <a href="<?=base_url($linkSMP);?>/dataKelas7/data7a20_21/<?=$dt['slug'];?>" class="btn btn-sm btn-success">Detail</a>
                          <a href="<?=base_url($linkSMP . '/edit7a20_21/') . $dt['slug'];?>" class="mx-2 btn btn-sm btn-warning">Edit</a>

                           <form class="" method="post" action="<?=base_url($linkSMP);?>/delete/<?=$dt['id_siswa_6thn'];?>">

                            <input type="hidden" name="_method" value="DELETE" >
                            <button onclick="return confirm('Apakah Anda yakin ?');" class="btn btn-sm btn-danger" type="submit">Delete</button>
                             </form></td>

                          <td><?=date('F d, Y l. h:i A', (int) $dt['updated_at']);?></td>

                          </tr>
                  <?php endforeach;?>

                  </tbody>

                </table>
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
  <?= $this->include('coreTemplates/footer'); ?>

  <?=$this->endSection();?>