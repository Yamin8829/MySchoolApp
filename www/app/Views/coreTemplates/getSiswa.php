
<script>

fetch_siswa();
  function fetch_siswa(){
    $.ajax({
      url:"<?=base_url('Siswa/get-siswa');?>",
      method:"POST",
      success:function(data){
        $('.my_siswa_data').html(data);

      }
    });
  }
</script>