
<script> 

fetch_user(); 
setInterval(function(){ 
 fetch_user();
},5000);
  
  function fetch_user(){
    $.ajax({
      url:"<?=base_url('Admin/get-status');?>",
      method:"POST",
      success:function(data){
        $('.my_user_data').html(data);
       
      }
    });
  } 
</script>