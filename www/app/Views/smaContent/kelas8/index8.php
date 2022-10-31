
        <?=$this->extend('coreTemplates/index');?>

<?=$this->section('page-content');?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            <div class="  col-sm-9">
                <h3>Create New Database In <?=$thn;?> </h3>
              </div>

            </div>


            <div class="clearfix"></div>

            <div class="row">
                <div class="x_panel">
                  <div class="x_content">

                      <div class="right col-sm-16  text-right">


            <ul class="nav ">
                        <li>
                          <a href="<?=base_url('/tahun');?>"  >
                            Tahun <i class="  ml-2  fa fa-angle-double-right"></i>
                          </a>
                        </li>
                        <li>
                        <?php if ($thn == '2019-2020'): ?>
                          <a href="<?=base_url('/tahun/SMP19_20');?>" >
                          Jenjang SMP
                          <i class=" ml-2 fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                          <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url('/tahun/SMP20_21');?>" >
                          Jenjang SMP
                          <i class=" ml-2 fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>
                        </li>


                        <li>
                        <?php if ($thn == '2019-2020'): ?>
                          <a href="<?=base_url('/SMP/kelas8_19_20');?>" >
                          <?=$create;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                          <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url('/SMP/kelas8_20_21');?>" >
                          <?=$create;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>
                        </li>

                      </ul>

                              <button class="btn btn-warning btn-sm"  data-toggle="modal"  data-target=".formatKu"class="dropdown-item"  href="">  <i class="fa fa-exclamation-triangle"> </i> Structur Excel </button>
                              </div>


                      <div class="clearfix"></div>

                      <div class="col-md-4    profile_details">
                        <div class="well shadow profile_view">
                          <div class="col">


                            <h4 class="brief"><i><?=$kls8a;?> </i></h4>

                            <div class="left col-lg-12">

                            <?php if ($thn == '2019-2020'): ?>
                              <?=form_open_multipart($link8a . '/import8a19_20');?>
                      <?php endif;?>

                      <?php if ($thn == '2020-2021'): ?>
                              <?=form_open_multipart($link8a . '/import8a20_21');?>
                      <?php endif;?>

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="excelFile" name="excelFile" required accept=".xls , .xlsx"  onchange="previewExcel()">
                                <label for="excelFile" class="custom-file-label">Choose file excel</label>
                                </div>
                              <button  onclick="return confirm('Apakah Struktur File Excel sudah sesuai ?');" class="btn btn-success btn-sm ">
                                <i class="fa fa-file-excel"> </i> Import
                              </button>
                              <?=form_close();?>


                              <div class="right col-sm-16  text-right">
                              <?php if ($thn == '2019-2020'): ?>
                          <a href="<?=base_url($link8a . '/data8a19_20');?>" >
                            Data <?=$kls8a;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                          <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url($link8a . '/data8a20_21');?>" >
                            Data <?=$kls8a;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>
                              <?php if ($thn == '2020-2021'): ?>
                               <a class="btn btn-primary btn-sm mb-2 " href="<?=base_url($link8a . '/create8a20_21');?>">  <i class="fa fa-pen"> </i> Manual </a>
                              <?php endif;?>

                              <?php if ($thn == '2019-2020'): ?>
                               <a class="btn btn-primary btn-sm mb-2 " href="<?=base_url($link8a . '/create8a19_20');?>">  <i class="fa fa-pen"> </i> Manual </a>
                              <?php endif;?>

                            </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4   profile_details">
                        <div class="well shadow profile_view">
                          <div class="col">

                            <h4 class="brief"><i><?=$kls8b;?> </i></h4>

                            <div class="left col-lg-12">

                            <?php if ($thn == '2019-2020'): ?>
                              <?=form_open_multipart($link8b . '/import8b19_20');?>
                      <?php endif;?>

                      <?php if ($thn == '2020-2021'): ?>
                              <?=form_open_multipart($link8b . '/import8b20_21');?>
                      <?php endif;?>

                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="excelFileB" name="excelFile" required accept=".xls , .xlsx"  onchange="previewExcelB()">
                                <label for="excelFileB" class="custom-file-label exB">Choose file excel</label>
                                </div>
                              <button  onclick="return confirm('Apakah Struktur File Excel sudah sesuai ?');" class="btn btn-success btn-sm ">
                                <i class="fa fa-file-excel"> </i> Import
                              </button>
                              <?=form_close();?>

                              <div class="right col-sm-16  text-right">
                              <?php if ($thn == '2019-2020'): ?>
                          <a href="<?=base_url($link8b . '/data8b19_20');?>" >
                            Data <?=$kls8b;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                          <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url($link8b . '/data8b20_21');?>" >
                            Data <?=$kls8b;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>
                              <?php if ($thn == '2020-2021'): ?>
                               <a class="btn btn-primary btn-sm mb-2 " href="<?=base_url($link8b . '/create8b20_21');?>">  <i class="fa fa-pen"> </i> Manual </a>
                              <?php endif;?>

                              <?php if ($thn == '2019-2020'): ?>
                               <a class="btn btn-primary btn-sm mb-2 " href="<?=base_url($link8b . '/create8b19_20');?>">  <i class="fa fa-pen"> </i> Manual </a>
                              <?php endif;?>

                            </div>
                            </div>
                          </div>
                        </div>
                      </div>

                        <div class="col-md-4    profile_details">
                        <div class="well shadow profile_view">
                          <div class="col">

                            <h4 class="brief"><i><?=$kls8c;?> </i></h4>

                            <div class="left col-lg-12">
                            <?php if ($thn == '2019-2020'): ?>
                              <?=form_open_multipart($link8c . '/import8c19_20');?>
                      <?php endif;?>

                      <?php if ($thn == '2020-2021'): ?>
                              <?=form_open_multipart($link8c . '/import8c20_21');?>
                      <?php endif;?>
                      <div class="custom-file">
                            <input type="file" class="custom-file-input" id="excelFileC" name="excelFile" required accept=".xls , .xlsx"  onchange="previewExcelC()">
                                <label for="excelFileC" class="custom-file-label exC">Choose file excel</label>
                                </div>
                              <button  onclick="return confirm('Apakah Struktur File Excel sudah sesuai ?');" class="btn btn-success btn-sm ">
                                <i class="fa fa-file-excel"> </i> Import
                              </button>
                              <?=form_close();?>
                              <div class="right col-sm-16  text-right">
                              <?php if ($thn == '2019-2020'): ?>
                          <a href="<?=base_url($link8c . '/data8c19_20');?>" >
                            Data <?=$kls8c;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                          <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url($link8c . '/data8c20_21');?>" >
                            Data <?=$kls8c;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>
                              <?php if ($thn == '2020-2021'): ?>
                               <a class="btn btn-primary btn-sm mb-2 " href="<?=base_url($link8c . '/create8c20_21');?>">  <i class="fa fa-pen"> </i> Manual </a>
                              <?php endif;?>

                              <?php if ($thn == '2019-2020'): ?>
                               <a class="btn btn-primary btn-sm mb-2 " href="<?=base_url($link8c . '/create8c19_20');?>">  <i class="fa fa-pen"> </i> Manual </a>
                              <?php endif;?>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4    profile_details">
                        <div class="well shadow profile_view">
                          <div class="col">

                            <h4 class="brief"><i><?=$kls8d;?> </i></h4>

                            <div class="left col-lg-12">
                            <?php if ($thn == '2019-2020'): ?>
                              <?=form_open_multipart($link8d . '/import8d19_20');?>
                      <?php endif;?>

                      <?php if ($thn == '2020-2021'): ?>
                              <?=form_open_multipart($link8d . '/import8d20_21');?>
                      <?php endif;?>
                      <div class="custom-file">
                            <input type="file" class="custom-file-input" id="excelFileD" name="excelFile" required accept=".xls , .xlsx"  onchange="previewExcelD()">
                                <label for="excelFileD" class="custom-file-label exD">Choose file excel</label>
                                </div>
                              <button  onclick="return confirm('Apakah Struktur File Excel sudah sesuai ?');" class="btn btn-success btn-sm ">
                                <i class="fa fa-file-excel"> </i> Import
                              </button>
                              <?=form_close();?>
                              <div class="right col-sm-16  text-right">
                              <?php if ($thn == '2019-2020'): ?>
                          <a href="<?=base_url($link8d . '/data8d19_20');?>" >
                            Data <?=$kls8d;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                          <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url($link8d . '/data8d20_21');?>" >
                            Data <?=$kls8d;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>
                              <?php if ($thn == '2020-2021'): ?>
                               <a class="btn btn-primary btn-sm mb-2 " href="<?=base_url($link8d . '/create8d20_21');?>">  <i class="fa fa-pen"> </i> Manual </a>
                              <?php endif;?>

                              <?php if ($thn == '2019-2020'): ?>
                               <a class="btn btn-primary btn-sm mb-2 " href="<?=base_url($link8d . '/create8d19_20');?>">  <i class="fa fa-pen"> </i> Manual </a>
                              <?php endif;?>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4    profile_details">
                        <div class="well shadow profile_view">
                          <div class="col">

                            <h4 class="brief"><i><?=$kls8e;?> </i></h4>

                            <div class="left col-lg-12">
                            <?php if ($thn == '2019-2020'): ?>
                              <?=form_open_multipart($link8e . '/import8e19_20');?>
                      <?php endif;?>

                      <?php if ($thn == '2020-2021'): ?>
                              <?=form_open_multipart($link8e . '/import8e20_21');?>
                      <?php endif;?>
                      <div class="custom-file">
                            <input type="file" class="custom-file-input" id="excelFileE" name="excelFile" required accept=".xls , .xlsx"  onchange="previewExcelE()">
                                <label for="excelFileE" class="custom-file-label exE">Choose file excel</label>
                                </div>
                              <button  onclick="return confirm('Apakah Struktur File Excel sudah sesuai ?');" class="btn btn-success btn-sm ">
                                <i class="fa fa-file-excel"> </i> Import
                              </button>
                              <?=form_close();?>
                              <div class="right col-sm-16  text-right">
                              <?php if ($thn == '2019-2020'): ?>
                          <a href="<?=base_url($link8e . '/data8e19_20');?>" >
                            Data <?=$kls8e;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                          <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url($link8e . '/data8e20_21');?>" >
                            Data <?=$kls8e;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>
                              <?php if ($thn == '2020-2021'): ?>
                               <a class="btn btn-primary btn-sm mb-2 " href="<?=base_url($link8e . '/create8e20_21');?>">  <i class="fa fa-pen"> </i> Manual </a>
                              <?php endif;?>

                              <?php if ($thn == '2019-2020'): ?>
                               <a class="btn btn-primary btn-sm mb-2 " href="<?=base_url($link8e . '/create8e19_20');?>">  <i class="fa fa-pen"> </i> Manual </a>
                              <?php endif;?>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>






                  </div>
                </div>
            </div>
          </div>
        </div>



        <!-- /page content -->


<!-- Large modal -->
 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

 <div class="modal fade formatKu bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-exclamation-triangle"></i> Import Format </h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">


      <img  class="card-img" src="<?=base_url('assets/images/format.png');?>" alt="image" />
      <h5>Keterangan : </h5>
      <p>NO---NIS--Name--Gender [L/P]--NISN--Tmpt Lahir--Tgl Lahir [dd-mm-yy]--Alamat--Nama Ayah--Nama Ibu--No.Tlp</p>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>

    </div>
  </div>
</div>

<!-- jhig -->
        <?=$this->endSection();?>