<?=$this->extend('coreTemplates/header');?>

<?=$this->section('page-content');?>

<?=$this->include('coreTemplates/sidebar')?>
<?=view('coreTemplates/topbar');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <?php if (session()->getTempdata('pesan')): ?>
          <?=session()->getTempdata('pesan');?>
          <?php endif;?>
          <div class="col-sm-6">
            <h1 class="m-0"><?=$title;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content row">
      <div class="container-fluid ">
<!-- <div class="row"> -->
          <!-- general form elements -->
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <form class="form-horizontal" action="<?=base_url() . "/Admin/update/" . $user['userid'];?>" method="post">
             <?=csrf_field();?>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Fullname</label>
                        <div class="col-sm-10">
                          <input readonly required type="text" name="fullname" class="form-control <?php if (session('errors.pesan')): ?>is-invalid<?php endif?>" value="<?=$user['fullname'];?>" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" readonly class="form-control" id="inputEmail" value="<?=$user['email'];?>" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input readonly required type="text" name="username" class="form-control <?php if (session('errors.pesan')): ?>is-invalid<?php endif?>" value="<?=$user['username'];?>" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Account Status</label>
                        <div class="col-sm-10">
                        <select name="active" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" required class="form-control">
                          <option <?php if ($user['active'] == 1): ?> selected <?php endif;?> >Aktif / Terverifikasi</option>
                          <option <?php if ($user['active'] == 0): ?> selected <?php endif;?> >Tidak aktif / Tidak terverifikasi</option>
                        </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                        <select name="group_id" class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif?>" required class="form-control">
                          <option <?php if ($user['group_id'] == 2): ?> selected <?php endif;?> >User</option>
                          <option <?php if ($user['group_id'] == 1): ?> selected <?php endif;?> >Admin</option>
                          <option <?php if ($user['group_id'] == 3): ?> selected <?php endif;?> >Wali Kelas</option>
                          <option <?php if ($user['group_id'] == 6): ?> selected <?php endif;?> >Koordinator Wali Kelas</option>
                          <option <?php if ($user['group_id'] == 4): ?> selected <?php endif;?> >Operator</option>
                          <option <?php if ($user['group_id'] == 5): ?> selected <?php endif;?> >Tata Usaha</option>
                          <option <?php if ($user['group_id'] == 7): ?> selected <?php endif;?> >Staf</option>
                        </select>
                        </div>
                      </div>


      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                    </div>
            </div>
            <!-- </div> -->
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?=$this->include('coreTemplates/footer');?>
  <?=$this->endSection();?>