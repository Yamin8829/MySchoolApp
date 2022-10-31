


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
                <h3 class="card-title"><?=$edit;?></h3>
              </div>
              <!-- /.card-header -->
<div class="card-body">
     <form class="" action="<?=base_url($linkSMP);?>/update20_21/<?=$siswa['id'];?>" method="post"enctype="multipart/form-data">
     <div class="row">
     <input type="hidden" name="slug" value="<?=$siswa['slug'];?>">
      <input type="hidden" name="imgLama" value="<?=$siswa['img'];?>">
<div  class="col-4">
                      <div class="form-group ">

                        <div class="">
                          <input readonly type="text" value="<?=$siswa['nis'];?>" name="nis" class="form-control" id="inputName" placeholder="Nomor Induk Sekolah">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['nama'];?>" required type="text"name="nama" class="form-control" id="inputName2" placeholder="Nama Lengkap">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                        <select name="gender" class="form-control">
                          <option>Pilih</option>
                          <option
                          <?php if ($siswa['gender'] == "Laki-laki"): ?>
                             selected
                             <?php endif;?>  >Laki-laki</option>


                          <option
                          <?php if ($siswa['gender'] == "Perempuan"): ?>
                             selected
                            <?php endif;?>  >Perempuan</option>

                        </select>
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['nisn'];?>" title="Nomor Induk Sekolah Nasional" required type="text"name="nisn" class="form-control" id="inputSkills" placeholder="Nomor Induk Sekolah Nasional">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['tmp_lahir'];?>" type="text"name="tmp_lahir" class="form-control" id="inputName" placeholder="Tempat Lahir">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=date('d-m-Y', strtotime($siswa['tgl_lahir']));?>" type="text"name="tgl_lahir" class="form-control" id="inputName" placeholder="Tanggal Lahir">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['negara'];?>" type="text"name="negara" class="form-control" id="inputName" placeholder="Kewarganegaraan">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['agama'];?>" type="text"name="agama" class="form-control" id="inputName" placeholder="Agama">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['ank_ke'];?>" type="text"name="ank_ke" class="form-control" id="inputName" placeholder="Anak ke-">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['jml_sdra_kndung'];?>" type="text"name="jml_sdra_kndung" class="form-control" id="inputName" placeholder="Jumlah saudara kandung">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['jml_sdra_tiri'];?>" type="text"name="jml_sdra_tiri" class="form-control" id="inputName" placeholder="Jumlah saudara tiri">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['jml_sdra_ankat'];?>" type="text"name="jml_sdra_ankat" class="form-control" id="inputName" placeholder="Jumlah saudara angkat">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['status_ortu'];?>" type="text"name="status_ortu" class="form-control" id="inputName" placeholder="Anak yatim / paitu / yatim piatu">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['bhs_daily'];?>" type="text"name="bhs_daily" class="form-control" id="inputName" placeholder="Bahasa sehari-hari">
                        </div>
                      </div>
                      <h6><i class="fa fa-tag">  </i> Keterangan Tempat Tinggal Siswa</h6>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['alamat'];?>" type="text"name="alamat" class="form-control" id="inputName" placeholder="Alamat">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['tinggal_dgn'];?>" type="text"name="tinggal_dgn" class="form-control" id="inputName" placeholder="Selama bersekolah tinggal dengan">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['jrak_kesekolah'];?>" type="text"name="jrak_kesekolah" class="form-control" id="inputName" placeholder="Jarak dari tempat tinggal ke sekolah">
                        </div>
                      </div><div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['kesekolah_dgn'];?>" type="text"name="kesekolah_dgn" class="form-control" id="inputName" placeholder="Ke sekolah dengan">
                        </div>
                      </div>


                      </div>

                      <div class="col-4">
                      <h6><i class="fa fa-tag">  </i>  Jasmani & Kesehatan Siswa</h6>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['bb_awal_sekolah'];?>" type="text"name="bb_awal_sekolah" class="form-control" id="inputName" placeholder="Berat badan tahun ini">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['tnggibdn_awal_sekolah'];?>" type="text"name="tnggibdn_awal_sekolah" class="form-control" id="inputName" placeholder="Tinggi badan tahun ini">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['gol_drah'];?>" type="text"name="gol_drah" class="form-control" id="inputName" placeholder="Golongan darah">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['pnykit_brat'];?>" type="text"name="pnykit_brat" class="form-control" id="inputName" placeholder="Penyakit berat yang pernah diderita">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['trjngkit_saat_kls'];?>" type="text"name="trjngkit_saat_kls" class="form-control" id="inputName" placeholder="Pernah diderita saat kelas">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['trjngkit_di_thn'];?>" type="text"name="trjngkit_di_thn" class="form-control" id="inputName" placeholder="Pernah diderita di tahun">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['trjngkit_selma'];?>" type="text"name="trngjkit_selma" class="form-control" id="inputName" placeholder="Pernah diderita selama">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['ketrngan'];?>" type="text"name="ketrngan" class="form-control" id="inputName" placeholder="Keterangan">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['kelainan_lainnya'];?>" type="text"name="kelainan_lainnya" class="form-control" id="inputName" placeholder="Kelainan jasmaniah / lainnya">
                        </div>
                      </div>

                      <h6><i class="fa fa-tag">  </i> Keterangan Pendidikan Sebelumnya</h6>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['sswa_bru_ditgl'];?>" type="text"name="sswa_bru_ditgl" class="form-control" id="inputName" placeholder="Diterima di sekolah ini sebagai siswa baru tanggal">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['asl_sklah'];?>" type="text"name="asl_sklah" class="form-control" id="inputName" placeholder="Asal sekolah">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['alamat_sklah_asl'];?>" type="text"name="alamat_sklah_asl" class="form-control" id="inputName" placeholder="Alamatnya">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['tgl_nmr_ijazah'];?>" type="text"name="tgl_nmr_ijazah" class="form-control" id="inputName" placeholder="Tanggal & nomor ijazah">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['sswa_pndhan_ditgl'];?>" type="text"name="sswa_pndhan_ditgl" class="form-control" id="inputName" placeholder="Diterima di sekolah ini sebagai siswa pindahan pada tanggal">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['pndh_di_kls'];?>" type="text"name="pndh_di_kls" class="form-control" id="inputName" placeholder="Di kelas">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['nmskolah_pndahan'];?>" type="text"name="nmskolah_pndahan" class="form-control" id="inputName" placeholder="Dari sekolah">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['alamat_sklh_pndahn'];?>" type="text"name="alamat_sklh_pndahan" class="form-control" id="inputName" placeholder="Alamatnya">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['asl_sklah_before_nmrijazahnya'];?>" type="text"name="asl_sklah_before_nmrijazahnya" class="form-control" id="inputName" placeholder="Asal tamatan sekolah sebelumnya & nomor ijazah">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['alamat_aslsekolah_before'];?>" type="text"name="alamat_aslsekolah_before" class="form-control" id="inputName" placeholder="Beralamat">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['alasan_pndah'];?>" type="text"name="alasan_pndah" class="form-control" id="inputName" placeholder="Alasan pindah ke sekolah ini">
                        </div>
                      </div>
                      <div class="form-group row">

                      <div class="col-sm-6">
                          <img src="<?=base_url('/assets/images/dk20_21/SMP/kls7/7a/') . $siswa['img'];?>" class="img-thumbnail img-preview" alt="">
                          </div>
                          <div class="col-sm-6">
                        <input accept=".jpg , .png , .gif" type="file" class="custom-file-input" id="img"  value=""name="img" onchange="previewImg()">
                        <label class="custom-file-label" for="exampleInputFile">Choose</label>
                        </div>
                      </div>


                      </div>



                      <div class="col-4">
                      <h6><i class="fa fa-tag">  </i> Keterangan Tentang Ayah</h6>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['ayah'];?>" type="text"name="ayah" class="form-control" id="inputName" placeholder="Nama Ayah">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['ttl_ayah'];?>" type="text"name="ttl_ayah" class="form-control" id="inputName" placeholder="Tempat, tanggal lahir">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['negara_ayah'];?>" type="text"name="negara_ayah" class="form-control" id="inputName" placeholder="Kewarganegaraan">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['pnddkan_akhir_ayh'];?>"type="text"name="pnddkan_akhir_ayh" class="form-control" id="inputName" placeholder="Pendidikan tertinggi">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['job_ayh'];?>" type="text"name="job_ayh" class="form-control" id="inputName" placeholder="Pekerjaan">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['gaji_ayh'];?>" type="text"name="gaji_ayh" class="form-control" id="inputName" placeholder="Rata-rata penghasilan per bulan">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['almt_ayh'];?>" type="text"name="almt_ayh" class="form-control" id="inputName" placeholder="Alamat">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['tlp_ayah'];?>" type="text"name="tlp_ayah" class="form-control" id="inputName" placeholder="Nomor telepon">
                        </div>
                      </div>
                      <h6><i class="fa fa-tag">  </i> Keterangan Tentang Ibu</h6>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['ibu'];?>"type="text"name="ibu" class="form-control" id="inputName" placeholder="Nama Ibu">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['ttl_ibu'];?>"type="text"name="ttl_ibu" class="form-control" id="inputName" placeholder="Tempat, tanggal lahir">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['negara_ibu'];?>" type="text"name="negara_ibu" class="form-control" id="inputName" placeholder="Kewarganegaraan">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['pnddkan_akhir_ibu'];?>"type="text"name="pnddkan_akhir_ibu" class="form-control" id="inputName" placeholder="Pendidikan tertinggi">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['job_ibu'];?>"type="text"name="job_ibu" class="form-control" id="inputName" placeholder="Pekerjaan">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['gaji_ibu'];?>"type="text"name="gaji_ibu" class="form-control" id="inputName" placeholder="Rata-rata penghasilan per bulan">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['almt_ibu'];?>"type="text"name="almt_ibu" class="form-control" id="inputName" placeholder="Alamat">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['tlp_ibu'];?>"type="text"name="tlp_ibu" class="form-control" id="inputName" placeholder="Nomor telepon">
                        </div>
                      </div>
                      <h6><i class="fa fa-tag">  </i> Keterangan Tentang Wali</h6>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['wali'];?>"type="text"name="wali" class="form-control" id="inputName" placeholder="Nama wali">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['ttl_wali'];?>"type="text"name="ttl_wali" class="form-control" id="inputName" placeholder="Tempat, tanggal lahir">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['negara_wali'];?>"type="text"name="negara_wali" class="form-control" id="inputName" placeholder="Kewarganegaraan">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['pnddkn_akhir_wali'];?>"type="text"name="pnddkn_akhir_wali" class="form-control" id="inputName" placeholder="Pendidikan tertinggi">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['job_wali'];?>"type="text"name="job_wali" class="form-control" id="inputName" placeholder="Pekerjaan">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['gaji_wali'];?>"type="text"name="gaji_wali" class="form-control" id="inputName" placeholder="Rata-rata penghasilan per bulan">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['almt_wali'];?>"type="text"name="almt_wali" class="form-control" id="inputName" placeholder="Alamat">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['tlp_wali'];?>"type="text"name="tlp_wali" class="form-control" id="inputName" placeholder="Nomor telepon">
                        </div>
                      </div>
                      <div class="form-group ">

                        <div class="">
                          <input value="<?=$siswa['status_dgn_sswa'];?>"type="text"name="status_dgn_sswa" class="form-control" id="inputName" placeholder="Hubungan dengan peserta didik">
                        </div>
                      </div>
                      </div>
                      </div>


                      <div class="form-group ">
                        <div class="">
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
