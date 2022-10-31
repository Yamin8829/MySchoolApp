
        <?=$this->extend('coreTemplates/index');?>

<?=$this->section('page-content');?>



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="  col-sm-12">
                <h3>Detail Profile <?=$siswa7d['nama'];?> In <?=$thn;?></h3>
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
                          <a href="<?=base_url($linkSMP) . "/data7d19_20";?>" >
                            <?=$database;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                          <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url($linkSMP) . "/data7d20_21";?>" >
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
                         src="<?=base_url('/assets/images/dk19_20/SMP/kls7/7d') . "/" . $siswa7d['img'];?>"
                         <?php endif;?>
                         <?php if ($thn == '2020-2021'): ?>
                         src="<?=base_url('/assets/images/dk20_21/SMP/kls7/7d') . "/" . $siswa7d['img'];?>"<?php endif;?>
                          width="200" height="200" alt="<?=$siswa7d['nama'];?>" >




                         </div>
                       <div class="ml-3 text">
                        <h4> <?=$siswa7d['nama'];?>
                        </h4>
                        <p class=" ml-4 "> Hello world, </p>
                        <div class="  col-sm-16  ">
                      <?php if ($thn == '2020-2021'): ?>
                      <a href="<?=base_url($linkSMP . '/edit') . '/' . $siswa7d['slug'];?>" class="btn btn-sm btn-primary"><i class="fa fa-edit m-right-xs"></i> Edit </a>
                      <?php endif;?>
                      <?php if ($thn == '2019-2020'): ?>
                      <a href="<?=base_url($linkSMP . '/edit7d1920') . '/' . $siswa7d['slug'];?>" class="btn btn-primary"><i class="fa fa-edit m-right-xs"></i> Edit </a>
                      <?php endif;?>
                      <div class=" d-inline col-sm-16 ">
                      <?php if ($thn == '2020-2021'): ?>
                      <a href="<?=base_url($linkSMP . '/words') . '/' . $siswa7d['slug'];?>" class="btn btn-sm btn-success"><i class="fa fa-file-excel m-right-xs"></i> Export </a>
                      <?php endif;?>
                      <?php if ($thn == '2019-2020'): ?>
                      <a href="<?=base_url($linkSMP . 'edit7d1920') . '/' . $siswa7d['slug'];?>" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i> Edit </a>
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

  <?=$siswa7d['nama'];?>

</h3>

  <p>Hello world, I'm
    <strong>  <?=$siswa7d['nama'];?></strong>



</p>


  <ul class=" ml-4 list-unstyled">


    <li><i class="fa fa-calendar-o"></i> Tanggal Lahir :   <?=date('d M Y', strtotime($siswa7d['tgl_lahir']));
?></li>
<li><i class="fa fa-map-marker"></i> Tempat Lahir : <?=$siswa7d['tmp_lahir'];?></li>
    <li>
    <?php if ($siswa7d['gender'] == 'L'): ?>
    <i class="fa fa-male"></i>  Jenis Kelamin : Laki-Laki ( L )
    <?php endif;?> </li>

  <?php if ($siswa7d['gender'] == 'P'): ?>
    <li><i class="fa fa-female"></i>  Jenis Kelamin : Perempuan ( P ) </li>
  <?php endif;?>
  <li><i class="fa fa-thumb-tack"></i> Kewarganegaraan : <?=$siswa7d['negara'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Agama : <?=$siswa7d['agama'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Anak ke : <?=$siswa7d['ank_ke'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Jumlah saudara : Kandung <?=$siswa7d['jml_sdra_kndung'];?> orang, Tiri <?=$siswa7d['jml_sdra_tiri'];?> orang, Angkat <?=$siswa7d['jml_sdra_ankat'];?> </li>

  <li><i class="fa fa-thumb-tack"></i> Anak yatim/piatu/yatim piatu : <?=$siswa7d['status_ortu'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Bahasa sehari-hari : <?=$siswa7d['bhs_daily'];?></li>

  </ul>
<h4><i class="fa fa-tag">  </i> Keterangan tempat tinggal siswa
</h4>
  <ul class="ml-4 list-unstyled">

  <li><i class="fa fa-thumb-tack"></i> Alamat : <?=$siswa7d['alamat'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Selama bersekolah tinggal dengan : <?=$siswa7d['tinggal_dgn'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Jarak dari tempat tinggal ke sekolah : <?=$siswa7d['jrak_kesekolah'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Ke sekolah dengan : <?=$siswa7d['kesekolah_dgn'];?></li>
  </ul>

  <h4><i class="fa fa-tag">  </i> Keterangan jaSMPni & kesehatan siswa
</h4>
   <ul class="ml-4 list-unstyled">

  <li><i class="fa fa-thumb-tack"></i> Berat badan tahun ini : <?=$siswa7d['bb_awal_sekolah'];?> kg. </li>
  <li><i class="fa fa-thumb-tack"></i> Tinggi badan tahun ini : <?=$siswa7d['tnggibdn_awal_sekolah'];?> cm. </li>
  <li><i class="fa fa-thumb-tack"></i> Golongan darah : <?=$siswa7d['gol_drah'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Penyakit berat yang pernah diderita : <?=$siswa7d['pnykit_brat'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Pernah diderita saat kelas : <?=$siswa7d['trjngkit_saat_kls'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Pernah diderita di tahun : <?=$siswa7d['trjngkit_di_thn'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Pernah diderita selama : <?=$siswa7d['trjngkit_selma'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Keterangan : <?=$siswa7d['ketrngan'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Kelainan jaSMPniah / lainnya : <?=$siswa7d['kelainan_lainnya'];?></li>
  </ul>
  <h4><i class="fa fa-tag">  </i> Keterangan pendidikan sebelumnya
</h4>
   <ul class="ml-4 list-unstyled">

  <li><i class="fa fa-thumb-tack"></i> Diterima di sekolah ini sebagai siswa baru tanggal : <?=$siswa7d['sswa_bru_ditgl'];?> </li>
  <li><i class="fa fa-thumb-tack"></i> Asal sekolah : <?=$siswa7d['asl_sklah'];?> </li>
  <li><i class="fa fa-thumb-tack"></i> Alamatnya : <?=$siswa7d['alamat_sklah_asl'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Tanggal & nomor ijazah : <?=$siswa7d['tgl_nmr_ijazal'];?></li>
  <hr>
  <li><i class="fa fa-thumb-tack"></i> Diterima di sekolah ini sebagai siswa pindahan pada tanggal : <?=$siswa7d['sswa_pndhan_ditgl'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Di kelas : <?=$siswa7d['pndh_di_kls'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Dari sekolah : <?=$siswa7d['nmskolah_pndahan'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Alamatnya : <?=$siswa7d['alamat_sklh_pndahn'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Asal tamatan sekolah sebelumnya & no. ijazah : <?=$siswa7d['asl_sklah_before_nmrijazahnya'];?></li>

  <li><i class="fa fa-thumb-tack"></i> Beralamat  : <?=$siswa7d['alamat_aslsekolah_before'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Alasan pindah ke sekolah ini : <?=$siswa7d['alasan_pndah'];?></li>

  </ul>




</div>

</div>
                        <div class="tab-pane col-lg-12 fade" id="v-pills-messages1" role="tabpanel" aria-labelledby="v-pills-messages-tab">

<!-- start SISWA PROFILE -->

<div class="card shadow col-lg-12 ">

<div class="card-text">
<h3><i class="fa fa-tag">  </i>
<?=$siswa7d['nama'];?>
</h3>

<p>Hello world, I'm
  <strong>  <?=$siswa7d['nama'];?></strong>
</p>


<h4><i class="fa fa-tag">  </i> Keterangan Tentang Orang Tua
</h4>
<ul class="ml-4 list-unstyled">

<li><i class="fa fa-thumb-tack"></i> Nama Ayah : <?=$siswa7d['ayah'];?></li>
<li><i class="fa fa-thumb-tack"></i> Tempat, tanggal lahir : <?=$siswa7d['ttl_ayah'];?></li>
<li><i class="fa fa-thumb-tack"></i> Kewarganegaraan : <?=$siswa7d['negara_ayah'];?></li>
<li><i class="fa fa-thumb-tack"></i> Pendidikan tertinggi : <?=$siswa7d['pnddkan_akhir_ayh'];?></li>
<li><i class="fa fa-thumb-tack"></i> Pekerjaan : <?=$siswa7d['job_ayh'];?></li>
<li><i class="fa fa-thumb-tack"></i> Penghasilan /bulan/tahun : <?=$siswa7d['gaji_ayh'];?></li>
<li><i class="fa fa-thumb-tack"></i> Alamat : <?=$siswa7d['almt_ayh'];?></li>
<li><i class="fa fa-thumb-tack"></i> Nomor telepon : <?=$siswa7d['tlp_ayah'];?></li>
<hr>
<li><i class="fa fa-thumb-tack"></i> Nama Ibu : <?=$siswa7d['ibu'];?></li>
<li><i class="fa fa-thumb-tack"></i> Tempat, tanggal lahir : <?=$siswa7d['ttl_ibu'];?></li>
<li><i class="fa fa-thumb-tack"></i> Kewarganegaraan : <?=$siswa7d['negara_ibu'];?></li>
<li><i class="fa fa-thumb-tack"></i> Pendidikan tertinggi : <?=$siswa7d['pnddkan_akhir_ibu'];?></li>
<li><i class="fa fa-thumb-tack"></i> Pekerjaan : <?=$siswa7d['job_ibu'];?></li>
<li><i class="fa fa-thumb-tack"></i> Penghasilan /bulan/tahun : <?=$siswa7d['gaji_ibu'];?></li>
<li><i class="fa fa-thumb-tack"></i> Alamat : <?=$siswa7d['almt_ibu'];?></li>
<li><i class="fa fa-thumb-tack"></i> Nomor telepon : <?=$siswa7d['tlp_ibu'];?></li>
<hr>
<li><i class="fa fa-thumb-tack"></i> Nama Wali : <?=$siswa7d['wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Tempat, tanggal lahir : <?=$siswa7d['ttl_wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Kewarganegaraan : <?=$siswa7d['negara_wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Pendidikan tertinggi : <?=$siswa7d['pnddkn_akhir_wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Pekerjaan : <?=$siswa7d['job_wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Penghasilan /bulan : <?=$siswa7d['gaji_wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Alamat : <?=$siswa7d['almt_wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Nomor telepon : <?=$siswa7d['tlp_wali'];?></li>
<li><i class="fa fa-thumb-tack"></i> Hubungan dengan peserta didik : <?=$siswa7d['status_dgn_sswa'];?></li>
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
                         src="<?=base_url('/assets/images/dk19_20/SMP/kls7/7d') . "/" . $siswa7d['img'];?>"
                         <?php endif;?>
                         <?php if ($thn == '2020-2021'): ?>
                         src="<?=base_url('/assets/images/dk20_21/SMP/kls7/7d') . "/" . $siswa7d['img'];?>"<?php endif;?> alt="image">

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
                         src="<?=base_url('/assets/images/dk19_20/SMP/kls7/7d') . "/" . $siswa7d['img'];?>"
                         <?php endif;?>
                         <?php if ($thn == '2020-2021'): ?>
                         src="<?=base_url('/assets/images/dk20_21/SMP/kls7/7d') . "/" . $siswa7d['img'];?>"<?php endif;?> alt="image">

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