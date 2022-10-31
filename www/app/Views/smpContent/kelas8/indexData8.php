
        <?= $this->extend('coreTemplates/index'); ?>

<?= $this->section('page-content'); ?>

       
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Insert New Database</h3>
              </div>
 
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="x_panel">
                  <div class="x_content">
                      <div class="col-md-12 col-sm-12  text-center">
                        
                      </div>

                      <div class="clearfix"></div>
 
                      <div class="col-md-4    profile_details">
                        <div class="well shadow profile_view">
                          <div class="col">

                            <h4 class="brief"><i>Kelas 8 A </i></h4>

                            <div class="left col-lg-12">
                            <a class="btn btn-primary btn-sm  "  lass="dropdown-item"  href="<?=base_url('Smp/dataKelas8/data8a');?>">  <i class="fa fa-upload"> </i> Insert Manual </a>
                                
                              <a href="<?= base_url('/Admin/users/detailUser'); ?>" class="btn btn-success btn-sm ">
                                <i class="fa fa-upload"> </i> Import From Excel
                              </a>  
                            </div> 
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-4   profile_details">
                        <div class="well shadow profile_view">
                          <div class="col">

                            <h4 class="brief"><i>Kelas 8 B </i></h4>

                            <div class="left col-lg-12">
                            <button class="btn btn-primary btn-sm  "  data-toggle="modal"  data-target=".insert8b"class="dropdown-item"  href="<?=base_url('logout');?>">  <i class="fa fa-upload"> </i> Insert Manual </button>
                              <a href="<?= base_url('/Admin/users/detailUser'); ?>" class="btn btn-success btn-sm ">
                                <i class="fa fa-upload"> </i> Import From Excel
                              </a>  
                            </div> 
                          </div> 
                        </div>
                      </div>           
                      
                        <div class="col-md-4    profile_details">
                        <div class="well shadow profile_view">
                          <div class="col">

                            <h4 class="brief"><i>Kelas 8 C </i></h4>

                            <div class="left col-lg-12">
                            <button class="btn btn-primary btn-sm  "  data-toggle="modal"  data-target=".insert8c"class="dropdown-item"  href="<?=base_url('logout');?>">  <i class="fa fa-upload"> </i> Insert Manual </button>
                              <a href="<?= base_url('/Admin/users/detailUser'); ?>" class="btn btn-success btn-sm ">
                                <i class="fa fa-upload"> </i> Import From Excel
                              </a>  
                            </div> 
                          </div> 
                        </div>
                      </div>

                      <div class="col-md-4    profile_details">
                        <div class="well shadow profile_view">
                          <div class="col">

                            <h4 class="brief"><i>Kelas 8 D </i></h4>

                            <div class="left col-lg-12">
                            <button class="btn btn-primary btn-sm  "  data-toggle="modal"  data-target=".insert8d"class="dropdown-item"  href="<?=base_url('logout');?>">  <i class="fa fa-upload"> </i> Insert Manual </button>
                              <a href="<?= base_url('/Admin/users/detailUser'); ?>" class="btn btn-success btn-sm ">
                                <i class="fa fa-upload"> </i> Import From Excel
                              </a>  
                            </div> 
                          </div> 
                        </div>
                      </div>

                      <div class="col-md-4    profile_details">
                        <div class="well shadow profile_view">
                          <div class="col">

                            <h4 class="brief"><i>Kelas 8 E </i></h4>

                            <div class="left col-lg-12">
                            <button class="btn btn-primary btn-sm  "  data-toggle="modal"  data-target=".insert8e"class="dropdown-item"  href="<?=base_url('logout');?>">  <i class="fa fa-upload"> </i> Insert Manual </button>
                              <a href="<?= base_url('/Admin/users/detailUser'); ?>" class="btn btn-success btn-sm ">
                                <i class="fa fa-upload"> </i> Import From Excel
                              </a>  
                            </div> 
                          </div> 
                        </div>
                      </div>
             
                         <div class="col-md-4    profile_details">
                        <div class="well shadow profile_view">
                          <div class="col">

                            <h4 class="brief"><i>Kelas 8 F </i></h4>

                            <div class="left col-lg-12">
                            <button class="btn btn-primary btn-sm  "  data-toggle="modal"  data-target=".insert8f"class="dropdown-item"  href="<?=base_url('logout');?>">  <i class="fa fa-upload"> </i> Insert Manual </button>
                              <a href="<?= base_url('/Admin/users/detailUser'); ?>" class="btn btn-success btn-sm ">
                                <i class="fa fa-upload"> </i> Import From Excel
                              </a>  
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
 
 <div class="modal fade insert8a bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form class="" action="/Smp/save" method="post" >
    <?= csrf_field() ?>
      <div class="modal-header"> 
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pen"></i> Grade 8 A Biodata </h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Induk<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nis" placeholder=" " required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder=" " required="required" /></div>
                                        </div>
                                       
                                        <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="gender" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">NISN<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nisn" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tempat Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tmp_lahir" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tgl_lahir" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <textarea class="form-control" data-validate-length-range="6" data-validate-words="2" name="alamat" placeholder=" " required="required" ></textarea>
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ayah<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ayah" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ibu<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ibu" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Telepon<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tlp" placeholder=" " required="required" />
                   </div>
                    </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit"   class="btn btn-primary"> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- jhig -->

<!-- Large modal -->
 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->
 
 <div class="modal fade insert8b bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form class="" action="/Smp/save" method="post" >
      <div class="modal-header"> 
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pen"></i> Grade 8 B Biodata </h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Induk<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nis" placeholder=" " required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder=" " required="required" /></div>
                                        </div>
                                       
                                        <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="gender" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">NISN<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nisn" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tempat Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tmp_lahir" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tgl_lahir" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                 <textarea class="form-control" data-validate-length-range="6" data-validate-words="2" name="alamat" placeholder=" " required="required" ></textarea>
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ayah<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ayah" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ibu<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ibu" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Telepon<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tlp" placeholder=" " required="required" />
                   </div>
                    </div>
       
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit"   class="btn btn-primary"> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- jhig -->

<!-- Large modal -->
 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->
 
 <div class="modal fade insert8c bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form class="" action="/Smp/save" method="post" >
      <div class="modal-header"> 
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pen"></i> Grade 8 C Biodata </h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Induk<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nis" placeholder=" " required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder=" " required="required" /></div>
                                        </div>
                                       
                                        <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="gender" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">NISN<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nisn" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tempat Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tmp_lahir" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tgl_lahir" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                     <textarea class="form-control" data-validate-length-range="6" data-validate-words="2" name="alamat" placeholder=" " required="required" ></textarea>
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ayah<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ayah" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ibu<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ibu" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Telepon<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tlp" placeholder=" " required="required" />
                   </div>
                    </div>
       
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit"   class="btn btn-primary"> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- jhig -->

<!-- Large modal -->
 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->
 
 <div class="modal fade insert8d bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form class="" action="/Smp/save" method="post" >
      <div class="modal-header"> 
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pen"></i> Grade 8 D Biodata </h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Induk<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nis" placeholder=" " required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder=" " required="required" /></div>
                                        </div>
                                       
                                        <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="gender" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">NISN<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nisn" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tempat Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tmp_lahir" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tgl_lahir" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                     <textarea class="form-control" data-validate-length-range="6" data-validate-words="2" name="alamat" placeholder=" " required="required" ></textarea>
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ayah<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ayah" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ibu<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ibu" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Telepon<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tlp" placeholder=" " required="required" />
                   </div>
                    </div>
       
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit"   class="btn btn-primary"> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- jhig -->

<!-- Large modal -->
 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->
 
 <div class="modal fade insert8e bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form class="" action="/Smp/save" method="post" >
      <div class="modal-header"> 
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pen"></i> Grade 8 E Biodata </h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
                             <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Induk<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nis" placeholder=" " required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder=" " required="required" /></div>
                                        </div>
                                       
                                        <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="gender" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">NISN<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nisn" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tempat Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tmp_lahir" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                   <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-11 xdisplay_inputx form-group row has-feedback">
                                <input type="text" class="form-control has-feedback-left"name="tgl_lahir" id="single_cal1" placeholder="" aria-describedby="inputSuccess2Status">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                     <textarea class="form-control" data-validate-length-range="6" data-validate-words="2" name="alamat" placeholder=" " required="required" ></textarea>
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ayah<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ayah" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ibu<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ibu" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Telepon<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tlp" placeholder=" " required="required" />
                   </div>
                    </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit"   class="btn btn-primary"> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- jhig -->

<!-- Large modal -->
 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->
 
 <div class="modal fade insert8f bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form class="" action="/Smp/save" method="post" >
      <div class="modal-header"> 
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pen"></i> Grade 8 F Biodata </h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Induk<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nis" placeholder=" " required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder=" " required="required" /></div>
                                        </div>
                                       
                                        <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="gender" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">NISN<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nisn" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tempat Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tmp_lahir" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tgl_lahir" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                     <textarea class="form-control" data-validate-length-range="6" data-validate-words="2" name="alamat" placeholder=" " required="required" ></textarea>
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ayah<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ayah" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ibu<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ibu" placeholder=" " required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Telepon<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tlp" placeholder=" " required="required" />
                   </div>
                    </div>
       
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit"   class="btn btn-primary"> Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- jhig -->

        <?= $this->endSection(); ?>