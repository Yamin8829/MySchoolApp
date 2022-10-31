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
            <li class="breadcrumb-item"><a href="<?=base_url('/Smp');?>">SMP</a></li>
            <li class="breadcrumb-item"><a href="<?=base_url('/Smp/input');?>">Membuat Data</a></li>
            </ol>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section   class="content">
      <div class="container-fluid">
        <div class="row">
        <div    class="wrapper-column-1 col-md-2">
     <!-- Widget: user widget style 1 -->
               <!-- <div id="kotak1">
                <div  class="noUrut">
                    <h1 class="judulNo">No. Urut</h1>
                </div>
                <div  class="nomor" ><p class="dataNo">-</p></div>

               </div> -->
               <div class="row">
               <div id="kotak2">
                <div  class="bg-foto-induk">
                <img class="img-fluid mb-3" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $siswa['img_1'];?>" alt="Photo">
                </div>
                <div  class="bg-text-induk">
  <span class="text-induk">(<?=$siswa['nama_lengkap_siswa'];?>)</span>
</div>
               </div>
               <div id="kotak2">
                <div class="bg-foto-induk">
                <img class="img-fluid mb-3" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $siswa['img_1'];?>" alt="Photo">
                </div>
                <div class="bg-text-induk">
  <span class="text-induk">(<?=$siswa['nama_lengkap_siswa'];?>)</span>
</div>
               </div>
               <div id="kotak2">
                <div class="bg-foto-induk">
                <img class="img-fluid mb-3" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $siswa['img_1'];?>" alt="Photo">
                </div>
                <div class="bg-text-induk">
  <span class="text-induk">(<?=$siswa['nama_lengkap_siswa'];?>)</span>
</div>
               </div>
               <div id="kotak2">
                <div class="bg-foto-induk">
                <img class="img-fluid mb-3" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $siswa['img_1'];?>" alt="Photo">
                </div>
                <div class="bg-text-induk">
  <span class="text-induk">(<?=$siswa['nama_lengkap_siswa'];?>)</span>
</div>
               </div>
               <div id="kotak2">
                <div class="bg-foto-induk">
                <img class="img-fluid mb-3" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $siswa['img_1'];?>" alt="Photo">
                </div>
                <div class="bg-text-induk">
  <span class="text-induk">(<?=$siswa['nama_lengkap_siswa'];?>)</span>
</div>
               </div>
               <div id="kotak2">
                <div class="bg-foto-induk">
                <img class="img-fluid mb-3" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $siswa['img_1'];?>" alt="Photo">
                </div>
                <div class="bg-text-induk">
  <span class="text-induk">(<?=$siswa['nama_lengkap_siswa'];?>)</span>
</div>
               </div>
               </div>

            </div>


            <div class="col-md-9">
            <div class="card">

              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                   <p class="fs-6 fw-bold"> LEMBAR BUKU INDUK PESERTA DIDIK SMP </p>
                   <ul class="ml-2 list-unstyled">

<li> Nomor Induk : <?=$siswa['nis_siswa_smp'];?></li>
<li> NISN : <?=$siswa['nisn'];?></li>
</ul>
<p class="fs-6 fw-bold text-uppercase">A. Keterangan Pribadi Siswa </p>

<ul class="ml-2 list-unstyled">
  <li>1. Nama lengkap  :  <?=$siswa['nama_lengkap_siswa'];?></li>
  <li>2. Nama Panggilan  :  <?=$siswa['nama_panggilan_siswa'];?></li>
  <li>
<?php if ($siswa['gender_siswa'] == 'Laki-laki'): ?> 3. Jenis Kelamin : Laki-Laki ( L )
<?php endif;?> </li>

<?php if ($siswa['gender_siswa'] == 'Perempuan'): ?> 3. Jenis Kelamin : Perempuan ( P ) </li>
<?php endif;?>
<li>4. Tempat dan tanggal lahir : <?=$siswa['tmp_lahir_siswa'];?>, <?=date('d F Y', strtotime($siswa['tgl_lahir_siswa']));
?></li>
<li>5. Agama : <?=$siswa['agama_siswa'];?></li>
<li>6. Kewarganegaraan : <?=$siswa['negara_siswa'];?></li>

<li>7. Anak ke : <?=$siswa['ank_ke'];?></li>
<li>8. Jumlah saudara : Kandung <?=$siswa['jml_sdra_kndung'];?> orang, Tiri <?=$siswa['jml_sdra_tiri'];?> orang, Angkat <?=$siswa['jml_sdra_angkat'];?> orang</li>

<li>9. Anak yatim/piatu/yatim piatu : <?=$siswa['status_ortu'];?></li>
<li>10. Bahasa sehari-hari : <?=$siswa['bhs_daily'];?></li>
</ul>


<p class="fs-6 fw-bold text-uppercase">B. Keterangan tempat tinggal Siswa </p>
<ul class="ml-2 list-unstyled">
<li>11. Alamat Peserta Didik : <?=$siswa['alamat_siswa'];?></li>
  <li>12. Selama bersekolah tinggal dengan : <?=$siswa['tinggal_dgn'];?></li>
  <li>13. Jarak dari tempat tinggal ke sekolah : <?=$siswa['jrak_kesekolah'];?></li>
  <li>14. Ke sekolah dengan kendaraan / jalan kaki : <?=$siswa['kesekolah_dgn'];?></li>

</ul>

<p class="fs-6 fw-bold text-uppercase">C. Keterangan jasmani dan kesehatan siswa </p>
<ul class="ml-2 list-unstyled">

  <li>15. Berat badan tahun ini : <?=$siswa['berat_badan_1'];?> kg. </li>
  <li>16. Tinggi badan tahun ini : <?=$siswa['tinggi_badan_1'];?> cm. </li>
  <li>17. Golongan darah : <?=$siswa['gol_darah'];?></li>
  <li>18. Penyakit yang pernah diderita (sakit berat yang memerlukan perawatan khusus) :
  <div><table class="table-bordered table table-hover">
            <thead>
            <tr>
                    <th>No.</th>
                    <th>Jenis Penyakit</th>
                    <th>Kelas</th>
                    <th>Tahun</th>
                    <th>Lama Sakit</th>
                    <th>Keterangan</th>
            </tr>
            </thead>
            <tbody>
<tr>
  <td>1.</td>
  <td><?=$siswa['pnykit_berat_1'];?></td>
  <td><?=$siswa['trjngkit_saat_kls_1'];?></td>
  <td><?=$siswa['trjngkit_di_thn_1'];?></td>
  <td><?=$siswa['trjngkit_selama_1'];?></td>
  <td><?=$siswa['ketrngan_1'];?></td>
</tr>
<tr>
  <td>2.</td>
  <td><?=$siswa['pnykit_berat_2'];?></td>
  <td><?=$siswa['trjngkit_saat_kls_2'];?></td>
  <td><?=$siswa['trjngkit_di_thn_2'];?></td>
  <td><?=$siswa['trjngkit_selama_2'];?></td>
  <td><?=$siswa['ketrngan_2'];?></td>
</tr>
<tr>
  <td>3.</td>
  <td><?=$siswa['pnykit_berat_3'];?></td>
  <td><?=$siswa['trjngkit_saat_kls_3'];?></td>
  <td><?=$siswa['trjngkit_di_thn_3'];?></td>
  <td><?=$siswa['trjngkit_selama_3'];?></td>
  <td><?=$siswa['ketrngan_3'];?></td>
</tr>
            </tbody>
                </table></div>
</li>
  <li>19. Kelainan jasmaniah / lainnya : <?=$siswa['kelainan_lainnya'];?></li>
  </ul>

<p class="fs-6 fw-bold text-uppercase">D. Keterangan tentang pendidikan sebelumnya </p>
<ul class="ml-2 list-unstyled">
<li>20. Diterima di sekolah ini sebagai siswa baru tanggal : <?=$siswa['sswa_bru_ditgl'];?>
<ul class="ml-4 list-unstyled">
<li>Asal Sekolah Dasar : <?=$siswa['asl_sklah'];?> </li>
  <li>Alamat : <?=$siswa['alamat_sklah_asl'];?></li>
  <li>Tanggal dan No. Ijazah : <?=$siswa['tgl_nmr_ijazah'];?></li>
</ul>
</li>
<li>21. Diterima di sekolah ini sebagai siswa pindahan pada tanggal : <?=$siswa['sswa_pndhan_ditgl'];?>
<ul class="ml-4 list-unstyled">
  <li>Di kelas : <?=$siswa['pndh_di_kls'];?></li>
  <li>Dari SMP : <?=$siswa['nmskolah_pndahan'];?></li>
  <li>Alamat : <?=$siswa['alamat_sklh_pndahn'];?></li>
  <li>Asal SD / No. Ijazah : <?=$siswa['asl_sklah_before_nmrijazahnya'];?></li>
  <li>Alamat  : <?=$siswa['alamat_aslsekolah_before'];?></li>
  <li>Alasan pindah ke sekolah ini : <?=$siswa['alasan_pindah_kesini'];?></li>
</ul>
</li>
</ul>

<p class="fs-6 fw-bold text-uppercase">E. Keterangan tentang orang tua kandung </p>
<ul class="ml-2 list-unstyled">
  <li>
  <div><table class="table-bordered table table-hover">
            <thead>
            <tr>
                    <th>22. Data orang tua kandung</th>
                    <th>Ayah</th>
                    <th>Ibu</th>

            </tr>
            </thead>
            <tbody>
<tr>
  <td>Nama</td>
  <td><?=$siswa['ayah'];?></td>
  <td><?=$siswa['ibu'];?></td>
</tr>
<tr>

  <td>Tempat & tanggal lahir</td>
  <td><?=$siswa['ttl_ayah'];?></td>
  <td><?=$siswa['ttl_ibu'];?></td>

</tr>
<tr>
 <td>Kewarganegaraan</td>
 <td><?=$siswa['negara_ayah'];?></td>
 <td><?=$siswa['negara_ibu'];?></td>

</tr>
<tr>
<td>Pendidikan tertinggi</td>
<td><?=$siswa['pnddkan_akhir_ayah'];?></td>
<td><?=$siswa['pnddkan_akhir_ibu'];?></td>

</tr>
<tr>
<td>Pekerjaan</td>
<td><?=$siswa['job_ayah'];?></td>
<td><?=$siswa['job_ibu'];?></td>

</tr>
<tr>
<td>Penghasilan rata-rata /bulan/tahun</td>
<td><?=$siswa['gaji_ayah'];?></td>
<td><?=$siswa['gaji_ibu'];?></td>

</tr>
<tr>
<td>Alamat</td>
<td><?=$siswa['almt_ayah'];?></td>
<td><?=$siswa['almt_ibu'];?></td>
</tr>

            </tbody>
                </table></div>
  </li>
</ul>

<p class="fs-6 fw-bold text-uppercase">F. Keterangan tentang wali</p>
<ul class="ml-2 list-unstyled">
<li>
  <div><table class="table-bordered table table-hover">
            <thead>
            <tr>
                    <th>23. Data Wali</th>
                    <th>Laki-laki</th>
                    <th>Perempuan</th>

            </tr>
            </thead>
            <tbody>
<tr>
  <td>Nama</td>
  <td><?=$siswa['wali'];?></td>
  <td><?=$siswa['ibu'];?></td>
</tr>
<tr>

  <td>Tempat & tanggal lahir</td>
  <td><?=$siswa['ttl_wali'];?></td>
  <td><?=$siswa['ttl_ibu'];?></td>

</tr>
<tr>
 <td>Kewarganegaraan</td>
 <td><?=$siswa['negara_wali'];?></td>
 <td><?=$siswa['negara_ibu'];?></td>

</tr>
<tr>
<td>Pendidikan tertinggi</td>
<td><?=$siswa['pnddkn_akhir_wali'];?></td>
<td><?=$siswa['pnddkan_akhir_ibu'];?></td>

</tr>
<tr>
<td>Pekerjaan</td>
<td><?=$siswa['job_wali'];?></td>
<td><?=$siswa['job_ibu'];?></td>

</tr>
<tr>
<td>Penghasilan rata-rata /bulan/tahun</td>
<td><?=$siswa['gaji_wali'];?></td>
<td><?=$siswa['gaji_ibu'];?></td>

</tr>
<tr>
<td>Alamat</td>
<td><?=$siswa['almt_wali'];?></td>
<td><?=$siswa['almt_ibu'];?></td>
</tr>
<tr>
<td>Hubungan dengan peserta didik</td>
<td><?=$siswa['status_dgn_sswa'];?></td>
<td><?=$siswa['almt_ibu'];?></td>
</tr>

            </tbody>
                </table></div>
  </li>
</ul>

<p class="fs-6 fw-bold text-uppercase">G. Keterangan intelegensi, kepribadian dan prestasi siswa</p>
<ul class="ml-2 list-unstyled">
<li>24. Intelegensi (IQ) : <?=$siswa['alamat_sklah_asl'];?>, berdasarkan tes pada tanggal </li>
<li>25. Kepribadian
  <div><table class="table-bordered table table-hover">
            <thead>
            <tr>
                    <th>No.</th>
                    <th>Aspek yang dinilai</th>
                    <th>Baik</th>
                    <th>Cukup</th>
                    <th>Kurang</th>

            </tr>
            </thead>
            <tbody>
<tr>
  <td>1</td>
  <td>Disiplin/ketertiban</td>
  <td><?=$siswa['ayah'];?></td>
  <td><?=$siswa['ibu'];?></td>
</tr>
<tr>
  <td>2</td>
  <td>Prakarsa/kreativitas</td>
  <td><?=$siswa['ttl_ayah'];?></td>
  <td><?=$siswa['ttl_ibu'];?></td>

</tr>
<tr>
  <td>3</td>
 <td>Tanggung jawab</td>
 <td><?=$siswa['negara_ayah'];?></td>
 <td><?=$siswa['negara_ibu'];?></td>

</tr>
<tr>
  <td>4</td>
<td>Penyesuaian diri</td>
<td><?=$siswa['pnddkan_akhir_ayah'];?></td>
<td><?=$siswa['pnddkan_akhir_ibu'];?></td>

</tr>
<tr>
  <td>5</td>
<td>Kemantapan emosi</td>
<td><?=$siswa['job_ayah'];?></td>
<td><?=$siswa['job_ibu'];?></td>

</tr>
<tr>
  <td>6</td>
<td>Kerjasama</td>
<td><?=$siswa['gaji_ayah'];?></td>
<td><?=$siswa['gaji_ibu'];?></td>

</tr>
            </tbody>
                </table></div>
  </li>

  <li>26. Keikutsertaan/Prestasi yang pernah dicapai dalam bidang :
<ul class="ml-4 list-unstyled">
  <li>a. Kesenian : <?=$siswa['pndh_di_kls'];?></li>
  <li>b. Olahraga : <?=$siswa['nmskolah_pndahan'];?></li>
  <li>c. Organisasi : <?=$siswa['alamat_sklh_pndahn'];?></li>
  <li>d. Pramuka : <?=$siswa['asl_sklah_before_nmrijazahnya'];?></li>
  <li>e. Karya Tulis  : <?=$siswa['alamat_aslsekolah_before'];?></li>
  <li>f. Lainnya : <?=$siswa['alasan_pindah_kesini'];?></li>
</ul>
</li>

<li>27. Penerimaan bea siswa :
<ul class="ml-4 list-unstyled">
  <li>Tahun : <?=$siswa['pndh_di_kls'];?>, dari : <?=$siswa['pndh_di_kls'];?></li>
  <li>Tahun : <?=$siswa['pndh_di_kls'];?>, dari : <?=$siswa['pndh_di_kls'];?></li>
  <li>Tahun : <?=$siswa['pndh_di_kls'];?>, dari : <?=$siswa['pndh_di_kls'];?></li>
</ul>
</li>
</ul>

<p class="fs-6 fw-bold text-uppercase">H. Keterangan kehadiran</p>
<ul class="ml-2 list-unstyled">
<li>28. Jumlah hari kehadiran tiap semester :
<div class="overflow-auto"><table class=" table-bordered table table-hover">
            <thead class="text-center">
            <tr>
                    <th rowspan="2" colspan="2" >Kelas / semester</th>
                    <th colspan="2">Hadir</th>
                    <th colspan="5">Tidak hadir karena</th>
                    <th rowspan="2">Jumlah hari belajar efektif</th>

            </tr>
            <tr>
                    <th >Jumlah</th>
                    <th >%</th>
                    <th >Sakit</th>
                    <th >Izin</th>
                    <th >Alpa</th>
                    <th >Jumlah</th>
                    <th >%</th>

            </tr>
            <tr>
                    <th colspan="2">1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>

            </tr>
            </thead>
            <tbody>
<tr>
  <td rowspan="2" >Kelas : </td>
  <td>Semester 1 </td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
<tr>
  <td >Semester 2 </td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td rowspan="2" >Kelas : </td>
  <td>Semester 1 </td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td >Semester 2 </td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td rowspan="2" >Kelas : </td>
  <td>Semester 1 </td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>
<tr>
  <td >Semester 2 </td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
  <td>-</td>
</tr>



            </tbody>
                </table></div>
</li>
</ul>

<p class="fs-6 fw-bold text-uppercase">I. Meninggalkan sekolah</p>
<ul class="ml-2 list-unstyled">
<li>29. Tamat Belajar : Tanggal   <?=$siswa['pndh_di_kls'];?>, No. Ijazah : <?=$siswa['pndh_di_kls'];?>
<ul class="ml-4 list-unstyled">
  <li>Melanjutkan sekolah ke : <?=$siswa['pndh_di_kls'];?> </li>
  <li>Alamat : <?=$siswa['pndh_di_kls'];?></li>
</ul>
</li>

<li>30. Pindah sekolah ke :
<ul class="ml-4 list-unstyled">
  <li>Tanggal pindah : Tanggal : <?=$siswa['pndh_di_kls'];?>, dari kelas : <?=$siswa['pndh_di_kls'];?></li>
  <li>Alamat sekolah : <?=$siswa['pndh_di_kls'];?></li>
  <li>Alasan pindah : <?=$siswa['pndh_di_kls'];?></li>
</ul>
</li>

<li>31. Putus sekolah : Tanggal   <?=$siswa['pndh_di_kls'];?>, Alasan : <?=$siswa['pndh_di_kls'];?>
</li>
</ul>

<p class="fs-6 fw-bold text-uppercase">J. Lain-lain</p>
<ul class="ml-2 list-unstyled">
<li>32. Catatan penting selama siswa belajar di sekolah ini :
<ul class="ml-4 list-unstyled">
  <li> <?=$siswa['pndh_di_kls'];?></li>
</li>
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
                              <img class="img-fluid mb-3" src="<?=base_url() . '/public/assets/images/dk20_21/SMP/kls7/7a/' . $siswa['img_1'];?>" alt="Photo">

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
  <?=$this->include('coreTemplates/footer');?>

  <?=$this->endSection();?>