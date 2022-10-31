
        <?=$this->extend('coreTemplates/index');?>

<?=$this->section('page-content');?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            <div class="  col-sm-9">
                <h3>Edit  <?=$siswa7e['nama'];?> In <?=$thn;?> </h3>

              </div>

            </div>


            <div class="clearfix"></div>
            <div class="x_content">
            <div class="row">

            <div class="col-md-9 col-sm-9 ">
                      <?php if (session()->getFlashdata('pesanNis')): ?>
          <div class="alert alert-danger">
          <?=session()->getFlashdata('pesanNis');?></div>
          <?php endif;?>
                      </div>
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
                          <a href="<?=base_url($linkSMP) . "/data7e19_20";?>" >
                            <?=$database;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                          <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url($linkSMP) . "/data7e20_21";?>" >
                            <?=$database;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>
                        </li>


                      </ul>
                      <hr>


                      <div class="clearfix"></div>

                      <div class="x_content">

                      <?php if ($thn == '2019-2020'): ?>
                      <form class="" action="<?=base_url($linkSMP);?>/update7e19_20/<?=$siswa7e['id'];?>" method="post" enctype="multipart/form-data" >
                      <?php endif;?>

                      <?php if ($thn == '2020-2021'): ?>
                      <form class="" action="<?=base_url($linkSMP);?>/update20_21/<?=$siswa7e['id'];?>" method="post" enctype="multipart/form-data" >
                      <?php endif;?>
      <div class="modal-header">
        <h4 class="modal-title" ><i class="fa fa-pen"></i> <?=$title;?> </h4>
      <?=csrf_field();?>

      </div>
      <input type="hidden" name="slug" value="<?=$siswa7e['slug'];?>">
      <input type="hidden" name="imgLama" value="<?=$siswa7e['img'];?>">
      <div class="modal-body">
      <div class="field row item form-group">

                                            <label class="col-form-label col-md-3 col-sm-3  ">Nomor Induk</label>
         <div class="col-sm-9">

         <input readonly class="form-control <?=($validation->hasError('nis')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" value="<?=$siswa7e['nis'];?>" name="nis" placeholder=""  /><div class="invalid-feedback"> <?=$validation->getError('nis');?></div>
                                            </div>
                                        </div>
         <div class="field row item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  ">Nama Lengkap</label>
         <div class="col-sm-9">

          <input class="form-control <?=($validation->hasError('nama')) ? 'is-invalid' : '';?>  " data-validate-length-range="6" data-validate-words="2" name="nama" value="<?=(old('nama')) ? old('nama') : $siswa7e['nama'];?>" placeholder=""   />   <div class="invalid-feedback"> <?=$validation->getError('nama');?></div></div>

                                        </div>

                                        <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Jenis Kelamin</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('gender')) ? 'is-invalid' : '';?> " data-validate-length-range="6" data-validate-words="2" name="gender" value="<?=(old('gender')) ? old('gender') : $siswa7e['gender'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('gender');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">NISN</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('nisn')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="nisn" value="<?=(old('nisn')) ? old('nisn') : $siswa7e['nisn'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('nisn');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Tempat Lahir</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('tmp_lahir')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="tmp_lahir" value="<?=(old('tmp_lahir')) ? old('tmp_lahir') : $siswa7e['tmp_lahir'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('tmp_lahir');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Tanggal Lahir</label>
                 <div class="col-sm-9">
                 <input class="form-control <?=($validation->hasError('tgl_lahir')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="tgl_lahir" value="<?=(old('tgl_lahir')) ? old('tgl_lahir') : date('d-m-Y', strtotime($siswa7e['tgl_lahir']));?>"  placeholder=""  /><div class="invalid-feedback"> <?=$validation->getError('tgl_lahir');?></div>
                   </div>
                    </div>

                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Kewarganegaraan</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('negara')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="negara" value="<?=(old('negara')) ? old('negara') : $siswa7e['negara'];?>" placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('negara');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Agama</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('agama')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="agama" value="<?=(old('agama')) ? old('agama') : $siswa7e['agama'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('agama');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Anak ke</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('ank_ke')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="ank_ke" value="<?=(old('ank_ke')) ? old('ank_ke') : $siswa7e['ank_ke'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('ank_ke');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Jumlah saudara Kandung</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('jml_sdra_kndung')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="jml_sdra_kndung" value="<?=(old('jml_sdra_kndung')) ? old('jml_sdra_kndung') : $siswa7e['jml_sdra_kndung'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('jml_sdra_kndung');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Jumlah saudara Tiri</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('jml_sdra_tiri')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="jml_sdra_tiri" value="<?=(old('jml_sdra_tiri')) ? old('jml_sdra_tiri') : $siswa7e['jml_sdra_tiri'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('jml_sdra_tiri');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Jumlah saudara Angkat</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('jml_sdra_ankat')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="jml_sdra_ankat" value="<?=(old('jml_sdra_ankat')) ? old('jml_sdra_ankat') : $siswa7e['jml_sdra_ankat'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('jml_sdra_ankat');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Anak yatim/piatu/yatim piatu</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('status_ortu')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="status_ortu" value="<?=(old('status_ortu')) ? old('status_ortu') : $siswa7e['status_ortu'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('status_ortu');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Bahasa sehari-hari</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('bhs_daily')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="bhs_daily" value="<?=(old('bhs_daily')) ? old('bhs_daily') : $siswa7e['bhs_daily'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('bhs_daily');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Alamat</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('alamat')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="alamat" value="<?=(old('alamat')) ? old('alamat') : $siswa7e['alamat'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('alamat');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Selama bersekolah tinggal dengan</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('tinggal_dgn')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="tinggal_dgn" value="<?=(old('tinggal_dgn')) ? old('tinggal_dgn') : $siswa7e['tinggal_dgn'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('tinggal_dgn');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Jarak dari tempat tinggal ke sekolah</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('jrak_kesekolah')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="jrak_kesekolah" value="<?=(old('jrak_kesekolah')) ? old('jrak_kesekolah') : $siswa7e['jrak_kesekolah'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('jrak_kesekolah');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Ke sekolah dengan</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('kesekolah_dgn')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="kesekolah_dgn" value="<?=(old('kesekolah_dgn')) ? old('kesekolah_dgn') : $siswa7e['kesekolah_dgn'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('kesekolah_dgn');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Berat badan pada waktu diterima</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('bb_awal_sekolah')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="bb_awal_sekolah" value="<?=(old('bb_awal_sekolah')) ? old('bb_awal_sekolah') : $siswa7e['bb_awal_sekolah'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('bb_awal_sekolah');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Pada waktu meninggalkan sekolah</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('bb_akhir_skolah')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="bb_akhir_skolah" value="<?=(old('bb_akhir_skolah')) ? old('bb_akhir_skolah') : $siswa7e['bb_akhir_skolah'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('bb_akhir_skolah');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Tinggi badan pada waktu diterima</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('tnggibdn_awal_sekolah')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="tnggibdn_awal_sekolah" value="<?=(old('tnggibdn_awal_sekolah')) ? old('tnggibdn_awal_sekolah') : $siswa7e['tnggibdn_awal_sekolah'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('tnggibdn_awal_sekolah');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Pada waktu meninggalkan sekolah</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('tnggibdn_akhir_sk0lah')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="tnggibdn_akhir_sk0lah" value="<?=(old('tnggibdn_akhir_sk0lah')) ? old('tnggibdn_akhir_sk0lah') : $siswa7e['tnggibdn_akhir_sk0lah'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('tnggibdn_akhir_sk0lah');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Golongan darah</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('gol_drah')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="gol_drah" value="<?=(old('gol_drah')) ? old('gol_drah') : $siswa7e['gol_drah'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('gol_drah');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Penyakit berat yang pernah diderita</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('pnykit_brat')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="pnykit_brat" value="<?=(old('pnykit_brat')) ? old('pnykit_brat') : $siswa7e['pnykit_brat'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('pnykit_brat');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Pernah diderita saat kelas</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('trjngkit_saat_kls')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="trjngkit_saat_kls" value="<?=(old('trjngkit_saat_kls')) ? old('trjngkit_saat_kls') : $siswa7e['trjngkit_saat_kls'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('trjngkit_saat_kls');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Pernah diderita di tahun</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('trjngkit_di_thn')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="trjngkit_di_thn" value="<?=(old('trjngkit_di_thn')) ? old('trjngkit_di_thn') : $siswa7e['trjngkit_di_thn'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('trjngkit_di_thn');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Pernah diderita selama</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('trjngkit_selma')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="trjngkit_selma" value="<?=(old('trjngkit_selma')) ? old('trjngkit_selma') : $siswa7e['trjngkit_selma'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('trjngkit_selma');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Keterangan</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('ketrngan')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="ketrngan" value="<?=(old('ketrngan')) ? old('ketrngan') : $siswa7e['ketrngan'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('ketrngan');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Kelainan jaSMPniah / lainnya</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('kelainan_lainnya')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="kelainan_lainnya" value="<?=(old('kelainan_lainnya')) ? old('kelainan_lainnya') : $siswa7e['kelainan_lainnya'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('kelainan_lainnya');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Diterima di sekolah ini sebagai siswa baru tanggal</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('sswa_bru_ditgl')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="sswa_bru_ditgl" value="<?=(old('sswa_bru_ditgl')) ? old('sswa_bru_ditgl') : $siswa7e['sswa_bru_ditgl'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('sswa_bru_ditgl');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Asal sekolah</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('asl_sklah')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="asl_sklah" value="<?=(old('asl_sklah')) ? old('asl_sklah') : $siswa7e['asl_sklah'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('asl_sklah');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Alamatnya</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('alamat_sklah_asl')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="alamat_sklah_asl" value="<?=(old('alamat_sklah_asl')) ? old('alamat_sklah_asl') : $siswa7e['alamat_sklah_asl'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('alamat_sklah_asl');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Tanggal & nomor ijazah</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('tgl_nmr_ijazal')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="tgl_nmr_ijazal" value="<?=(old('tgl_nmr_ijazal')) ? old('tgl_nmr_ijazal') : $siswa7e['tgl_nmr_ijazal'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('tgl_nmr_ijazal');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Diterima di sekolah ini sebagai siswa pindahan pada tanggal</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('sswa_pndhan_ditgl')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="sswa_pndhan_ditgl" value="<?=(old('sswa_pndhan_ditgl')) ? old('sswa_pndhan_ditgl') : $siswa7e['sswa_pndhan_ditgl'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('sswa_pndhan_ditgl');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Di kelas</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('pndh_di_kls')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="pndh_di_kls" value="<?=(old('pndh_di_kls')) ? old('pndh_di_kls') : $siswa7e['pndh_di_kls'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('pndh_di_kls');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Dari sekolah</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('nmskolah_pndahan')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="nmskolah_pndahan" value="<?=(old('nmskolah_pndahan')) ? old('nmskolah_pndahan') : $siswa7e['nmskolah_pndahan'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('nmskolah_pndahan');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Alamatnya</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('alamat_sklh_pndahn')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="alamat_sklh_pndahn" value="<?=(old('alamat_sklh_pndahn')) ? old('alamat_sklh_pndahn') : $siswa7e['alamat_sklh_pndahn'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('alamat_sklh_pndahn');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Asal tamatan sekolah sebelumnya & no. ijazah</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('asl_sklah_before_nmrijazahnya')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="asl_sklah_before_nmrijazahnya" value="<?=(old('asl_sklah_before_nmrijazahnya')) ? old('asl_sklah_before_nmrijazahnya') : $siswa7e['asl_sklah_before_nmrijazahnya'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('asl_sklah_before_nmrijazahnya');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Beralamat</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('alamat_aslsekolah_before')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="alamat_aslsekolah_before" value="<?=(old('alamat_aslsekolah_before')) ? old('alamat_aslsekolah_before') : $siswa7e['alamat_aslsekolah_before'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('alamat_aslsekolah_before');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Alasan pindah ke sekolah ini</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('alasan_pndah')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="alasan_pndah" value="<?=(old('alasan_pndah')) ? old('alasan_pndah') : $siswa7e['alasan_pndah'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('alasan_pndah');?></div>
                   </div>
                    </div>

                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  "> Nama Ayah</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('ayah')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="ayah" value="<?=(old('ayah')) ? old('ayah') : $siswa7e['ayah'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('ayah');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Tempat, tanggal lahir</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('ttl_ayah')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="ttl_ayah" value="<?=(old('ttl_ayah')) ? old('ttl_ayah') : $siswa7e['ttl_ayah'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('ttl_ayah');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Kewarganegaraan</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('negara_ayah')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="negara_ayah" value="<?=(old('negara_ayah')) ? old('negara_ayah') : $siswa7e['negara_ayah'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('negara_ayah');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Pendidikan tertinggi</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('pnddkan_akhir_ayh')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="pnddkan_akhir_ayh" value="<?=(old('pnddkan_akhir_ayh')) ? old('pnddkan_akhir_ayh') : $siswa7e['pnddkan_akhir_ayh'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('pnddkan_akhir_ayh');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Pekerjaan</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('job_ayh')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="job_ayh" value="<?=(old('job_ayh')) ? old('job_ayh') : $siswa7e['job_ayh'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('job_ayh');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Penghasilan /bulan/tahun</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('gaji_ayh')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="gaji_ayh" value="<?=(old('gaji_ayh')) ? old('gaji_ayh') : $siswa7e['gaji_ayh'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('gaji_ayh');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Alamat</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('almt_ayh')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="almt_ayh" value="<?=(old('almt_ayh')) ? old('almt_ayh') : $siswa7e['almt_ayh'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('almt_ayh');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Nomor Telepon Ayah</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('tlp_ayah')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="tlp_ayah" value="<?=(old('tlp_ayah')) ? old('tlp_ayah') : $siswa7e['tlp_ayah'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('tlp_ayah');?></div>
                   </div>
                    </div>


                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  "> Nama Ibu</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('ibu')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="ibu" value="<?=(old('ibu')) ? old('ibu') : $siswa7e['ibu'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('ibu');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Tempat, tanggal lahir</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('ttl_ibu')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="ttl_ibu" value="<?=(old('ttl_ibu')) ? old('ttl_ibu') : $siswa7e['ttl_ibu'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('ttl_ibu');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Kewarganegaraan</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('negara_ibu')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="negara_ibu" value="<?=(old('negara_ibu')) ? old('negara_ibu') : $siswa7e['negara_ibu'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('negara_ibu');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Pendidikan tertinggi</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('pnddkan_akhir_ibu')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="pnddkan_akhir_ibu" value="<?=(old('pnddkan_akhir_ibu')) ? old('pnddkan_akhir_ibu') : $siswa7e['pnddkan_akhir_ibu'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('pnddkan_akhir_ibu');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Pekerjaan</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('job_ibu')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="job_ibu" value="<?=(old('job_ibu')) ? old('job_ibu') : $siswa7e['job_ibu'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('job_ibu');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Penghasilan /bulan/tahun</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('gaji_ibu')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="gaji_ibu" value="<?=(old('gaji_ibu')) ? old('gaji_ibu') : $siswa7e['gaji_ibu'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('gaji_ibu');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Alamat</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('almt_ibu')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="almt_ibu" value="<?=(old('almt_ibu')) ? old('almt_ibu') : $siswa7e['almt_ibu'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('almt_ibu');?></div>
                   </div>
                    </div>
                     <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Nomor Telepon Ibu</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('tlp_ibu')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="tlp_ibu" value="<?=(old('tlp_ibu')) ? old('tlp_ibu') : $siswa7e['tlp_ibu'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('tlp_ibu');?></div>
                   </div>
                    </div>


                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  "> Nama Wali</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('wali')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="wali" value="<?=(old('wali')) ? old('wali') : $siswa7e['wali'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('wali');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Tempat, tanggal lahir</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('ttl_wali')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="ttl_wali" value="<?=(old('ttl_wali')) ? old('ttl_wali') : $siswa7e['ttl_wali'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('ttl_wali');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Kewarganegaraan</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('negara_wali')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="negara_wali" value="<?=(old('negara_wali')) ? old('negara_wali') : $siswa7e['negara_wali'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('negara_wali');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Pendidikan tertinggi</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('pnddkn_akhir_wali')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="pnddkn_akhir_wali" value="<?=(old('pnddkn_akhir_wali')) ? old('pnddkn_akhir_wali') : $siswa7e['pnddkn_akhir_wali'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('pnddkn_akhir_wali');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Pekerjaan</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('job_wali')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="job_wali" value="<?=(old('job_wali')) ? old('job_wali') : $siswa7e['job_wali'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('job_wali');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Penghasilan /bulan/tahun</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('gaji_wali')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="gaji_wali" value="<?=(old('gaji_wali')) ? old('gaji_wali') : $siswa7e['gaji_wali'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('gaji_wali');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Alamat</label>
                 <div class=" col-sm-9">
                    <input class="form-control <?=($validation->hasError('almt_wali')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="almt_wali" value="<?=(old('almt_wali')) ? old('almt_wali') : $siswa7e['almt_wali'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('almt_wali');?></div>
                   </div>
                    </div>
                     <div class="field row item form-group">
             <label class="col-form-label col-md-3 col-sm-3  ">Nomor Telepon Wali</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('tlp_wali')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="tlp_wali" value="<?=(old('tlp_wali')) ? old('tlp_wali') : $siswa7e['tlp_wali'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('tlp_wali');?></div>
                   </div>
                    </div>
                    <div class="field row item form-group">
             <label class="col-form-label col-sm-3  ">Hubungan dengan peserta didik</label>
                 <div class="col-sm-9">
                    <input class="form-control <?=($validation->hasError('status_dgn_sswa')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" name="status_dgn_sswa" value="<?=(old('status_dgn_sswa')) ? old('status_dgn_sswa') : $siswa7e['status_dgn_sswa'];?>"  placeholder=""  /> <div class="invalid-feedback"> <?=$validation->getError('status_dgn_sswa');?></div>
                   </div>
                    </div>
                    <div class="field row  item form-group">
                    <label class="col-form-label col-sm-3 ">Pas foto</label>
                    <div class=" col-sm-9">
                    <div class="row">
                    <div class=" col-sm-3">
                    <img  <?php if ($thn == '2019-2020'): ?>
                         src="<?=base_url('/assets/images/dk19_20/SMP/kls7/7e') . "/" . $siswa7e['img'];?>"
                         <?php endif;?>
                         <?php if ($thn == '2020-2021'): ?>
                         src="<?=base_url('/assets/images/dk20_21/SMP/kls7/7e') . "/" . $siswa7e['img'];?>"<?php endif;?>
                          width="150" height="150" alt="<?=$siswa7e['nama'];?>" class="img-thumbnail img-preview"  alt=""></div>
                          <div class="col-sm-9">
                    <div class="custom-file ">
                    <input type="file" class="custom-file-input  <?=($validation->hasError('img')) ? 'is-invalid' : '';?>" id="img"  value="<?=(old('img')) ? old('img') : $siswa7e['img'];?>"name="img" onchange="previewImg()">
                    <div class="invalid-feedback"> <?=$validation->getError('img');?></div>
                    <label for="img" class="custom-file-label">Choose file</label>
                </div> </div></div></div>
                </div>

      </div>
      <div class= "col-sm-12 ">
        <button type="submit"   class="btn btn-block btn-user   btn-primary"> EDIT</button>

      </div>
      </form>
                                </div>



                  </div>
                </div>
            </div>
          </div>
        </div>



        <!-- /page content -->




        <?=$this->endSection();?>