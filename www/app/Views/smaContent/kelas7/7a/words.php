
<?php

$phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection();
$fn = $siswa7a['nama'];
header("Content-Description: File Transfer");
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Transfer-Encoding: Binary");
header("Content-Disposition: attachment; filename= $fn.xls");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Expires: 0");

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Nama Siswa</title>
 </head>
 <body>
     <h1>hai</h1>

  <p>Hello world, I'm
    <strong>  <?=$siswa7a['nama'];?></strong>



</p>


  <ul class=" ml-4 list-unstyled">


    <li><i class="fa fa-calendar-o"></i> Tanggal Lahir :   <?=date('d M Y', strtotime($siswa7a['tgl_lahir']));
?></li>
<li><i class="fa fa-map-marker"></i> Tempat Lahir : <?=$siswa7a['tmp_lahir'];?></li>
    <li>
    <?php if ($siswa7a['gender'] == 'L'): ?>
    <i class="fa fa-male"></i>  Jenis Kelamin : Laki-Laki ( L )
    <?php endif;?> </li>

  <?php if ($siswa7a['gender'] == 'P'): ?>
    <li><i class="fa fa-female"></i>  Jenis Kelamin : Perempuan ( P ) </li>
  <?php endif;?>
  <li><i class="fa fa-thumb-tack"></i> Kewarganegaraan : <?=$siswa7a['negara'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Agama : <?=$siswa7a['agama'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Anak ke : <?=$siswa7a['ank_ke'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Jumlah saudara : Kandung <?=$siswa7a['jml_sdra_kndung'];?> orang, Tiri <?=$siswa7a['jml_sdra_tiri'];?> orang, Angkat <?=$siswa7a['jml_sdra_ankat'];?> </li>

  <li><i class="fa fa-thumb-tack"></i> Anak yatim/piatu/yatim piatu : <?=$siswa7a['status_ortu'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Bahasa sehari-hari : <?=$siswa7a['bhs_daily'];?></li>

  </ul>
<h4><i class="fa fa-tag">  </i> Keterangan tempat tinggal siswa
</h4>
  <ul class="ml-4 list-unstyled">

  <li><i class="fa fa-thumb-tack"></i> Alamat : <?=$siswa7a['alamat'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Selama bersekolah tinggal dengan : <?=$siswa7a['tinggal_dgn'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Jarak dari tempat tinggal ke sekolah : <?=$siswa7a['jrak_kesekolah'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Ke sekolah dengan : <?=$siswa7a['kesekolah_dgn'];?></li>
  </ul>

  <h4><i class="fa fa-tag">  </i> Keterangan jasmaniah & kesehatan siswa
</h4>
   <ul class="ml-4 list-unstyled">

  <li><i class="fa fa-thumb-tack"></i> Berat badan tahun ini : <?=$siswa7a['bb_awal_sekolah'];?> kg. </li>
  <li><i class="fa fa-thumb-tack"></i> Tinggi badan tahun ini : <?=$siswa7a['tnggibdn_awal_sekolah'];?> cm. </li>
  <li><i class="fa fa-thumb-tack"></i> Golongan darah : <?=$siswa7a['gol_drah'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Penyakit berat yang pernah diderita : <?=$siswa7a['pnykit_brat'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Pernah diderita saat kelas : <?=$siswa7a['trjngkit_saat_kls'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Pernah diderita di tahun : <?=$siswa7a['trjngkit_di_thn'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Pernah diderita selama : <?=$siswa7a['trjngkit_selma'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Keterangan : <?=$siswa7a['ketrngan'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Kelainan jasmaniah / lainnya : <?=$siswa7a['kelainan_lainnya'];?></li>
  </ul>
  <h4><i class="fa fa-tag">  </i> Keterangan pendidikan sebelumnya
</h4>
   <ul class="ml-4 list-unstyled">

  <li><i class="fa fa-thumb-tack"></i> Diterima di sekolah ini sebagai siswa baru tanggal : <?=$siswa7a['sswa_bru_ditgl'];?> </li>
  <li><i class="fa fa-thumb-tack"></i> Asal sekolah : <?=$siswa7a['asl_sklah'];?> </li>
  <li><i class="fa fa-thumb-tack"></i> Alamatnya : <?=$siswa7a['alamat_sklah_asl'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Tanggal & nomor ijazah : <?=$siswa7a['tgl_nmr_ijazal'];?></li>
  <hr>
  <li><i class="fa fa-thumb-tack"></i> Diterima di sekolah ini sebagai siswa pindahan pada tanggal : <?=$siswa7a['sswa_pndhan_ditgl'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Di kelas : <?=$siswa7a['pndh_di_kls'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Dari sekolah : <?=$siswa7a['nmskolah_pndahan'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Alamatnya : <?=$siswa7a['alamat_sklh_pndahn'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Asal tamatan sekolah sebelumnya & no. ijazah : <?=$siswa7a['asl_sklah_before_nmrijazahnya'];?></li>

  <li><i class="fa fa-thumb-tack"></i> Beralamat  : <?=$siswa7a['alamat_aslsekolah_before'];?></li>
  <li><i class="fa fa-thumb-tack"></i> Alasan pindah ke sekolah ini : <?=$siswa7a['alasan_pndah'];?></li>

  </ul>

 </body>
 </html>

