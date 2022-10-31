
        <?=$this->extend('coreTemplates/index');?>

<?=$this->section('page-content');?>



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="  col-sm-12">
                <h3>Detail Profile <?=$siswa7c['nama'];?> In <?=$thn;?></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                <ul class="nav ">
                        <li>
                          <a href="<?=base_url('/tahun');?>"  >
                            Tahun <i class="  ml-2  fa fa-angle-double-right"></i>
                          </a>
                        </li>
                        <li>

                        <?php if ($thn == '2019-2020'): ?>
                          <a href="<?=base_url('/tahun/SMP19_20');?>" >
                          Jenjang SMP
                          <i class=" ml-2 fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                        <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url('/tahun/SMP20_21');?>" >
                          Jenjang SMP
                          <i class=" ml-2 fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>
                        </li>

                        <li>
                        <?php if ($thn == '2019-2020'): ?>
                          <a href="<?=base_url('/SMP/kelas7_19_20');?>" >
                          <?=$create;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                          <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url('/SMP/kelas7_20_21');?>" >
                          <?=$create;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>
                        </li>

                        <li>
                        <?php if ($thn == '2019-2020'): ?>
                          <a href="<?=base_url($linkSMP) . "/data7c19_20";?>" >
                            <?=$database;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                          <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url($linkSMP) . "/data7c20_21";?>" >
                            <?=$database;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>
                        </li>


                      </ul>

                      <hr>

                  <div class="x_content">





                    </div>

<!-- ### -->

<div class="clearfix"></div>
<div class="row">
                    <div class="col-xs-3">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <div class="nav nav-tabs flex-column  bar_tabs mb-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home1" role="tab" aria-controls="v-pills-home" aria-selected="true"> <i class="fa fa-home"></i> Home</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile1" role="tab" aria-controls="v-pills-profile" aria-selected="false"> <i class="fa fa-user"></i> Profile</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages1" role="tab" aria-controls="v-pills-messages" aria-selected="false"> <i class="fa fa-home"></i> Orang tua / wali</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings1" role="tab" aria-controls="v-pills-settings" aria-selected="false"> <i class="fa fa-home"></i> Gallery</a>

                      </div>

                    </div>




                    <div class="col-xs-9">
                      <!-- Tab panes -->

                      <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane  fade active show " id="v-pills-home1" role="tabpanel" aria-labelledby="v-pills-home-tab">


                      <div class=" col-lg-12" style="display: flex; flex-direction: row;">
                       <div class="img">

                        <img  class=" bd-placeholder-img img-fluid  "
                        <?php if ($thn == '2019-2020'): ?>
                         src="<?=base_url('/assets/images/dk19_20/SMP/kls7/7c') . "/" . $siswa7c['img'];?>"
                         <?php endif;?>
                         <?php if ($thn == '2020-2021'): ?>
                         src="<?=base_url('/assets/images/dk20_21/SMP/kls7/7c') . "/" . $siswa7c['img'];?>"<?php endif;?>
                          width="200" height="200" alt="<?=$siswa7c['nama'];?>" >




                         </div>
                       <div class="ml-3 text">
                        <h4> <?=$siswa7c['nama'];?>
                        </h4>
                        <p class=" ml-4 "> Hello world, </p>
                        <div class="  col-sm-16  ">
                      <?php if ($thn == '2020-2021'): ?>
                      <a href="<?=base_url($linkSMP . '/edit') . '/' . $siswa7c['slug'];?>" class="btn btn-sm btn-primary"><i class="fa fa-edit m-right-xs"></i> Edit </a>
                      <?php endif;?>
                      <?php if ($thn == '2019-2020'): ?>
                      <a href="<?=base_url($linkSMP . '/edit7c1920') . '/' . $siswa7c['slug'];?>" class="btn btn-primary"><i class="fa fa-edit m-right-xs"></i> Edit </a>
                      <?php endif;?>
                      <div class=" d-inline col-sm-16 ">
                      <?php if ($thn == '2020-2021'): ?>
                      <a href="<?=base_url($linkSMP . '/words') . '/' . $siswa7c['slug'];?>" class="btn btn-sm btn-success"><i class="fa fa-file-excel m-right-xs"></i> Export </a>
                      <?php endif;?>
                      <?php if ($thn == '2019-2020'): ?>
                      <a href="<?=base_url($linkSMP . 'edit7c1920') . '/' . $siswa7c['slug'];?>" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i> Edit </a>
                      <?php endif;?>
                      </div>
                      </div>

                        </div>

                         </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="v-pills-profile1" aria-labelledby="v-pills-profile-tab">

<!-- start SISWA PROFILE -->

<div class="card shadow col-lg-12 profile_view">


  <h3><i class="fa fa-tag">  </i>

  <?=$siswa7c['nama'];?>

</h3>

  <p>Hello world, I'm
    <strong>  <?=$siswa7c['nama'];?></strong>



</p>


  <ul class=" ml-4 list-unstyled">


    <li><i class="fa fa-calendar-o"></i> Tanggal Lahir :   <?=date('d M Y', strtotime($siswa7c['tgl_lahir']));
?></li>
<li><i class="fa fa-map-marker"></i> Tempat Lahir : <?=$siswa7c['tmp_lahir'];?></li>
    <li>
    <?php if ($siswa7c['gender'] == 'L'): ?>
    <i class="fa fa-male"></i>  Jenis Kelamin : Laki-Laki ( L )
    <?php endif;?> </li>

  <?php if ($siswa7c['gender'] == 'P'): ?>
    <li><i class="fa fa-female"></i>  Jenis Kelamin : Perempuan ( P ) </li>
  <?php endif;?>
  <li><i class="fa fa-thumb-tack"></i> Kewarganegaraan : <?=$siswa7c['negara'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Agama : <?=$siswa7c['agama'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Anak ke : <?=$siswa7c['ank_ke'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Jumlah saudara : Kandung <?=$siswa7c['jml_sdra_kndung'];?> orang, Tiri <?=$siswa7c['jml_sdra_tiri'];?> orang, Angkat <?=$siswa7c['jml_sdra_ankat'];?> </li>

  <li><i class="fa fa-thumb-tack"></i> Anak yatim/piatu/yatim piatu : <?=$siswa7c['status_ortu'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Bahasa sehari-hari : <?=$siswa7c['bhs_daily'];?></li>

  </ul>
<h4><i class="fa fa-tag">  </i> Keterangan tempat tinggal siswa
</h4>
  <ul class="ml-4 list-unstyled">

  <li><i class="fa fa-thumb-tack"></i> Alamat : <?=$siswa7c['alamat'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Selama bersekolah tinggal dengan : <?=$siswa7c['tinggal_dgn'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Jarak dari tempat tinggal ke sekolah : <?=$siswa7c['jrak_kesekolah'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Ke sekolah dengan : <?=$siswa7c['kesekolah_dgn'];?></li>
  </ul>

  <h4><i class="fa fa-tag">  </i> Keterangan jaSMPni & kesehatan siswa
</h4>
   <ul class="ml-4 list-unstyled">

  <li><i class="fa fa-thumb-tack"></i> Berat badan tahun ini : <?=$siswa7c['bb_awal_sekolah'];?> kg. </li>
  <li><i class="fa fa-thumb-tack"></i> Tinggi badan tahun ini : <?=$siswa7c['tnggibdn_awal_sekolah'];?> cm. </li>
  <li><i class="fa fa-thumb-tack"></i> Golongan darah : <?=$siswa7c['gol_drah'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Penyakit berat yang pernah diderita : <?=$siswa7c['pnykit_brat'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Pernah diderita saat kelas : <?=$siswa7c['trjngkit_saat_kls'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Pernah diderita di tahun : <?=$siswa7c['trjngkit_di_thn'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Pernah diderita selama : <?=$siswa7c['trjngkit_selma'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Keterangan : <?=$siswa7c['ketrngan'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Kelainan jaSMPniah / lainnya : <?=$siswa7c['kelainan_lainnya'];?></li>
  </ul>
  <h4><i class="fa fa-tag">  </i> Keterangan pendidikan sebelumnya
</h4>
   <ul class="ml-4 list-unstyled">

  <li><i class="fa fa-thumb-tack"></i> Diterima di sekolah ini sebagai siswa baru tanggal : <?=$siswa7c['sswa_bru_ditgl'];?> </li>
  <li><i class="fa fa-thumb-tack"></i> Asal sekolah : <?=$siswa7c['asl_sklah'];?> </li>
  <li><i class="fa fa-thumb-tack"></i> Alamatnya : <?=$siswa7c['alamat_sklah_asl'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Tanggal & nomor ijazah : <?=$siswa7c['tgl_nmr_ijazal'];?></li>
  <hr>
  <li><i class="fa fa-thumb-tack"></i> Diterima di sekolah ini sebagai siswa pindahan pada tanggal : <?=$siswa7c['sswa_pndhan_ditgl'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Di kelas : <?=$siswa7c['pndh_di_kls'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Dari sekolah : <?=$siswa7c['nmskolah_pndahan'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Alamatnya : <?=$siswa7c['alamat_sklh_pndahn'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Asal tamatan sekolah sebelumnya & no. ijazah : <?=$siswa7c['asl_sklah_before_nmrijazahnya'];?></li>

  <li><i class="fa fa-thumb-tack"></i> Beralamat  : <?=$siswa7c['alamat_aslsekolah_before'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Alasan pindah ke sekolah ini : <?=$siswa7c['alasan_pndah'];?></li>

  </ul>




</div>

</div>
                        <div class="tab-pane col-lg-12 fade" id="v-pills-messages1" role="tabpanel" aria-labelledby="v-pills-messages-tab">

<!-- start SISWA PROFILE -->

<div class="card shadow col-lg-12 ">

<div class="card-text">
<h3><i class="fa fa-tag">  </i>
<?=$siswa7c['nama'];?>
</h3>

<p>Hello world, I'm
  <strong>  <?=$siswa7c['nama'];?></strong>
</p>


<h4><i class="fa fa-tag">  </i> Keterangan Tentang Orang Tua
</h4>
<ul class="ml-4 list-unstyled">

<li><i class="fa fa-thumb-tack"></i> Nama Ayah : <?=$siswa7c['ayah'];?></li>
<li><i class="fa fa-thumb-tack"></i> Tempat, tanggal lahir : <?=$siswa7c['ttl_ayah'];?></li>
<li><i class="fa fa-thumb-tack"></i> Kewarganegaraan : <?=$siswa7c['negara_ayah'];?></li>
<li><i class="fa fa-thumb-tack"></i> Pendidikan tertinggi : <?=$siswa7c['pnddkan_akhir_ayh'];?></li>
<li><i class="fa fa-thumb-tack"></i> Pekerjaan : <?=$siswa7c['job_ayh'];?></li>
<li><i class="fa fa-thumb-tack"></i> Penghasilan /bulan/tahun : <?=$siswa7c['gaji_ayh'];?></li>
<li><i class="fa fa-thumb-tack"></i> Alamat : <?=$siswa7c['almt_ayh'];?></li>
<li><i class="fa fa-thumb-tack"></i> Nomor telepon : <?=$siswa7c['tlp_ayah'];?></li>
<hr>
<li><i class="fa fa-thumb-tack"></i> Nama Ibu : <?=$siswa7c['ibu'];?></li>
<li><i class="fa fa-thumb-tack"></i> Tempat, tanggal lahir : <?=$siswa7c['ttl_ibu'];?></li>
<li><i class="fa fa-thumb-tack"></i> Kewarganegaraan : <?=$siswa7c['negara_ibu'];?></li>
<li><i class="fa fa-thumb-tack"></i> Pendidikan tertinggi : <?=$siswa7c['pnddkan_akhir_ibu'];?></li>
<li><i class="fa fa-thumb-tack"></i> Pekerjaan : <?=$siswa7c['job_ibu'];?></li>
<li><i class="fa fa-thumb-tack"></i> Penghasilan /bulan/tahun : <?=$siswa7c['gaji_ibu'];?></li>
<li><i class="fa fa-thumb-tack"></i> Alamat : <?=$siswa7c['almt_ibu'];?></li>
<li><i class="fa fa-thumb-tack"></i> Nomor telepon : <?=$siswa7c['tlp_ibu'];?></li>
<hr>
<li><i class="fa fa-thumb-tack"></i> Nama Wali : <?=$siswa7c['wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Tempat, tanggal lahir : <?=$siswa7c['ttl_wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Kewarganegaraan : <?=$siswa7c['negara_wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Pendidikan tertinggi : <?=$siswa7c['pnddkn_akhir_wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Pekerjaan : <?=$siswa7c['job_wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Penghasilan /bulan : <?=$siswa7c['gaji_wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Alamat : <?=$siswa7c['almt_wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Nomor telepon : <?=$siswa7c['tlp_wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Hubungan dengan peserta didik : <?=$siswa7c['status_dgn_sswa'];?></li>
</ul>
</div>


</div>

</div>


                        <div class="tab-pane fade" id="v-pills-settings1" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                        <div class="card shadow col-lg-12 profile_view">

                        <h4 class="mt-3"><i class="fa fa-tag">  </i> My Gallery
</h4>


                        <div class="row col-sm-12">


                    <div class="ml-1 col-sm-4">
                        <div class="image">

                          <div class="image   ">
                            <img style="" class="card-img image-profile "  <?php if ($thn == '2019-2020'): ?>
                         src="<?=base_url('/assets/images/dk19_20/SMP/kls7/7c') . "/" . $siswa7c['img'];?>"
                         <?php endif;?>
                         <?php if ($thn == '2020-2021'): ?>
                         src="<?=base_url('/assets/images/dk20_21/SMP/kls7/7c') . "/" . $siswa7c['img'];?>"<?php endif;?> alt="image">

                          </div>
                          <div class="caption">
                     <p>Tahun 2020</p>

                          </div>
                        </div>
                      </div>



                      <div class="ml-1 col-sm-4">
                        <div class="image">

                          <div class="image ">
                            <img style=" "class="card-img image-profile "  <?php if ($thn == '2019-2020'): ?>
                         src="<?=base_url('/assets/images/dk19_20/SMP/kls7/7c') . "/" . $siswa7c['img'];?>"
                         <?php endif;?>
                         <?php if ($thn == '2020-2021'): ?>
                         src="<?=base_url('/assets/images/dk20_21/SMP/kls7/7c') . "/" . $siswa7c['img'];?>"<?php endif;?> alt="image">

                          </div>
                          <div class="caption">
                     <p>Tahun 2020</p>

                          </div>
                        </div>
                      </div>



                        </div>
                        </div>


                      </div>
                    </div>





                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->




        <?=$this->endSection();?>