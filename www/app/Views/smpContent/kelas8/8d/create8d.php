
        <?=$this->extend('coreTemplates/index');?>

<?=$this->section('page-content');?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            <div class="  col-sm-12">
                <h3>Create New Database In <?=$thn;?> </h3>

              </div>

            </div>


            <div class="clearfix"></div>
            <div class="x_content">
            <div class="row">

            <div class="col-md-12 col-sm-12 ">
                      <?php if (session()->getFlashdata('pesanNis')): ?>
          <div class="alert alert-danger">
          <?=session()->getFlashdata('pesanNis');?>  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button></div>
          <?php endif;?>
                      </div>
                <div class="x_panel">
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


                        <li>
                        <?php if ($thn == '2019-2020'): ?>
                          <a href="<?=base_url($linkSMP) . "/data8d19_20";?>" >
                             <?=$database;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                          <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url($linkSMP) . "/data8d20_21";?>" >
                             <?=$database;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>
                        </li>
                      </ul>



                      <div class="clearfix"></div>

                      <div class="x_content">
                      <?php if ($thn == '2019-2020'): ?>
                      <form class="" action="<?=base_url($linkSMP);?>/save19_20" method="post" >
                      <?php endif;?>

                      <?php if ($thn == '2020-2021'): ?>
                      <form class="" action="<?=base_url($linkSMP);?>/save20_21" method="post" >
                      <?php endif;?>
      <div class="modal-header">
        <h4 class="modal-title" ><i class="fa fa-pen"></i> <?=$title;?> </h4>


      </div>
      <div class="modal-body">
      <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Induk<span class="required">*</span></label>
         <div class="col-md-6 col-sm-6">
         <input class="form-control <?=($validation->hasError('nis')) ? 'is-invalid' : '';?>" data-validate-length-range="6" data-validate-words="2" value="<?=old('nis');?>" name="nis" placeholder=""  /><div class="invalid-feedback"> <?=$validation->getError('nis');?></div>
                                            </div>
                                        </div>
         <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span class="required">*</span></label>
         <div class="col-md-6 col-sm-6">
          <input class="form-control <?=($validation->hasError('nama')) ? 'is-invalid' : '';?>  " data-validate-length-range="6" data-validate-words="2" name="nama" value="<?=old('nama');?>" placeholder=""   />   <div class="invalid-feedback"> <?=$validation->getError('nama');?></div></div>

                                        </div>

                                        <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                 <select class="form-control"name="gender">
													<option>Choose option</option>
													<option>L</option>
													<option>P</option>

												</select>
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">NISN<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nisn" placeholder=" "  />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tempat Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tmp_lahir" placeholder=" "  />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tgl_lahir" placeholder="dd-mm-yyyy"  />
                   </div>
                    </div>



                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="alamat" placeholder=" "  />
                   </div>
                    </div>

                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align"> Nama Ayah<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ayah" placeholder=" "  />
                   </div>
                    </div>


                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align"> Nama Ibu<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ibu" placeholder=" "  />
                   </div>
                    </div>



      </div>
      <div class= "col-9 ml-5">
        <button type="submit"   class="btn btn-block btn-user   btn-primary"> Save</button>

      </div>
      </form>
                                </div>



                  </div>
                </div>
            </div>
          </div>
        </div>



        <!-- /page content -->




        <?=$this->endSection();?>