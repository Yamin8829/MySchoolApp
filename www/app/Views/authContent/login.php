<?=$this->extend('authContent/authTemplates/auth_header');?>

<?=$this->section('content');?>
<body class="hold-transition login-page">
<!-- <div class="bg-ku"></div> -->

<div class="login-box ">
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

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-header col-11  my-card text-center">
      <a href="" class="h1"><i style="font-weight: 600; font-size:1.4em;"  class="fas fa-university fa-fw"></i> <br> <b>My School</b>App</a>
    </div>
    <div class="my-card col-11 card-body">

    <!-- show flash message -->
    <?=view('Myth\Auth\Views\_message_block')?>


      <form action="<?=route_to('login')?>" method="post">
						<?=csrf_field()?>

  <?php if ($config->validFields === ['email']): ?>
          <div class="my-input-group ">

          <input type="email" name="login" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=old('login');?>" placeholder="Email">
            <span  class="bar"></span> 
            <label   >Email Address</label> 
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>
 <?php else: ?>
            <div class="my-input-group ">

          <input type="text" name="login" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" value="<?=old('login');?>"  required>
            <span  class="bar"></span> 
            <label   ><?=lang('Auth.emailOrUsername')?></label> 
          <div class="invalid-feedback">
								<?=session('errors.login')?>
							</div>
        </div>
  <?php endif;?>



          <div class="my-input-group">

          <input type="password" name="password" class="form-control  <?php if (session('errors.password')): ?>is-invalid<?php endif?>" required>
            <span   class="bar"></span>
  <label  ><?=lang('Auth.password')?></label>
          <div class="invalid-feedback">
								<?=session('errors.password')?>
							</div>
        </div>
 <?php if ($config->allowRemembering): ?>
						<div class=" mb-3 form-check">
							<label class="form-check-label">
								<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')): ?> checked <?php endif?>>
								<?=lang('Auth.rememberMe')?>
							</label>
						</div>
<?php endif;?>


        <div class="row">
          <!-- /.col -->
          <div class="mb-3 col-lg">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <!-- /.social-auth-links -->
<hr style="background-color: white;">

<?php if ($config->allowRegistration): ?>
      <p class="mb-0">
        <a href="<?=base_url('/register');?>" class="text-center">Register a new membership</a>
      </p>
 <?php endif;?>
 <?php if ($config->activeResetter): ?>
					<p class="mb-0"><a href="<?=route_to('forgot')?>"><?=lang('Auth.forgotYourPassword')?></a></p>
<?php endif;?>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<?=$this->endSection();?>

