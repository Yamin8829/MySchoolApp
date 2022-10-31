  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url('auth/logout');?>" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


    <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="<?=base_url('') . '/public/assets/images/profile/' . user()->user_img;?>" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"> <?=user()->username;?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary-ku">
            <img src="<?=base_url('') . '/public/assets/images/profile/' . user()->user_img;?>" class="img-circle elevation-2" alt="User Image">

            <p>
              <?=user()->username;?>
              <small>Member since : <br> <?=$time;?></small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-12 text-center"> As
              <?php if (in_groups('admin')): ?>
                Admin
                <?php endif;?>
                <?php if (in_groups('user')): ?>
                User
                <?php endif;?>
                <?php if (in_groups('walas')): ?>
                Wali Kelas
                <?php endif;?>
                <?php if (in_groups('co_walas')): ?>
               Koordinator Wali Kelas
                <?php endif;?>
                <?php if (in_groups('staf')): ?>
                Staf
                <?php endif;?>
                <?php if (in_groups('tata_usaha')): ?>
                Tata Usaha
                <?php endif;?>
                <?php if (in_groups('operator')): ?>
                Operator
                <?php endif;?>
              </div>

            </div>
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <button href=""  data-toggle="modal" data-target="#modal-warning" class="btn btn-sm btn-ku-top   float-right">Sign out</button>

          </li>
        </ul>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->