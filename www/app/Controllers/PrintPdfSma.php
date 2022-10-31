<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GetSiswaSmaModel;
use CodeIgniter\I18n\Time;
use Dompdf\Dompdf;
use Dompdf\Options;

class PrintPdfSma extends BaseController
{
    public function index()
    {
        //

    }
    public function generate($slug)
    {

        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';

        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->getsmaPdf($slug);
        // dd($siswa);
        // dd($dataSiswa);
        $namaFile = $siswa['nama_lengkap_siswa'];
        $data = [
            'dt7a' => $dataSiswa,
            'linksma' => '/smaVIIA',
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'title' => 'Siswa',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];

        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');
        $path = base_url() . '/public/assets/images/dk20_21/smp/kls7/7a/' . $siswa['img_1'];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $dataPath = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($dataPath);

        if ($siswa['gender_siswa'] == 'Laki-laki') {
            $gender = "Laki-Laki ( L )";
        }
        if ($siswa['gender_siswa'] == 'Perempuan') {
            $gender = "Perempuan ( P )";
        };
        if ($siswa['tgl_tmat'] == '-') {
            $tglTamat = "....................";
        }
        if ($siswa['tgl_pndah'] == '-') {
            $tglPindah = "....................";
        }
        if ($siswa['iq_siswa_1'] == '-') {
            $iqSiswa = "......";
        }
        if ($siswa['nerima_beasiswa_thn1'] == '-') {
            $beaSiswa1 = "........";
        }
        if ($siswa['nerima_beasiswa_thn2'] == '-') {
            $beaSiswa2 = "........";
        }
        if ($siswa['nerima_beasiswa_thn3'] == '-') {
            $beaSiswa3 = "........";
        }
        if ($siswa['kls_1'] == '-') {
            $kls1 = "........";
        } else {
            $kls1 = $siswa['kls_1'];
        }
        if ($siswa['kls_2'] == '-') {
            $kls2 = "........";
        } else {
            $kls2 = $siswa['kls_2'];
        }
        if ($siswa['kls_3'] == '-') {
            $kls3 = "........";
        } else {
            $kls3 = $siswa['kls_3'];
        }
        if ($siswa['catatan_siswa_di_sklh'] == '-') {
            $catatanUntukSiswa = "<span>...............................................................</span><br>
            <span>...............................................................</span><br>";
        }

        $html = ' <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>' . $siswa['nama_lengkap_siswa'] . '</title>
 </head>


';

        $html .= '

<style>
  *,
*::before,
*::after {
  box-sizing: border-box;
}
@page{
    margin:0;
    padding0;
}
html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

body {
    margin:0;
    padding0;
  font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-weight: 400;
  line-height: 1.4;
  color: #212529;
  text-align: left;
  /* background: rgb(2,0,36); */
  /* background: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);  */
}
.col-10, .col-2{
  position: relative;
  width: 100%;
  padding-right: 7.5px;
  padding-left: 7.5px;
}
.content{
 position:relative;
}
.box{
    //   position:absolute;
    display: inline-block;
    }
.col-2{
  -ms-flex: 0 0 16.666667%;
  flex: 0 0 16.666667%;
  max-width: 15%;
  float:left;
  z-index:2;
  /* background: rgb(216, 59, 255);  */
}

.col-10 {
  // background: rgb(35, 204, 255);
  -ms-flex: 0 0 83.333333%;
  flex: 0 0 83.333333%;
  max-width:85%;
  float:right;
}

.card1 {
  position: relative;
  min-width: 0;
  width: 100px;
  height: 80px;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: black solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
  text-align: center;
  margin-top: 20px;
  margin-left:10%;
}
.card-header1 {
  margin-bottom: 0;
  color: white;
  font-weight: bold;
  background-color: rgba(0, 0, 0, 1);
  border-bottom: 0 solid rgba(0, 0, 0, 0.125);
}
.card-body1 {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  min-height: 1px;
  font-weight: bold;
  font-size: 2.2em;
}


.card {
  position: relative;
  min-width: 0;
  width: 95px;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border-radius: 0.25rem;
  text-align: center;
  margin-top: 30px;
  margin-left:10%;
}

.card-body {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  background-color: #fff;
  font-size: .5em;
  padding-top: 2.5rem;
  padding-bottom: .3rem;
}
.page{
  width:100%;
  height:100%;
}
.bg-img{
  position: relative;
  height: 120px;
  width:100px;
  overflow: hidden;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  border-style: none;
  border:black solid 1px;
}
.card-img{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.card-induk{
  position: relative;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 0 solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}
.body-induk{
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  min-height: 1px;
  padding: 1.25rem;

}
.text-uppercase{
text-transform: uppercase !important;
font-weight: bolder;
}
.list-unstyled {
    font-size:.9em;
  padding-left: 1.3rem;
  list-style: none;
}
.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
  background-color: transparent;
}

.table th,
.table td {
  padding: .1rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
  text-align: center;

}
.table-bordered {
  border: 1px solid #787878;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #b8b8b8;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}
.tai{
  }
  .txt-poto{
  margin-top:25%;
  margin-bottom:25%;
}
.awal{
  margin:0;
}
.col-12{
}
.footer1{

  position:absolute;
  bottom:1%;
  left:40%;
}
.footer{
   position:absolute;
  bottom:1%;
  left:49%;
}
</style>
<body>
<div style="position:relative;">
  <section class="content">


    <div class="tai">
    <div class="col-2">

      <div class="card1">
        <div class="card-header1">
          <span>No. Urut</span>
        </div>
        <div class="card-body1">
          <span></span>
        </div>
      </div>
      <div class="card">
        <div class="bg-img">
<div class="txt-poto">
          <span>Pas Photo</span> <br>
          <span  >3 x 4</span>
          </div>
        </div>
        <div class="card-body">
          <span >(' . $siswa['nama_lengkap_siswa'] . ')</span>
        </div>
      </div>
      <div class="card">
        <div class="bg-img">
         <div class="txt-poto">
          <span>Pas Photo</span> <br>
          <span  >3 x 4</span>
          </div>
        </div>
        <div class="card-body">
          <span >(' . $siswa['nama_lengkap_siswa'] . ')</span>
        </div>
      </div>
      <div class="card">
        <div class="bg-img">
         <div class="txt-poto">
          <span>Pas Photo</span> <br>
          <span  >3 x 4</span>
          </div>
        </div>
        <div class="card-body">
          <span >(' . $siswa['nama_lengkap_siswa'] . ')</span>
        </div>
      </div>
      <div class="card">
        <div class="bg-img">
         <div class="txt-poto">
          <span>Pas Photo</span> <br>
          <span  >3 x 4</span>
          </div>
        </div>
        <div class="card-body">
          <span >(' . $siswa['nama_lengkap_siswa'] . ')</span>
        </div>
      </div>
    </div>

    <div  class="col-10">
    <div class="card-induk">
      <div class="body-induk">
        <h2 class="awal text-uppercase"> LEMBAR BUKU INDUK PESERTA DIDIK sma </h2>
          <table class="ml-2 list-unstyled">
          <tbody>
          <tr>
          <td>Nomor Induk</td>
          <td>: ' . $siswa['nis_siswa_sma'] . '</td>
          </tr>
          <tr>
          <td>NISN </td>
          <td>: ' . $siswa['nisn'] . '</td>
          </tr>
          </tbody>
          </table>

        <p style="margin:0;" class=" text-uppercase">B. Keterangan tempat tinggal Siswa </p>

        <table class="ml-2 list-unstyled">
          <tbody>
          <tr>
          <td>1. Nama lengkap</td>
          <td>: ' . $siswa['nama_lengkap_siswa'] . '</td>
          </tr>
          <tr>
          <td>2. Nama Panggilan </td>
          <td>: - </td>
          </tr>
          <tr>
          <td>3. Jenis Kelamin </td>
          <td>: ' . $gender . '</td>
          </tr>
          <tr>
          <td>4. Tempat dan tanggal lahir </td>
          <td>: ' . $siswa['tmp_lahir_siswa'] . ', ' . date('d F Y', strtotime($siswa['tgl_lahir_siswa'])) . '</td>
          </tr>
          <tr>
          <td>5. Agama </td>
          <td>: ' . $siswa['agama_siswa'] . '</td>
          </tr>
          <td>6. Kewarganegaraan </td>
          <td>: ' . $siswa['negara_siswa'] . '</td>
          </tr>
          <tr>
          <td>7. Anak ke </td>
          <td>: ' . $siswa['ank_ke'] . '</td>
          </tr>
          <tr>
          <td>8. Jumlah saudara </td>
          <td>: ' . $siswa['jml_sdra_kndung'] . ' orang, Tiri ' . $siswa['jml_sdra_tiri'] . ' orang, Angkat ' . $siswa['jml_sdra_angkat'] . ' orang</td>
          </tr>
          <tr>
          <td>9. Anak yatim/piatu/yatim piatu </td>
          <td>: ' . $siswa['status_ortu'] . '</td>
          </tr>
          <tr>
          <td>10. Bahasa sehari-hari </td>
          <td>: ' . $siswa['bhs_daily'] . '</td>
          </tr>

          </tbody>
          </table>


<p style="margin:0;" class="fs-6 fw-bold text-uppercase">B. Keterangan tempat tinggal Siswa </p>

<ul class="ml-2 list-unstyled">

<li>11. Alamat Peserta Didik : ' . $siswa['alamat_siswa'] . '</li>

<li>12. Selama bersekolah tinggal dengan : ' . $siswa['tinggal_dgn'] . '</li>


<li>13. Jarak dari tempat tinggal ke sekolah : ' . $siswa['jrak_kesekolah'] . '</li>


<li>14. Ke sekolah dengan kendaraan / jalan kaki : ' . $siswa['kesekolah_dgn'] . '</li>
</ul  >



<p style="margin:0;" class="fs-6 fw-bold text-uppercase">C. Keterangan jasmani dan kesehatan siswa </p>

<table class="ml-2 list-unstyled">
<tbody>
<tr>
<td>15. Berat badan tahun ini</td>
<td>: ' . $siswa['berat_badan_1'] . '</td>
</tr>
<tr>
<td>16. Tinggi badan tahun ini </td>
<td>: ' . $siswa['tinggi_badan_1'] . '</td>
</tr>
<tr>
<td>17. Golongan darah </td>
<td>: ' . $siswa['gol_darah'] . '</td>
</tr>


</tbody>
</table>

<ul style="margin:0;" class="ml-2 list-unstyled">

<li>18. Penyakit yang pernah diderita (sakit berat yang memerlukan perawatan khusus) :
<div>
</div>
</li>
</ul>

<p style="margin:0;" class="fs-6 fw-bold text-uppercase">D. Keterangan intelegensi, kepribadian dan prestasi siswa</p>
<ul class="ml-2 list-unstyled">
<li>19. Intelegensi (IQ) : ' . $iqSiswa . ', berdasarkan tes pada tanggal </li>
<li>20. Kepribadian
<div>

</div>
</li>

<li>21. Keikutsertaan/Prestasi yang pernah dicapai dalam bidang :


</li>

<li>22. Penerimaan bea siswa :
</li>
</ul>


<p class="fs-6 fw-bold text-uppercase">E. Lain-lain</p>
<ul class="ml-2 list-unstyled">
<li>23. Catatan penting selama siswa belajar di sekolah ini :
<ul class="ml-4 list-unstyled">
<li> ' . $catatanUntukSiswa . '</li>
</li>
</ul>

<p class="fs-6 fw-bold text-uppercase">F. Keterangan tentang pendidikan sebelumnya </p>
<ul style="vertical-align:top;" class="ml-2 list-unstyled">
<li>24. Diterima di sekolah ini sebagai siswa baru tanggal : ' . $siswa['sswa_bru_ditgl'] . '
<ul class="ml-2 list-unstyled">

<li>Asal Sekolah Dasar : ' . $siswa['asl_sklah'] . '</li>
<li>Alamat : ' . $siswa['alamat_siswa'] . '</li>
<li>Tanggal dan No. Ijazah : ' . $siswa['tgl_nmr_ijazah'] . '</li>
</ul>

</li>
<li>25. Diterima di sekolah ini sebagai siswa pindahan pada tanggal : ' . $siswa['sswa_pndhan_ditgl'] . '
<ul class="ml-2 list-unstyled">

<li>Di kelas : ' . $siswa['pndh_di_kls'] . '</li>


<li>Dari Sekolah : ' . $siswa['nmskolah_pndahan'] . '</li>


<li>Alamat : ' . $siswa['alamat_siswa'] . '</li>


<li>Asal SD / No. Ijazah : ' . $siswa['alamat_sklh_pndahn'] . '</li>


<li>Alamat : ' . $siswa['alamat_siswa'] . '</li>


<li>Alasan pindah ke sekolah ini : ' . $siswa['alasan_pindah_kesini'] . '</li>
</ul>

<div class="footer1">1</div>

 </div>
 </div>
 </div>

<div class="page"></div>

<div  class="col-12">
<div class="card-induk">
<div class="body-induk">
<p  style="margin:0;" class="fs-6 fw-bold text-uppercase">G. Keterangan tentang orang tua kandung </p>
<ul class="ml-2 list-unstyled">
<li>
<div><table class="table-bordered table table-hover">
          <thead>
          <tr>
                  <th>26. Data orang tua kandung</th>
                  <th>Ayah</th>
                  <th>Ibu</th>

          </tr>
          </thead>
          <tbody>
<tr>
<td>Nama</td>
<td>' . $siswa['ayah'] . '</td>
<td>' . $siswa['ibu'] . '</td>
</tr>
<tr>

<td>Tempat & tanggal lahir</td>
<td>' . $siswa['ttl_ayah'] . '</td>
<td>' . $siswa['ttl_ibu'] . '</td>

</tr>
<tr>
<td>Kewarganegaraan</td>
<td>' . $siswa['negara_ayah'] . '</td>
<td>' . $siswa['negara_ibu'] . '</td>

</tr>
<tr>
<td>Pendidikan tertinggi</td>
<td>' . $siswa['pnddkan_akhir_ayah'] . '</td>
<td>' . $siswa['pnddkan_akhir_ibu'] . '</td>

</tr>
<tr>
<td>Pekerjaan</td>
<td>' . $siswa['job_ayah'] . '</td>
<td>' . $siswa['job_ibu'] . '</td>

</tr>
<tr>
<td>Penghasilan /bulan</td>
<td>' . $siswa['gaji_ayah'] . '</td>
<td>' . $siswa['gaji_ibu'] . '</td>

</tr>
<tr>
<td>Alamat</td>
<td style="font-size:.7em;">' . $siswa['alamat_siswa'] . '</td>
<td style="font-size:.7em;">' . $siswa['alamat_siswa'] . '</td>
</tr>

          </tbody>
              </table></div>
</li>
</ul>



<p style="vertical-align:top;" class="fs-6 fw-bold text-uppercase">H. Keterangan tentang wali</p>
<ul class="ml-2 list-unstyled">
<li>
<div><table class="table-bordered table table-hover">
          <thead>
          <tr>
                  <th>27. Data Wali</th>
                  <th>Laki-laki</th>
                  <th>Perempuan</th>

          </tr>
          </thead>
          <tbody>
<tr>
<td>Nama</td>
<td>' . $siswa['wali'] . '</td>
<td>' . $siswa['ibu'] . '</td>
</tr>
<tr>

<td>Tempat & tanggal lahir</td>
<td>' . $siswa['ttl_wali'] . '</td>
<td>' . $siswa['ttl_ibu'] . '</td>

</tr>
<tr>
<td>Kewarganegaraan</td>
<td>' . $siswa['negara_wali'] . '</td>
<td>' . $siswa['negara_ibu'] . '</td>

</tr>
<tr>
<td>Pendidikan tertinggi</td>
<td>' . $siswa['pnddkn_akhir_wali'] . '</td>
<td>' . $siswa['pnddkan_akhir_ibu'] . '</td>

</tr>
<tr>
<td>Pekerjaan</td>
<td>' . $siswa['job_wali'] . '</td>
<td>' . $siswa['job_ibu'] . '</td>

</tr>
<tr>
<td>Penghasilan /bulan</td>
<td>' . $siswa['gaji_wali'] . '</td>
<td>' . $siswa['gaji_ibu'] . '</td>

</tr>
<tr>
<td>Alamat</td>
<td style="font-size:.6em;">' . $siswa['alamat_siswa'] . '</td>
<td style="font-size:.6em;">' . $siswa['alamat_siswa'] . '</td>
</tr>
<tr>
<td>Hubungan dengan siswa</td>
<td>' . $siswa['status_dgn_sswa'] . '</td>
<td>' . $siswa['almt_ibu'] . '</td>
</tr>

          </tbody>
              </table></div>
</li>
</ul>





<p class="fs-6 fw-bold text-uppercase">I. Keterangan kehadiran</p>
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
<td rowspan="2" >Kelas : ' . $kls1 . ' </td>
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
<td rowspan="2" >Kelas : ' . $kls2 . '</td>
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
<td rowspan="2" >Kelas : ' . $kls3 . '</td>
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



<div class="footer">2</div>

<p style="margin:0;" class="fs-6 fw-bold text-uppercase">I. Meninggalkan sekolah</p>


<ul class="ml-2 list-unstyled">
<li>29. Tamat Belajar : Tanggal  ' . $tglTamat . ' , No. Ijazah : ' . $siswa['pndh_di_kls'] . '

<table class="ml-2 list-unstyled">
<tbody>
<td>Melanjutkan sekolah ke </td>
<td>: ' . $siswa['pndh_di_kls'] . '</td>
</tr>
<tr>
<td>Alamat </td>
<td>: ' . $siswa['alamat_siswa'] . '</td>
</tr>
</tbody>
</table>

</li>

<li>30. Pindah sekolah ke :

<table class="ml-2 list-unstyled">
<tbody>
<tr>
<td>Tanggal pindah</td>
<td>:  Tanggal : ' . $tglPindah . ' ,  dari kelas : ' . $siswa['pndh_di_kls'] . '</td>
</tr>
<tr>
<td>Alamat sekolah </td>
<td>: ' . $siswa['alamat_siswa'] . '</td>
</tr>
<tr>
<td>Alasan pindah </td>
<td>: ' . $siswa['pndh_di_kls'] . '</td>
</tr>
</tbody>
</table>
</li>
</ul>

        </div>
      </div>
    </div>
    </div>

  </section>
</div>
</body>
</html>';

// load HTML content
        // $dompdf->loadHtml(view('smaContent/detailInduk', $data));
        $dompdf->loadHtml($html);

// (optional) setup the paper size and orientation
        $dompdf->setPaper('legal', 'potratrait');

// render html as PDF
        $dompdf->render();
// output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream("$namaFile.pdf", array("Attachment" => false));
        exit(0);
    }

    public function generatePeserta1($thn_ajaran_1)
    {
        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';
        $namaFile = 'DaftarPeserta_1_TA_' . $thn_ajaran_1 . '.pdf';
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit(50, 0)->get()->getResultArray();
        // dd($siswa);
        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');

        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'title' => 'Daftar Peserta 1',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // load HTML content
        $dompdf->loadHtml(view('smaContent/cetakInduk/daftarInduk', $data));
        // $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('legal', 'potratrait');

        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream($namaFile, array("Attachment" => false));
        exit(0);
    }

    public function generatePeserta2($thn_ajaran_1)
    {
        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';
        $namaFile = 'DaftarPeserta_2_TA_' . $thn_ajaran_1 . '.pdf';
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit(50, 50)->get()->getResultArray();
        // dd($siswa);
        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');

        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'title' => 'Daftar Peserta 2',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // load HTML content
        $dompdf->loadHtml(view('smaContent/cetakInduk/daftarInduk', $data));
        // $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('legal', 'potratrait');

        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream($namaFile, array("Attachment" => false));
        exit(0);
    }

    public function generatePeserta3($thn_ajaran_1)
    {
        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';
        $namaFile = 'DaftarPeserta_3_TA_' . $thn_ajaran_1 . '.pdf';
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit(50, 100)->get()->getResultArray();
        // dd($siswa);
        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');

        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'title' => 'Daftar Peserta 3',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // load HTML content
        $dompdf->loadHtml(view('smaContent/cetakInduk/daftarInduk', $data));
        // $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('legal', 'potratrait');

        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream($namaFile, array("Attachment" => false));
        exit(0);
    }

    public function generatePeserta4($thn_ajaran_1)
    {
        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';
        $namaFile = 'DaftarPeserta_4_TA_' . $thn_ajaran_1 . '.pdf';
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit(50, 150)->get()->getResultArray();
        // dd($siswa);
        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');

        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'title' => 'Daftar Peserta 4',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // load HTML content
        $dompdf->loadHtml(view('smaContent/cetakInduk/daftarInduk', $data));
        // $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('legal', 'potratrait');

        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream($namaFile, array("Attachment" => false));
        exit(0);
    }

    public function generatePeserta5($thn_ajaran_1)
    {
        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';
        $namaFile = 'DaftarPeserta_5_TA_' . $thn_ajaran_1 . '.pdf';
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit(50, 200)->get()->getResultArray();
        // dd($siswa);
        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');

        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'title' => 'Daftar Peserta 5',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // load HTML content
        $dompdf->loadHtml(view('smaContent/cetakInduk/daftarInduk', $data));
        // $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('legal', 'potratrait');

        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream($namaFile, array("Attachment" => false));
        exit(0);
    }

    public function generatePeserta6($thn_ajaran_1)
    {
        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';
        $namaFile = 'DaftarPeserta_6_TA_' . $thn_ajaran_1 . '.pdf';
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit(50, 250)->get()->getResultArray();
        // dd($siswa);
        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');

        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'title' => 'Daftar Peserta 6',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // load HTML content
        $dompdf->loadHtml(view('smaContent/cetakInduk/daftarInduk', $data));
        // $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('legal', 'potratrait');

        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream($namaFile, array("Attachment" => false));
        exit(0);
    }

    public function generatePeserta7($thn_ajaran_1)
    {
        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';
        $namaFile = 'DaftarPeserta_7_TA_' . $thn_ajaran_1 . '.pdf';
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit(50, 300)->get()->getResultArray();
        // dd($siswa);
        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');

        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'title' => 'Daftar Peserta 7',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // load HTML content
        $dompdf->loadHtml(view('smaContent/cetakInduk/daftarInduk', $data));
        // $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('legal', 'potratrait');

        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream($namaFile, array("Attachment" => false));
        exit(0);
    }

    public function generatePeserta8($thn_ajaran_1)
    {
        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';
        $namaFile = 'DaftarPeserta_8_TA_' . $thn_ajaran_1 . '.pdf';
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit(50, 350)->get()->getResultArray();
        // dd($siswa);
        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');

        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'title' => 'Daftar Peserta 8',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // load HTML content
        $dompdf->loadHtml(view('smaContent/cetakInduk/daftarInduk', $data));
        // $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('legal', 'potratrait');

        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream($namaFile, array("Attachment" => false));
        exit(0);
    }

    public function generatePeserta9($thn_ajaran_1)
    {
        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';
        $namaFile = 'DaftarPeserta_9_TA_' . $thn_ajaran_1 . '.pdf';
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit(50, 400)->get()->getResultArray();
        // dd($siswa);
        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');

        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'title' => 'Siswa',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // load HTML content
        $dompdf->loadHtml(view('smaContent/cetakInduk/daftarInduk', $data));
        // $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('legal', 'potratrait');

        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream($namaFile, array("Attachment" => false));
        exit(0);
    }

    public function generatePeserta10($thn_ajaran_1)
    {
        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';
        $namaFile = 'DaftarPeserta_10_TA_' . $thn_ajaran_1 . '.pdf';
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit(50, 450)->get()->getResultArray();
        // dd($siswa);
        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');

        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'title' => 'Siswa',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // load HTML content
        $dompdf->loadHtml(view('smaContent/cetakInduk/daftarInduk', $data));
        // $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('legal', 'potratrait');

        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream($namaFile, array("Attachment" => false));
        exit(0);
    }
    public function sampulInduk()
    {
        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $path = base_url() . '/public/assets/images/profile/logo_dk.jpg';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $dataPath = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($dataPath);
        // dd($siswa);
        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');

        $data = [
            'dt7a' => $dataSiswa,
            'logo' => $base64,
            'totalSiswa' => $totalSiswa,
            'title' => 'Sampul Buku Induk',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // load HTML content
        $dompdf->loadHtml(view('smaContent/cetakInduk/sampulInduk', $data));
        // $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'potratrait');
        // $dompdf->setPaper('legal', 'potratrait');

        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream("lembar_pengesahan_buku_induk.pdf", array("Attachment" => false));
        exit(0);
    }
    public function pengesahanInduk()
    {
        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        // dd($siswa);
        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');

        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'title' => 'Pengesahan Buku Induk',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // load HTML content
        $dompdf->loadHtml(view('smaContent/cetakInduk/pengesahanInduk', $data));
        // $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'potratrait');
        // $dompdf->setPaper('legal', 'potratrait');

        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream("lembar_pengesahan_buku_induk.pdf", array("Attachment" => false));
        exit(0);
    }
    public function pemeriksaanInduk()
    {
        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        // dd($siswa);
        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');

        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'title' => 'Pemeriksaan Buku Induk',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // load HTML content
        $dompdf->loadHtml(view('smaContent/cetakInduk/pemeriksaanInduk', $data));
        // $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('legal', 'potratrait');

        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream("lembar_pemeriksaan_buku_induk.pdf", array("Attachment" => false));
        exit(0);
    }
    public function generatePdfRapi($slug)
    {

        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->getsma($slug);
        // dd($siswa);
        // dd($dataSiswa);
        $data = [
            'dt7a' => $dataSiswa,
            'linksma' => '/smaVIIA',
            'link7a' => '/smaVIIA',
            'link7b' => '/smaVIIB',
            'link7c' => '/smaVIIC',
            'link7d' => '/smaVIID',
            'link7e' => '/smaVIIE',
            'link7f' => '/smaVIIF',
            'link8a' => '/smaVIIIA',
            'link8b' => '/smaVIIIB',
            'link8c' => '/smaVIIIC',
            'link8d' => '/smaVIIID',
            'link8e' => '/smaVIIIE',
            'link9a' => '/smaIXA',
            'link9b' => '/smaIXB',
            'link9c' => '/smaIXC',
            'link9d' => '/smaIXD',
            'link9e' => '/smaIXE',
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'title' => 'Siswa',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];

        // instantiate and use the dompdf class
        $options = new Options();
        $dompdf = new Dompdf($options);
        $options->set('defaultFont', 'Arial');
        $path = base_url() . '/public/assets/images/dk20_21/sma/kls7/7a/' . $siswa['img_1'];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $dataPath = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($dataPath);

        if ($siswa['gender_siswa'] == 'Laki-laki') {
            $gender = "Laki-Laki ( L )";
        }
        if ($siswa['gender_siswa'] == 'Perempuan') {
            $gender = "Perempuan ( P )";
        };
        if ($siswa['tgl_tmat'] == '-') {
            $tglTamat = "....................";
        }
        if ($siswa['tgl_pndah'] == '-') {
            $tglPindah = "....................";
        }
        if ($siswa['iq_siswa_1'] == '-') {
            $iqSiswa = "......";
        }
        if ($siswa['nerima_beasiswa_thn1'] == '-') {
            $beaSiswa1 = "........";
        }
        if ($siswa['nerima_beasiswa_thn2'] == '-') {
            $beaSiswa2 = "........";
        }
        if ($siswa['nerima_beasiswa_thn3'] == '-') {
            $beaSiswa3 = "........";
        }
        if ($siswa['kls_1'] == '-') {
            $kls1 = "........";
        } else {
            $kls1 = $siswa['kls_1'];
        }
        if ($siswa['kls_2'] == '-') {
            $kls2 = "........";
        } else {
            $kls2 = $siswa['kls_2'];
        }
        if ($siswa['kls_3'] == '-') {
            $kls3 = "........";
        } else {
            $kls3 = $siswa['kls_3'];
        }
        if ($siswa['catatan_siswa_di_sklh'] == '-') {
            $catatanUntukSiswa = "<span>...............................................................</span><br>
          <span>...............................................................</span><br>
          <span>...............................................................</span><br>";
        }

        $html = ' <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>' . $siswa['nama_lengkap_siswa'] . '</title>
 </head>


';

        $html .= '

<style>
  *,
*::before,
*::after {
  box-sizing: border-box;
}
@page{
    margin:0;
    padding0;
}
html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

body {
    margin:0;
    padding0;
  font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-weight: 400;
  line-height: 1.4;
  color: #212529;
  text-align: left;
  /* background: rgb(2,0,36); */
  /* background: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);  */
}
.col-10, .col-2{
  position: relative;
  width: 100%;
  padding-right: 7.5px;
  padding-left: 7.5px;
}
.content{
 position:relative;
}
.box{
    //   position:absolute;
    display: inline-block;
    }
.col-2{
  -ms-flex: 0 0 16.666667%;
  flex: 0 0 16.666667%;
  max-width: 15%;
  float:left;
  z-index:2;
  /* background: rgb(216, 59, 255);  */
}

.col-10 {
  // background: rgb(35, 204, 255);
  -ms-flex: 0 0 83.333333%;
  flex: 0 0 83.333333%;
  max-width:85%;
  float:right;
}

.card1 {
  position: relative;
  min-width: 0;
  width: 100px;
  height: 80px;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: black solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
  text-align: center;
  margin-top: 20px;
  margin-left:10%;
}
.card-header1 {
  margin-bottom: 0;
  color: white;
  font-weight: bold;
  background-color: rgba(0, 0, 0, 1);
  border-bottom: 0 solid rgba(0, 0, 0, 0.125);
}
.card-body1 {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  min-height: 1px;
  font-weight: bold;
  font-size: 2.2em;
}


.card {
  position: relative;
  min-width: 0;
  width: 95px;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border-radius: 0.25rem;
  text-align: center;
  margin-top: 30px;
  margin-left:10%;
}

.card-body {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  background-color: #fff;
  font-size: .5em;
  padding-top: 2.5rem;
  padding-bottom: .3rem;
}
.page{
  width:100%;
  height:100%;
}
.bg-img{
  position: relative;
  height: 120px;
  width:100px;
  overflow: hidden;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  border-style: none;
  border:black solid 1px;
}
.card-img{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.card-induk{
  position: relative;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 0 solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}
.body-induk{
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  min-height: 1px;
  padding: 1.25rem;

}
.text-uppercase{
text-transform: uppercase !important;
font-weight: bolder;
}
.list-unstyled {
    font-size:.9em;
  padding-left: 1.3rem;
  list-style: none;
}
.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
  background-color: transparent;
}

.table th,
.table td {
  padding: .1rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
  text-align: center;

}
.table-bordered {
  border: 1px solid #787878;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #b8b8b8;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}
.tai{
  }
  .txt-poto{
  margin-top:25%;
  margin-bottom:25%;
}
.awal{
  margin:0;
}
.col-12{
}
.footer1{

  position:absolute;
  bottom:1%;
  left:40%;
}
.footer{
   position:absolute;
  bottom:1%;
  left:49%;
}
</style>
<body>
<div style="position:relative;">
  <section class="content">


    <div class="tai">
    <div class="col-2">

      <div class="card1">
        <div class="card-header1">
          <span>No. Urut</span>
        </div>
        <div class="card-body1">
          <span></span>
        </div>
      </div>
      <div class="card">
        <div class="bg-img">
<div class="txt-poto">
          <span>Pas Photo</span> <br>
          <span  >3 x 4</span>
          </div>
        </div>
        <div class="card-body">
          <span >(' . $siswa['nama_lengkap_siswa'] . ')</span>
        </div>
      </div>
      <div class="card">
        <div class="bg-img">
         <div class="txt-poto">
          <span>Pas Photo</span> <br>
          <span  >3 x 4</span>
          </div>
        </div>
        <div class="card-body">
          <span >(' . $siswa['nama_lengkap_siswa'] . ')</span>
        </div>
      </div>
      <div class="card">
        <div class="bg-img">
         <div class="txt-poto">
          <span>Pas Photo</span> <br>
          <span  >3 x 4</span>
          </div>
        </div>
        <div class="card-body">
          <span >(' . $siswa['nama_lengkap_siswa'] . ')</span>
        </div>
      </div>
      <div class="card">
        <div class="bg-img">
         <div class="txt-poto">
          <span>Pas Photo</span> <br>
          <span  >3 x 4</span>
          </div>
        </div>
        <div class="card-body">
          <span >(' . $siswa['nama_lengkap_siswa'] . ')</span>
        </div>
      </div>
    </div>

    <div  class="col-10">
    <div class="card-induk">
      <div class="body-induk">
        <h2 class="awal text-uppercase"> LEMBAR BUKU INDUK PESERTA DIDIK sma </h2>
          <table class="ml-2 list-unstyled">
          <tbody>
          <tr>
          <td>Nomor Induk</td>
          <td>: ' . $siswa['nis_siswa_sma'] . '</td>
          </tr>
          <tr>
          <td>NISN </td>
          <td>: ' . $siswa['nisn'] . '</td>
          </tr>
          </tbody>
          </table>

        <p style="margin:0;" class=" text-uppercase">B. Keterangan tempat tinggal Siswa </p>

        <table class="ml-2 list-unstyled">
          <tbody>
          <tr>
          <td>1. Nama lengkap</td>
          <td>: ' . $siswa['nama_lengkap_siswa'] . '</td>
          </tr>
          <tr>
          <td>2. Nama Panggilan </td>
          <td>: - </td>
          </tr>
          <tr>
          <td>3. Jenis Kelamin </td>
          <td>: ' . $gender . '</td>
          </tr>
          <tr>
          <td>4. Tempat dan tanggal lahir </td>
          <td>: ' . $siswa['tmp_lahir_siswa'] . ', ' . date('d F Y', strtotime($siswa['tgl_lahir_siswa'])) . '</td>
          </tr>
          <tr>
          <td>5. Agama </td>
          <td>: ' . $siswa['agama_siswa'] . '</td>
          </tr>
          <td>6. Kewarganegaraan </td>
          <td>: ' . $siswa['negara_siswa'] . '</td>
          </tr>
          <tr>
          <td>7. Anak ke </td>
          <td>: ' . $siswa['ank_ke'] . '</td>
          </tr>
          <tr>
          <td>8. Jumlah saudara </td>
          <td>: ' . $siswa['jml_sdra_kndung'] . ' orang, Tiri ' . $siswa['jml_sdra_tiri'] . ' orang, Angkat ' . $siswa['jml_sdra_angkat'] . ' orang</td>
          </tr>
          <tr>
          <td>9. Anak yatim/piatu/yatim piatu </td>
          <td>: ' . $siswa['status_ortu'] . '</td>
          </tr>
          <tr>
          <td>10. Bahasa sehari-hari </td>
          <td>: ' . $siswa['bhs_daily'] . '</td>
          </tr>

          </tbody>
          </table>


<p style="margin:0;" class="fs-6 fw-bold text-uppercase">B. Keterangan tempat tinggal Siswa </p>

<table class="ml-2 list-unstyled">
<tbody>
<tr>
<td>11. Alamat Peserta Didik</td>
<td>: ' . $siswa['alamat_siswa'] . '</td>
</tr>
<tr>
<td>12. Selama bersekolah tinggal dengan </td>
<td>: ' . $siswa['tinggal_dgn'] . '</td>
</tr>
<tr>
<td>13. Jarak dari tempat tinggal ke sekolah </td>
<td>: ' . $siswa['jrak_kesekolah'] . '</td>
</tr>
<tr>
<td>14. Ke sekolah dengan kendaraan / jalan kaki </td>
<td>: ' . $siswa['kesekolah_dgn'] . '</td>
</tr>


</tbody>
</table>

<p style="margin:0;" class="fs-6 fw-bold text-uppercase">C. Keterangan jasmani dan kesehatan siswa </p>

<table class="ml-2 list-unstyled">
<tbody>
<tr>
<td>15. Berat badan tahun ini</td>
<td>: ' . $siswa['berat_badan_1'] . '</td>
</tr>
<tr>
<td>16. Tinggi badan tahun ini </td>
<td>: ' . $siswa['tinggi_badan_1'] . '</td>
</tr>
<tr>
<td>17. Golongan darah </td>
<td>: ' . $siswa['gol_darah'] . '</td>
</tr>


</tbody>
</table>

<ul style="margin:0;" class="ml-2 list-unstyled">

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
<td>' . $siswa['pnykit_berat_1'] . '</td>
<td>' . $siswa['trjngkit_saat_kls_1'] . '</td>
<td>' . $siswa['trjngkit_di_thn_1'] . '</td>
<td>' . $siswa['trjngkit_selama_1'] . '</td>
<td>' . $siswa['ketrngan_1'] . '</td>
</tr>
<tr>
<td>2.</td>
<td>' . $siswa['pnykit_berat_2'] . '</td>
<td>' . $siswa['trjngkit_saat_kls_2'] . '</td>
<td>' . $siswa['trjngkit_di_thn_2'] . '</td>
<td>' . $siswa['trjngkit_selama_2'] . '</td>
<td>' . $siswa['ketrngan_2'] . '</td>
</tr>
<tr>
<td>3.</td>
<td>' . $siswa['pnykit_berat_3'] . '</td>
<td>' . $siswa['trjngkit_saat_kls_3'] . '</td>
<td>' . $siswa['trjngkit_di_thn_3'] . '</td>
<td>' . $siswa['trjngkit_selama_3'] . '</td>
<td>' . $siswa['ketrngan_3'] . '</td>
</tr>
          </tbody>
              </table></div>
</li>
<li>19. Kelainan jasmaniah / lainnya : ' . $siswa['kelainan_lainnya'] . '</li>
</ul>



<p class="fs-6 fw-bold text-uppercase">D. Keterangan tentang pendidikan sebelumnya </p>
<ul style="vertical-align:top;" class="ml-2 list-unstyled">
<li>20. Diterima di sekolah ini sebagai siswa baru tanggal : ' . $siswa['sswa_bru_ditgl'] . '
<table class="ml-2 list-unstyled">
<tbody>
<tr>
<td>Asal Sekolah Dasar</td>
<td>: ' . $siswa['asl_sklah'] . '</td>
</tr>
<tr>
<td>Alamat </td>
<td>: ' . $siswa['alamat_siswa'] . '</td>
</tr>
<tr>
<td>Tanggal dan No. Ijazah </td>
<td>: ' . $siswa['tgl_nmr_ijazah'] . '</td>
</tr>


</tbody>
</table>

</li>
<li>21. Diterima di sekolah ini sebagai siswa pindahan pada tanggal : ' . $siswa['sswa_pndhan_ditgl'] . '
<table class="ml-2 list-unstyled">
<tbody>
<tr>
<td>Di kelas</td>
<td>: ' . $siswa['pndh_di_kls'] . '</td>
</tr>
<tr>
<td>Dari sma </td>
<td>: ' . $siswa['nmskolah_pndahan'] . '</td>
</tr>
<tr>
<td>Alamat </td>
<td>: ' . $siswa['alamat_siswa'] . '</td>
</tr>
<tr>
<td>Asal SD / No. Ijazah </td>
<td>: ' . $siswa['alamat_sklh_pndahn'] . '</td>
</tr>
<tr>
<td>Alamat </td>
<td>: ' . $siswa['alamat_siswa'] . '</td>
</tr>
<tr>
<td>Alasan pindah ke sekolah ini </td>
<td>: ' . $siswa['alasan_pindah_kesini'] . '</td>
</tr>


</tbody>
</table>

<div class="footer1">1</div>
 </div>
 </div>
 </div>

<div class="page"></div>

<div  class="col-12">
<div class="card-induk">
<div class="body-induk">
<p  style="margin:0;" class="fs-6 fw-bold text-uppercase">E. Keterangan tentang orang tua kandung </p>
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
<td>' . $siswa['ayah'] . '</td>
<td>' . $siswa['ibu'] . '</td>
</tr>
<tr>

<td>Tempat & tanggal lahir</td>
<td>' . $siswa['ttl_ayah'] . '</td>
<td>' . $siswa['ttl_ibu'] . '</td>

</tr>
<tr>
<td>Kewarganegaraan</td>
<td>' . $siswa['negara_ayah'] . '</td>
<td>' . $siswa['negara_ibu'] . '</td>

</tr>
<tr>
<td>Pendidikan tertinggi</td>
<td>' . $siswa['pnddkan_akhir_ayah'] . '</td>
<td>' . $siswa['pnddkan_akhir_ibu'] . '</td>

</tr>
<tr>
<td>Pekerjaan</td>
<td>' . $siswa['job_ayah'] . '</td>
<td>' . $siswa['job_ibu'] . '</td>

</tr>
<tr>
<td>Penghasilan rata-rata /bulan/tahun</td>
<td>' . $siswa['gaji_ayah'] . '</td>
<td>' . $siswa['gaji_ibu'] . '</td>

</tr>
<tr>
<td>Alamat</td>
<td style="font-size:.7em;">' . $siswa['alamat_siswa'] . '</td>
<td style="font-size:.7em;">' . $siswa['alamat_siswa'] . '</td>
</tr>

          </tbody>
              </table></div>
</li>
</ul>

<p style="vertical-align:top;" class="fs-6 fw-bold text-uppercase">F. Keterangan tentang wali</p>
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
<td>' . $siswa['wali'] . '</td>
<td>' . $siswa['ibu'] . '</td>
</tr>
<tr>

<td>Tempat & tanggal lahir</td>
<td>' . $siswa['ttl_wali'] . '</td>
<td>' . $siswa['ttl_ibu'] . '</td>

</tr>
<tr>
<td>Kewarganegaraan</td>
<td>' . $siswa['negara_wali'] . '</td>
<td>' . $siswa['negara_ibu'] . '</td>

</tr>
<tr>
<td>Pendidikan tertinggi</td>
<td>' . $siswa['pnddkn_akhir_wali'] . '</td>
<td>' . $siswa['pnddkan_akhir_ibu'] . '</td>

</tr>
<tr>
<td>Pekerjaan</td>
<td>' . $siswa['job_wali'] . '</td>
<td>' . $siswa['job_ibu'] . '</td>

</tr>
<tr>
<td>Penghasilan rata-rata /bulan/tahun</td>
<td>' . $siswa['gaji_wali'] . '</td>
<td>' . $siswa['gaji_ibu'] . '</td>

</tr>
<tr>
<td>Alamat</td>
<td style="font-size:.6em;">' . $siswa['alamat_siswa'] . '</td>
<td style="font-size:.6em;">' . $siswa['alamat_siswa'] . '</td>
</tr>
<tr>
<td>Hubungan dengan peserta didik</td>
<td>' . $siswa['status_dgn_sswa'] . '</td>
<td>' . $siswa['almt_ibu'] . '</td>
</tr>

          </tbody>
              </table></div>
</li>
</ul>

<div class="footer">2</div>



<p style="margin:0;" class="fs-6 fw-bold text-uppercase">G. Keterangan intelegensi, kepribadian dan prestasi siswa</p>
<ul class="ml-2 list-unstyled">
<li>24. Intelegensi (IQ) : ' . $iqSiswa . ', berdasarkan tes pada tanggal </li>
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
<td>' . $siswa['ayah'] . '</td>
<td>' . $siswa['ibu'] . '</td>
<td>' . $siswa['ibu'] . '</td>
</tr>
<tr>
<td>2</td>
<td>Prakarsa/kreativitas</td>
<td>' . $siswa['ttl_ayah'] . '</td>
<td>' . $siswa['ttl_ibu'] . '</td>
<td>' . $siswa['ttl_ibu'] . '</td>

</tr>
<tr>
<td>3</td>
<td>Tanggung jawab</td>
<td>' . $siswa['ayah'] . '</td>
<td>' . $siswa['ibu'] . '</td>
<td>' . $siswa['ibu'] . '</td>

</tr>
<tr>
<td>4</td>
<td>Penyesuaian diri</td>
<td>' . $siswa['pnddkan_akhir_ayah'] . '</td>
<td>' . $siswa['pnddkan_akhir_ibu'] . '</td>
<td>' . $siswa['pnddkan_akhir_ibu'] . '</td>

</tr>
<tr>
<td>5</td>
<td>Kemantapan emosi</td>
<td>' . $siswa['job_ayah'] . '</td>
<td>' . $siswa['job_ibu'] . '</td>
<td>' . $siswa['job_ibu'] . '</td>

</tr>
<tr>
<td>6</td>
<td>Kerjasama</td>
<td>' . $siswa['gaji_ayah'] . '</td>
<td>' . $siswa['gaji_ibu'] . '</td>
<td>' . $siswa['gaji_ibu'] . '</td>

</tr>
          </tbody>
              </table></div>
</li>

<li>26. Keikutsertaan/Prestasi yang pernah dicapai dalam bidang :

<table class="ml-4 list-unstyled">
<tbody>
<tr>
<td>a. Kesenian</td>
<td>: ' . $siswa['pndh_di_kls'] . '</td>
</tr>
<tr>
<td>b. Olahraga </td>
<td>: ' . $siswa['nmskolah_pndahan'] . '</td>
</tr>
<tr>
<td>c. Organisasi </td>
<td>: ' . $siswa['alamat_sklh_pndahn'] . '</td>
</tr>
<tr>
<td>d. Pramuka </td>
<td>: ' . $siswa['alamat_sklh_pndahn'] . '</td>
</tr>
<tr>
<td>e. Karya Tulis </td>
<td>: ' . $siswa['alamat_aslsekolah_before'] . '</td>
</tr>
<tr>
<td>f. Lainnya </td>
<td>: ' . $siswa['alasan_pindah_kesini'] . '</td>
</tr>


</tbody>
</table>

</li>

<li>27. Penerimaan bea siswa :
<ul class="ml-4 list-unstyled">
<li>Tahun : ' . $beaSiswa1 . ', dari : ' . $siswa['pndh_di_kls'] . '</li>
<li>Tahun : ' . $beaSiswa2 . ', dari : ' . $siswa['pndh_di_kls'] . '</li>
<li>Tahun : ' . $beaSiswa3 . ', dari : ' . $siswa['pndh_di_kls'] . '</li>
</ul>
</li>
</ul>
</div>
</div>
</div>

<div  class="col-12">
<div class="card-induk">
<div class="body-induk">

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
<td rowspan="2" >Kelas : ' . $kls1 . ' </td>
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
<td rowspan="2" >Kelas : ' . $kls2 . '</td>
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
<td rowspan="2" >Kelas : ' . $kls3 . '</td>
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



<div class="footer">3</div>

<p class="fs-6 fw-bold text-uppercase">I. Meninggalkan sekolah</p>


<ul class="ml-2 list-unstyled">
<li>29. Tamat Belajar : Tanggal  ' . $tglTamat . ' , No. Ijazah : ' . $siswa['pndh_di_kls'] . '

<table class="ml-2 list-unstyled">
<tbody>
<td>Melanjutkan sekolah ke </td>
<td>: ' . $siswa['pndh_di_kls'] . '</td>
</tr>
<tr>
<td>Alamat </td>
<td>: ' . $siswa['alamat_siswa'] . '</td>
</tr>
</tbody>
</table>

</li>

<li>30. Pindah sekolah ke :

<table class="ml-2 list-unstyled">
<tbody>
<tr>
<td>Tanggal pindah</td>
<td>:  Tanggal : ' . $tglPindah . ' ,  dari kelas : ' . $siswa['pndh_di_kls'] . '</td>
</tr>
<tr>
<td>Alamat sekolah </td>
<td>: ' . $siswa['alamat_siswa'] . '</td>
</tr>
<tr>
<td>Alasan pindah </td>
<td>: ' . $siswa['pndh_di_kls'] . '</td>
</tr>
</tbody>
</table>
</li>
</ul>
<p class="fs-6 fw-bold text-uppercase">J. Lain-lain</p>
<ul class="ml-2 list-unstyled">
<li>32. Catatan penting selama siswa belajar di sekolah ini :
<ul class="ml-4 list-unstyled">
<li> ' . $catatanUntukSiswa . '</li>
</li>
</ul>

        </div>
      </div>
    </div>
    </div>

  </section>
</div>
</body>
</html>';

// load HTML content
        // $dompdf->loadHtml(view('smaContent/detailInduk', $data));
        $dompdf->loadHtml($html);

// (optional) setup the paper size and orientation
        $dompdf->setPaper('legal', 'potratrait');

// render html as PDF
        $dompdf->render();
// output the generated pdf
        // $dompdf->stream($filename);
        $dompdf->stream('namaFile.pdf', array("Attachment" => false));
        exit(0);
    }
}
