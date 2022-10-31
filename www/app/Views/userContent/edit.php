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
                <h3 class="card-title">Edit Photo Profile Only</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <form class="form-horizontal" action="<?=base_url() . "/User/updatePhoto/" . user()->id;?>" method="post" enctype="multipart/form-data" >
             <?=csrf_field();?>
             <input type="hidden" name="imgLama" value="<?=user()->user_img;?>">

                         <div class="field row  item form-group">
                    <label class="col-form-label col-sm-2 ">My Photo</label>
                    <div class=" col-sm-10">
                    <div class="row">
                    <div class=" col-sm-3">
                    <img src="<?=base_url('/public/assets/images/profile') . "/" . user()->user_img;?>"
                          width="150" height="150" alt="<?=user()->fullname;?>" class="img-thumbnail img-preview"  alt=""></div>
                          <div class="col-sm-9">
                    <div class="custom-file ">
                    <input required type="file" class="custom-file-input  <?php if (session('errors.pesan')): ?>is-invalid<?php endif?> " id="img"  value="<?=(old('user_img')) ? old('user_img') : user()->user_img;?>"name="user_img" onchange="previewImg()">
                    <div class="invalid-feedback"> </div>
                    <label for="user_img" class="custom-file-label">Choose file</label>
                </div> </div></div></div>
                </div>

      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                    </div>

                    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Fullname And Username Only</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <form class="form-horizontal" action="<?=base_url() . "/User/update/" . user()->id;?>" method="post">
             <?=csrf_field();?>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Fullname</label>
                        <div class="col-sm-10">
                          <input maxlength="100" required type="text" name="fullname" class="form-control <?php if (session('errors.pesan')): ?>is-invalid<?php endif?>" value="<?=user()->fullname;?>" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" readonly class="form-control" id="inputEmail"  value="<?=user()->email;?>" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input minlength="3" maxlength="20" required type="text" name="username" class="form-control <?php if (session('errors.pesan')): ?>is-invalid<?php endif?>" value="<?=user()->username;?>" id="inputName2" placeholder="Name">
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