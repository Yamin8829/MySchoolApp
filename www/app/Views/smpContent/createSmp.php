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

        <?php if (session()->getTempdata('pesan')): ?>
          <?=session()->getTempdata('pesan');?>
          <?php endif;?>

          <div class="col-sm-6">
            <h1 class="m-0"><?=$title;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=base_url('/Smp/indukSmp');?>">Buku Induk</a></li>
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
      <form action="<?=base_url() . '/Smp/save';?>" method="post">
						<?=csrf_field()?>

            <div class="my-input-group ">

          <input type="text" name="nis_siswa_smp" class="form-control <?php if (session('pesan')): ?>is-invalid<?php endif?>" value=""  required>
            <span  class="bar"></span>
            <label>Nomor Induk</label>
        </div>
        <div class="my-input-group ">

          <input type="text" name="nama_lengkap_siswa" class="form-control <?php if (session('errors.pesan')): ?>is-invalid<?php endif?>" value="<?=old('nama_lengkap_siswa');?>"  required>
            <span  class="bar"></span>
            <label>Nama Lengkap Siswa</label>
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>
        <div class="my-input-group ">

            <select name="gender_siswa" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" required class="form-control">
                          <option >Laki-laki</option>
                          <option >Perempuan </option>
                        </select>
            <span  class="bar"></span>
            <label>Jenis Kelamin</label>
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>

</div>

<div class="col-4">


            <div class="my-input-group ">

          <input type="text" name="nisn" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=old('nisn');?>"required>
            <span  class="bar"></span>
            <label>NISN</label>
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>
        <div class="my-input-group ">

          <input type="text" name="tmp_lahir_siswa" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=old('tmp_lahir_siswa');?>"  required>
            <span  class="bar"></span>
            <label>Tempat Lahir</label>
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>
        <div  class="d-flex my-input-group date" id="reservationdate" data-target-input="nearest">
                        <input value="<?=old('tgl_lahir_siswa');?>" required name="tgl_lahir_siswa" type="text" class="col-11 form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
  <span  class="bar"></span>

  <label>Tanggal Lahir</label>
<div class="invalid-feedback">
      <?=session('errors.login')?>
    </div>
</div>

</div>


<div class="col-4">


            <div class="my-input-group ">

          <input type="text" name="alamat_siswa" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=old('alamat_siswa');?>"  required>
            <span  class="bar"></span>
            <label>Alamat</label>
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>
        <div class="my-input-group ">

          <input type="text" name="ayah" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=old('ayah');?>"  required>
            <span  class="bar"></span>
            <label>Nama Ayah</label>
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>
        <div class="my-input-group ">

          <input type="text" name="ibu" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=old('ibu');?>"  required>
            <span  class="bar"></span>
            <label>Nama Ibu</label>
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