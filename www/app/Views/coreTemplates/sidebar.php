 <!-- Main Sidebar Container -->
 <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <!-- <img src="assets/adminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --><i class="fas fa-university fa-fw"></i>
      <span class="brand-text font-weight-light">My School App</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url('') . '/public/assets/images/profile/' . user()->user_img;?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a <?php if ($title == "My Profile"): ?>
            style="color: #f8f9fa;"
            <?php endif;?>
          href="<?=base_url('/User');?>" class="d-block active"> <?=user()->username;?></a>

        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-header">GENERAL</li>
          <li class="nav-item">
            <a href="/dashboard" class="nav-link  <?php if ($title == 'Dashboard'): ?>
              active
      <?php endif;?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Main Dashboard
              </p>
            </a>
          </li>
          <?php if (in_groups('admin')): ?>
          <li class="nav-item ">
            <a href="<?=base_url('Admin/All-Users');?>" class="nav-link
            <?php if ($title == 'All Users'): ?>
              active
      <?php endif;?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
               All Users
              </p>
            </a>
          </li>
          <?php endif;?>
          <!-- <li class="nav-item ">
            <a href="<?=base_url('/Tahun');?>" class="nav-link
            <?php if ($title == 'Database'): ?>
              active
      <?php endif;?>">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Database
              </p>
            </a>
          </li> -->
          <?php if (in_groups('admin')): ?>
          <li class="nav-header">KESISWAAN</li>
          <li class="nav-item">
            <a href="<?=base_url('/Siswa');?>" class="nav-link accent-blue <?php if ($title == 'Siswa'): ?>
              active
      <?php endif;?>">
              <i class="nav-icon far fa-solid fa-users-between-lines"></i>
              <p>
                Siswa
                <!-- <span class="badge badge-pill badge-success right"><?=$totalSiswa;?></span> -->
              </p>
            </a>
          </li>
          <?php endif;?>
          <?php if (in_groups('co_walas')): ?>
          <li class="nav-header">KESISWAAN</li>
          <li class="nav-item">
            <a href="<?=base_url('/Siswa');?>" class="nav-link accent-blue <?php if ($title == 'Siswa'): ?>
              active
      <?php endif;?>">
              <i class="nav-icon far fa-solid fa-users-between-lines"></i>
              <p>
                Siswa
                <!-- <span class="badge badge-pill badge-success right"><?=$totalSiswa;?></span> -->
              </p>
            </a>
          </li>
          <?php endif;?>





        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    <style>
.halah{
  display:flex;
  justify-content:space-around;
  align-items: center;
}
.halah a, .halah a:hover{
  color:white;
  font-size: 1.5em;
}
    </style>
 <div class="halah sidebar-custom">

      <a href="<?=base_url() . '/User/edit/' . user()->username;?>" class="" data-bs-toggle="tooltip" data-bs-html="true" title="Edit"><i
      <?php if ($title == "Edit My Profile"): ?>
        style="color: #1c8aff;"
        <?php endif;?>
      class="fas fa-user-edit"></i></a>

      <a data-toggle="modal" data-target="#modal-warning" data-bs-toggle="tooltip" data-bs-html="true" title="Sign Out" class="btn"><i class="fas fa-sign-out-alt"></i></a>

      <!-- <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a> -->
    </div>
    <!-- /.sidebar-custom -->
  </aside>
