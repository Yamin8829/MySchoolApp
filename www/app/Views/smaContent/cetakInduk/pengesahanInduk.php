<!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> <?=$title;?></title>
      </head>

      <style>
       *,
     *::before,
     *::after {
       box-sizing: border-box;
     }
     @page{
         margin:0;
         padding:0;
     }
     html {
       font-family: sans-serif;
       line-height: 1.15;
       -webkit-text-size-adjust: 100%;
       -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
     }

     body {
         margin:0;
         padding:0;
       font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
       font-weight: 400;
       line-height: 1.4;
       color: #212529;
       text-align: left;
       /* background: rgb(2,0,36); */
       /* background: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);  */
     }
     /* .body-induk{
      border: red solid 1px;

    } */
    .body-induk h2{
        text-align: center;
    }
    .body-induk table{
        margin-top: 0;
        text-align: center;
    }
    .table {
      width: 100%;
padding: 1px;
      color: #212529;
      background-color: transparent;
    }

    .table th,
    .table td {
      padding: .4rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
    }

    .table thead th {
      vertical-align: bottom;
      border-bottom: 1px solid #dee2e6;
      text-align: center;

    }
    .table-bordered {
      border: 1px solid #787878;
    }

    .table-bordered th,
    .table-bordered td {
      border: 1px solid #b8b8b8;
    }
    .text-uppercase{
text-transform: uppercase !important;
font-weight: bolder;
}
    .table-bordered thead th,
    .table-bordered thead td {
      border-bottom-width: 1px;
    }
    .ktk1{
        float: left;
        width: 100%;
        height: 200px;
        /* background-color: greenyellow; */
        position: absolute;
        bottom: 50%;
        left: 0;
    }
    .ktk2{
        float: left;
        width: 50%;
        text-align: center;
        height: 200px;
        /* background-color: burlywood; */
        position: absolute;
        bottom:8%;
        left: 0;
    }
    .ktk3{
        float: right;
        width: 50%;
        height: 200px;
        text-align: center;
        /* background-color: blueviolet; */
        position: absolute;
        bottom: 5%;
        left: 0;
    }
     </style>
     <body>
     <div style="position:relative;">
       <section class="content">
       <div class="body-induk">
       <h2 class="text-uppercase">Lembar Pengesahan Buku Induk</h2>

        <div class="ktk1">
            <h3>KETERANGAN</h3>
            <P>Halaman <?php for ($i = 1; $i < 141; $i++) {?>.<?php }?> gagal</P>
            <P>Halaman <?php for ($i = 1; $i < 141; $i++) {?>.<?php }?> tidak terpakai</P>
            <p> Setiap pas photo harus ditandatangani oleh siswa yang bersangkutan dan dilengkapi cap tiga jari serta stempel sekolah</p>
        </div>

        <div class="ktk2">
            <p>Mengetahui : </p>
            <p>Kepala Sekolah,</p>
            <br>
            <br>
            <br>
            <p> ( <?php for ($i = 1; $i < 70; $i++) {?>.<?php }?> )</p>
            <p>NIP. : <?php for ($i = 1; $i < 60; $i++) {?>.<?php }?></p>
        </div>
        <div class="ktk3">
        <p>Petugas,</p>
            <br>
            <br>
            <br>
            <p> ( <?php for ($i = 1; $i < 70; $i++) {?>.<?php }?> )</p>
            <p>NIP. : <?php for ($i = 1; $i < 60; $i++) {?>.<?php }?></p>
        </div>

</div>
       </section>
     </div>
     </body>
     </html>
