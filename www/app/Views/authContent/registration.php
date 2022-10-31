<?=$this->extend('authContent/authTemplates/auth_header');?>

<?=$this->section('content');?>

<body class="hold-transition register-page">
<!-- <div class="bg-ku"></div> -->
<div id="a"><span class="dot"></span></div>
    <div id="a"><span class="dot"></span></div>
    <div id="a"><span class="dot"></span></div>
    <div id="a"><span class="dot"></span></div>
   <div id="a"><span class="dot"></span></div>
   <div id="a"><span class="dot"></span></div>
   <div id="a"><span class="dot"></span></div>
   <div id="a"><span class="dot"></span></div>
   <div id="a"><span class="dot"></span></div>
   <div id="a"><span class="dot"></span></div>
   <div id="a"><span class="dot"></span></div>
   <div id="a"><span class="dot"></span></div>
   <div id="a"><span class="dot"></span></div>
   <div id="a"><span class="dot"></span></div>
   <div id="a"><span class="dot"></span></div>
<div class="register-box">
  <div class="card ">
    <div class="card-header col-11 my-card text-center">
      <a href="" class="h1"><b>My School</b>App</a>
    </div>


    
    <div class="my-card col-11 card-body">

      <?=view('Myth\Auth\Views\_message_block')?>

       <form action="<?=route_to('register')?>" method="post">
                        <?=csrf_field()?>
  
          <div class="my-input-group">
          <input  type="email"   name="email"  class="form-control <?php if (session('errors.email')): ?>is-invalid<?php endif?>" value="<?=old('email')?>" required>
            <span  class="bar"></span> 
            <label   >Email Address</label> 
        </div>

         

        <div class="my-input-group">
  <input type="text" id="rate" name="username"class=" <?php if (session('errors.username')): ?>is-invalid<?php endif?>" value="<?=old('username')?>" required> 
  <span   class="bar"></span>
  <label  >Username</label>
</div>


<div class="my-input-group">

<input type="password" id="password1" name="password"  class="p1 form-control <?php if (session('errors.password')): ?>is-invalid<?php endif?>"  autocomplete="off" required>
  <span   class="bar"></span>
  <label  ><?=lang('Auth.password')?></label>

</div>



<div class="my-input-group">

<input type="password" id="password2" name="pass_confirm"  class="p2 form-control <?php if (session('errors.pass_confirm')): ?>is-invalid<?php endif?>"  autocomplete="off" required matches>
  <span   class="bar"></span>
  <label  ><?=lang('Auth.repeatPassword')?></label>

</div>
  
        <div class="row">

          <!-- /.col -->
          <div class="mb-3 col-lg">
            <button type="submit" class="btn btn-ku-auth btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

<hr>

      <a href="<?=route_to('login')?>" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?=$this->endSection();?>