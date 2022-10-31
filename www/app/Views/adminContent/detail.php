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
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-4">
     <!-- Widget: user widget style 1 -->
     <div  class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="bg-profile">
                <img src="<?=base_url('') . '/public/assets/images/cover/' . $user['user_cover'];?>" alt="">
              </div>

              <div class="my-profile">

                <div class="bunder">
                <div class="img-pro">
                <img src="<?=base_url('') . '/public/assets/images/profile/' . $user['user_img'];?>" alt="">
                </div>
                </div>
                <div class="txt-pro">
                <h3 class=""><?=$user['username'];?></h3>
                </div>
              </div>

            </div>
            </div>


            <div class="col-md-8">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?=base_url() . '/Admin/edit/' . $user['username'];?>">Edit</a></li>
                  <li class="nav-item right"><form class="nav-link right" method="post" action="<?=base_url() . "/Admin/delete/" . $user['userid'];?>">
<input type="hidden" name="_method" value="DELETE" >
<button onclick="return confirm('Apakah Anda yakin ?');" class="btn btn-sm btn-danger" type="submit">Delete User</button>
 </form> </li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">

                  <div class="card" >
  <div class="card-body">
  <table   class="">
  <thead >
    <tr >
      <th style="padding:.3rem; vertical-align: top;" scope="col">Username</th>
      <td scope=""><?=$user['username'];?></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th style="padding:.3rem; vertical-align: top;" scope="row">Email</th>
      <td><?=$user['email'];?></td>
    </tr>
    <tr>
      <th  style="padding:.3rem; vertical-align: top;" scope="row">Fullname</th>
      <td><?=$user['fullname'];?></td>
    </tr>

  </tbody>
</table>
  </div>
</div>



                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">

                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          </div>
      </div><!-- /.container-fluid -->



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?=$this->include('coreTemplates/footer');?>
  <?=$this->endSection();?>