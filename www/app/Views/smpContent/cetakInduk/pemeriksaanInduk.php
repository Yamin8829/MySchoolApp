<!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Print Daftar Peserta KUH</title>
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
     .body-induk{
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      margin-top: 0;
      padding: .25rem;

    }
    .body-induk h2{
        margin-top: 0;
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
     </style>
     <body>
     <div style="position:relative;">
       <section class="content">
       <div class="body-induk">
       <h2 class="awal text-uppercase">Pemeriksaan Buku Induk Register Peserta Didik</h2>
      <table class="table table-bordered">
      <thead>
      <tr>
      <th>No.</th>
      <th>Tanggal</th>
      <th>Nama Pemeriksa</th>
      <th>Jabatan</th>
      <th>Keterangan</th>
      </tr>
      </thead>

      <tbody>
<?php for ($i = 1; $i < 31; $i++) {?>
    <tr>
    <td> <div style="color:white;">.</div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<?php }?>


      </tbody>
      </table>
</div>
       </section>
     </div>
     </body>
     </html>
