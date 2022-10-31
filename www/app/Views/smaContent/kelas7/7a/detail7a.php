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
            <h1 class="m-0">My Profile</h1>
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
        <div class="col-md-4">
     <!-- Widget: user widget style 1 -->
     <div  class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="bg-profile">
                <img src="<?=base_url() .'/public/assets/images/cover/'. user()->user_cover;?>" alt="">
              </div>

              <div class="my-profile">

                <div class="bunder">
                <div class="img-pro">
                <img src="<?=base_url().'/public/assets/images/dk20_21/SMP/kls7/7a/'. $siswa['img_1'];?>" alt="">
                </div>
                </div>
                <div class="txt-pro">
                <a href="<?=base_url($linkSMP . '/edit7a20_21/') . $siswa['slug'];?>" class="btn mr-3 btn-sm btn-info"><i class="fa fa-edit"></i> Edit</a>
                <a href="" class="btn btn-sm btn-success"><i class="fa fa-file-excel"> </i> Export</a>
                </div>
              </div>

            </div>
            </div>


            <div class="col-md-8">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Orang Tua / Wali</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Galeri</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <h3><i class="fa fa-tag">  </i>

<?=$siswa['nama_lengkap_siswa'];?>

</h3>

<p>Hello world, I'm
  <strong>  <?=$siswa['nama_lengkap_siswa'];?></strong>
</p>
<ul class=" ml-4 list-unstyled">


<li><i class="fa fa-calendar"></i> Tanggal Lahir :   <?=date('d M Y', strtotime($siswa['tgl_lahir_siswa']));
?></li>
<li><i class="fa fa-map-marker"></i> Tempat Lahir : <?=$siswa['tmp_lahir_siswa'];?></li>
<li>
<?php if ($siswa['gender_siswa'] == 'Laki-laki'): ?>
<i class="fa fa-male"></i>  Jenis Kelamin : Laki-Laki ( L )
<?php endif;?> </li>

<?php if ($siswa['gender_siswa'] == 'Perempuan'): ?>
<li><i class="fa fa-female"></i>  Jenis Kelamin : Perempuan ( P ) </li>
<?php endif;?>
<li><i class="fa fa-flag"></i> Kewarganegaraan : <?=$siswa['negara_siswa'];?></li>
<li><i class="fa fa-thumbtack"></i> Agama : <?=$siswa['agama_siswa'];?></li>
<li><i class="fa fa-thumbtack"></i> Anak ke : <?=$siswa['ank_ke'];?></li>
<li><i class="fa fa-thumbtack"></i> Jumlah saudara : Kandung <?=$siswa['jml_sdra_kndung'];?> orang, Tiri <?=$siswa['jml_sdra_tiri'];?> orang, Angkat <?=$siswa['jml_sdra_angkat'];?> </li>

<li><i class="fa fa-thumbtack"></i> Anak yatim/piatu/yatim piatu : <?=$siswa['status_ortu'];?></li>
<li><i class="fa fa-thumbtack"></i> Bahasa sehari-hari : <?=$siswa['bhs_daily'];?></li>

</ul>
<h4><i class="fa fa-tag">  </i> Keterangan tempat tinggal siswa
</h4>
  <ul class="ml-4 list-unstyled">

  <li><i class="fa fa-thumbtack"></i> Alamat : <?=$siswa['alamat_siswa'];?></li>
  <li><i class="fa fa-thumbtack"></i> Selama bersekolah tinggal dengan : <?=$siswa['tinggal_dgn'];?></li>
  <li><i class="fa fa-thumbtack"></i> Jarak dari tempat tinggal ke sekolah : <?=$siswa['jrak_kesekolah'];?></li>
  <li><i class="fa fa-thumbtack"></i> Ke sekolah dengan : <?=$siswa['kesekolah_dgn'];?></li>
  </ul>

  <h4><i class="fa fa-tag">  </i> Keterangan jasmani & kesehatan siswa
</h4>
   <ul class="ml-4 list-unstyled">

  <li><i class="fa fa-thumbtack"></i> Berat badan tahun ini : <?=$siswa['berat_badan_1'];?> kg. </li>
  <li><i class="fa fa-thumbtack"></i> Tinggi badan tahun ini : <?=$siswa['tinggi_badan_1'];?> cm. </li>
  <li><i class="fa fa-thumbtack"></i> Golongan darah : <?=$siswa['gol_darah'];?></li>
  <li><i class="fa fa-thumbtack"></i> Penyakit berat yang pernah diderita : <?=$siswa['pnykit_berat_1'];?></li>
  <li><i class="fa fa-thumbtack"></i> Pernah diderita saat kelas : <?=$siswa['trjngkit_saat_kls_1'];?></li>
  <li><i class="fa fa-thumbtack"></i> Pernah diderita di tahun : <?=$siswa['trjngkit_di_thn_1'];?></li>
  <li><i class="fa fa-thumbtack"></i> Pernah diderita selama : <?=$siswa['trjngkit_selama_1'];?></li>
  <li><i class="fa fa-thumbtack"></i> Keterangan : <?=$siswa['ketrngan_1'];?></li>
  <li><i class="fa fa-thumbtack"></i> Kelainan jasmaniah / lainnya : <?=$siswa['kelainan_lainnya'];?></li>
  </ul>
  <h4><i class="fa fa-tag">  </i> Keterangan pendidikan sebelumnya
</h4>
   <ul class="ml-4 list-unstyled">

  <li><i class="fa fa-thumbtack"></i> Diterima di sekolah ini sebagai siswa baru tanggal : <?=$siswa['sswa_bru_ditgl_1'];?> </li>
  <li><i class="fa fa-thumbtack"></i> Asal sekolah : <?=$siswa['asl_sklah_1'];?> </li>
  <li><i class="fa fa-thumbtack"></i> Alamatnya : <?=$siswa['alamat_sklah_asl_1'];?></li>
  <li><i class="fa fa-thumbtack"></i> Tanggal & nomor ijazah : <?=$siswa['tgl_nmr_ijazah_1'];?></li>
  <hr>
  <li><i class="fa fa-thumbtack"></i> Diterima di sekolah ini sebagai siswa pindahan pada tanggal : <?=$siswa['sswa_pndhan_ditgl_1'];?></li>
  <li><i class="fa fa-thumbtack"></i> Di kelas : <?=$siswa['pndh_di_kls_1'];?></li>
  <li><i class="fa fa-thumbtack"></i> Dari sekolah : <?=$siswa['nmskolah_pndahan_1'];?></li>
  <li><i class="fa fa-thumbtack"></i> Alamatnya : <?=$siswa['alamat_sklh_pndahn_1'];?></li>
  <li><i class="fa fa-thumbtack"></i> Asal tamatan sekolah sebelumnya & no. ijazah : <?=$siswa['asl_sklah_before_nmrijazahnya_1'];?></li>

  <li><i class="fa fa-thumbtack"></i> Beralamat  : <?=$siswa['alamat_aslsekolah_before_1'];?></li>
  <li><i class="fa fa-thumbtack"></i> Alasan pindah ke sekolah ini : <?=$siswa['alasan_pindah_kesini_1'];?></li>

  </ul>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class=" timeline-inverse">
                    <h3><i class="fa fa-tag">  </i>  <?=$siswa['nama_lengkap_siswa'];?> </h3>

<p>Hello world, I'm
  <strong>  <?=$siswa['nama_lengkap_siswa'];?></strong>
</p>

<h4><i class="fa fa-tag">  </i> Keterangan Tentang Orang Tua
</h4>
<ul class="ml-4 list-unstyled">

<li><i class="fa fa-thumbtack"></i> Nama Ayah : <?=$siswa['ayah'];?></li>
<li><i class="fa fa-thumbtack"></i> Tempat, tanggal lahir : <?=$siswa['ttl_ayah'];?></li>
<li><i class="fa fa-thumbtack"></i> Kewarganegaraan : <?=$siswa['negara_ayah'];?></li>
<li><i class="fa fa-thumbtack"></i> Pendidikan tertinggi : <?=$siswa['pnddkan_akhir_ayah'];?></li>
<li><i class="fa fa-thumbtack"></i> Pekerjaan : <?=$siswa['job_ayah'];?></li>
<li><i class="fa fa-thumbtack"></i> Penghasilan /bulan/tahun : <?=$siswa['gaji_ayah'];?></li>
<li><i class="fa fa-thumbtack"></i> Alamat : <?=$siswa['almt_ayah'];?></li>
<li><i class="fa fa-thumbtack"></i> Nomor telepon : <?=$siswa['tlp_ayah'];?></li>
<hr>
<li><i class="fa fa-thumbtack"></i> Nama Ibu : <?=$siswa['ibu'];?></li>
<li><i class="fa fa-thumbtack"></i> Tempat, tanggal lahir : <?=$siswa['ttl_ibu'];?></li>
<li><i class="fa fa-thumbtack"></i> Kewarganegaraan : <?=$siswa['negara_ibu'];?></li>
<li><i class="fa fa-thumbtack"></i> Pendidikan tertinggi : <?=$siswa['pnddkan_akhir_ibu'];?></li>
<li><i class="fa fa-thumbtack"></i> Pekerjaan : <?=$siswa['job_ibu'];?></li>
<li><i class="fa fa-thumbtack"></i> Penghasilan /bulan/tahun : <?=$siswa['gaji_ibu'];?></li>
<li><i class="fa fa-thumbtack"></i> Alamat : <?=$siswa['almt_ibu'];?></li>
<li><i class="fa fa-thumbtack"></i> Nomor telepon : <?=$siswa['tlp_ibu'];?></li>
<hr>
<li><i class="fa fa-thumbtack"></i> Nama Wali : <?=$siswa['wali'];?></li>
<li><i class="fa fa-thumbtack"></i> Tempat, tanggal lahir : <?=$siswa['ttl_wali'];?></li>
<li><i class="fa fa-thumbtack"></i> Kewarganegaraan : <?=$siswa['negara_wali'];?></li>
<li><i class="fa fa-thumbtack"></i> Pendidikan tertinggi : <?=$siswa['pnddkn_akhir_wali'];?></li>
<li><i class="fa fa-thumbtack"></i> Pekerjaan : <?=$siswa['job_wali'];?></li>
<li><i class="fa fa-thumbtack"></i> Penghasilan /bulan : <?=$siswa['gaji_wali'];?></li>
<li><i class="fa fa-thumbtack"></i> Alamat : <?=$siswa['almt_wali'];?></li>
<li><i class="fa fa-thumbtack"></i> Nomor telepon : <?=$siswa['tlp_wali'];?></li>
<li><i class="fa fa-thumbtack"></i> Hubungan dengan peserta didik : <?=$siswa['status_dgn_sswa'];?></li>
</ul>

                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                  <div class="col-12">
                          <div class="row">
                            <div class="col-6">
                              <img class="img-fluid mb-3" src="<?=base_url() .'/public/assets/images/dk20_21/SMP/kls7/7a/'. $siswa['img_1'];?>" alt="Photo">

                            </div>

                          </div>
                          <!-- /.row -->
                        </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          </div>
      </div><!-- /.container-fluid -->



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?= $this->include('coreTemplates/footer'); ?>

  <?=$this->endSection();?>