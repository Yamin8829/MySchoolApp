<script>
  var genderChart = document.getElementById('genderChart');
  var data_siswa_gender = [];
  var label_siswa_gender = [];
  <?php foreach ($totalSiswaPerGender->getResult() as $key => $value): ?>
    data_siswa_gender.push(<?=$value->jumlahSiswa?>);
    label_siswa_gender.push('<?=$value->gender_siswa?>');
  <?php endforeach?>

  var data_siswa_per_gender = {
    datasets:[{
      label:'Jumlah Siswa',
      data:data_siswa_gender,
      backgroundColor:'rgba(255,99,132,0.8)',
    }],
    labels:label_siswa_gender,
  }


  var studentsChart = document.getElementById('studentsChart');
  var data_siswa_thn = [];
  var label_siswa_thn = [];

  <?php foreach ($totalSiswaPerThn->getResult() as $key => $value): ?>
    data_siswa_thn.push(<?=$value->jumlahSiswa2?>);
    label_siswa_thn.push('<?=$value->thn_ajaran_1?>');
  <?php endforeach?>

  var data_siswa_per_thn = {
    datasets:[{
      label:'Jumlah Siswa',
      data:data_siswa_thn,
      backgroundColor:'rgba(255,99,132,0.8)',
    }],
    labels:label_siswa_thn,
  }
  var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }


    var mutasiChart = document.getElementById('mutasiChart');
  var data_siswa_mutasi = [];
  var label_siswa_mutasi = [];

  <?php foreach ($totalSiswaPerMutasi->getResult() as $key => $value): ?>
    data_siswa_mutasi.push(<?=$value->jumlahSiswa3?>);
    label_siswa_mutasi.push('<?=$value->status?>');
  <?php endforeach?>

  var data_siswa_per_mutasi = {
    datasets:[{
      label:'Jumlah Siswa',
      data:data_siswa_mutasi,
      backgroundColor:'rgba(255,99,132,0.8)',
    }],
    labels:label_siswa_mutasi,
  }

  var chartTotalSiswaPerMutasi = new Chart(mutasiChart, {
    type:'bar',
    data:data_siswa_per_mutasi,
    options: barChartOptions
  })

  var chartTotalSiswaPerThn = new Chart(studentsChart, {
    type:'bar',
    data:data_siswa_per_thn,
    options: barChartOptions
  })
  // var barChartOptions = {
  //     responsive              : true,
  //     maintainAspectRatio     : false,
  //     datasetFill             : false
  //   }

  var chartTotalSiswaPerGender = new Chart(genderChart, {
    type:'bar',
    data:data_siswa_per_gender,
    options: barChartOptions
  })


 </script>