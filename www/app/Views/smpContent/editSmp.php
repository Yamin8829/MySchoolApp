<?=$this->extend('coreTemplates/header');?>

<?=$this->section('page-content');?>
<?=$this->include('coreTemplates/styleForm');?>
<?=$this->include('coreTemplates/sidebar')?>
<?=$this->include('coreTemplates/topbar');?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?=$title;?> <?=$siswa['nama_lengkap_siswa'];?> - <?=$siswa['nis_siswa_smp'];?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=base_url('/Smp/input');?>">Membuat Data</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('/Smp');?>">SMP</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

<div class="card">

    <div class="my-card card-body">

    <!-- show flash message -->


<div class="col-12 d-flex">
  <div class="col-4">
      <form action="<?=base_url() . '/Smp/update/' . $siswa['id_siswa_smp'];?>" method="post">
						<?=csrf_field()?>

            <div class="my-input-group ">

          <input type="text" name="thn_ajaran_1" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=$siswa['thn_ajaran_1'];?>"  required>
            <span  class="bar"></span>
            <label>Tahun Ajaran Pertama</label>
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>
        <div class="my-input-group ">

          <input type="text" name="thn_ajaran_2" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=$siswa['thn_ajaran_2'];?>"  required>
            <span  class="bar"></span>
            <label>Tahun Ajaran Kedua</label>
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>
        <div class="my-input-group ">

<input type="text" name="thn_ajaran_3" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=$siswa['thn_ajaran_3'];?>"  required>
  <span  class="bar"></span>
  <label>Tahun Ajaran Ketiga </label>
<div class="invalid-feedback">
      <?=session('errors.login')?>
    </div>
</div>

</div>

<div class="col-4">


            <div class="my-input-group ">

          <input type="text" name="kls_1" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=$siswa['kls_1'];?>"  required>
            <span  class="bar"></span>
            <label>* TA Pertama Di Kelas</label>
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>
        <div class="my-input-group ">

          <input type="text" name="kls_2" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=$siswa['kls_2'];?>"  required>
            <span  class="bar"></span>
            <label>* TA Kedua Di Kelas</label>
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>
        <div class="my-input-group ">

<input type="text" name="kls_3" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=$siswa['kls_3'];?>"  required>
  <span  class="bar"></span>
  <label>* TA Ketiga Di Kelas </label>
<div class="invalid-feedback">
      <?=session('errors.login')?>
    </div>
</div>

</div>


<div class="col-4">


            <div class="my-input-group ">

          <input type="text" name="thn_ajaran_4" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=$siswa['thn_ajaran_4'];?>"  required>
            <span  class="bar"></span>
            <label>* Tahun Ajaran Saat Ini</label>
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>
        <div class="my-input-group ">

          <input type="text" name="kls_4" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=$siswa['kls_4'];?>"  required>
            <span  class="bar"></span>
            <label>* Kelas Saat Ini</label>
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>

        <div class="my-input-group ">

            <select name="status" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" required class="form-control">
                          <option <?php if ($siswa['status'] == 'Aktif'): ?> selected <?php endif;?> >Aktif</option>
                          <option <?php if ($siswa['status'] == 'Lulus'): ?> selected <?php endif;?> >Lulus</option>
                          <option <?php if ($siswa['status'] == 'Pindah'): ?> selected <?php endif;?> >Pindah</option>
                          <option <?php if ($siswa['status'] == 'Meninggal'): ?> selected <?php endif;?> >Meninggal</option>
                          <option <?php if ($siswa['status'] == 'Drop Out'): ?> selected <?php endif;?> >(Dikeluarkan) Drop Out</option>
                          <option <?php if ($siswa['status'] == 'Mengundurkan Diri'): ?> selected <?php endif;?> >Mengundurkan Diri</option>
                            <option  <?php if ($siswa['status'] == '-'): ?> selected <?php endif;?> > - </option>
                        </select>
            <span  class="bar"></span>
            <label>* Status Saat Ini</label>
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>

</div>

</div>


        <div class="row">
          <!-- /.col -->
          <div class="mb-3 col-lg">
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


    </div>
    <!-- /.card-body -->
  </div>

  </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?=$this->include('coreTemplates/footer');?>

  <?=$this->endSection();?>