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
      label:'Perempuan',
      data:data_siswa_gender,
      backgroundColor:'rgba(255,99,132,0.8)',
    }],
    labels:label_siswa_gender,
  }
  var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

  var chartTotalSiswaPerGender = new Chart(genderChart, {
    type:'bar',
    data:data_siswa_per_gender,
    options: barChartOptions
  })

  var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })
 </script>