


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
              <li class="breadcrumb-item "><a href="<?=base_url('Smp/kelas7_20_21');?>">Membuat Data Kelas 7</a></li>
              <li class="breadcrumb-item "><a href="<?=base_url('/SmpVIIA/data7a20_21');?>">Data Kelas 7 A</a></li>

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
          <div class="card col-12 card-primary">
              <div class="card-header">
                <h3 class="card-title">Membuat Data 7 A</h3>
              </div>
              <!-- /.card-header -->
<div class="card-body">
     <form class="" action="<?=base_url($linkSMP);?>/save20_21" method="post" class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                          <input required type="text" name="nis" class="form-control" id="inputName" placeholder="Nomor Induk Sekolah">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <input required type="text"name="nama" class="form-control" id="inputName2" placeholder="Nama Lengkap">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                        <select name="gender" class="form-control">
                          <option>Pilih</option>
                          <option>Laki-laki</option>
                          <option>Perempuan</option>
                        </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">NISN</label>
                        <div class="col-sm-10">
                          <input required type="text"name="nisn" class="form-control" id="inputSkills" placeholder="Nomor Induk Sekolah Nasional">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                          <input type="text"name="tmp_lahir" class="form-control" id="inputName" placeholder="Tempat Lahir">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                          <input type="text"name="tgl_lahir" class="form-control" id="inputName" placeholder="Tanggal Lahir">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">ALamat</label>
                        <div class="col-sm-10">
                          <input type="text"name="alamat" class="form-control" id="inputName" placeholder="Alamat">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Ayah</label>
                        <div class="col-sm-10">
                          <input type="text"name="ayah" class="form-control" id="inputName" placeholder="Nama Ayah">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Ibu</label>
                        <div class="col-sm-10">
                          <input type="text"name="ibu" class="form-control" id="inputName" placeholder="Nama Ibu">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-block btn-danger">Simpan</button>
                        </div>
                      </div>
                    </form>
                    </div>
                    </div>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
