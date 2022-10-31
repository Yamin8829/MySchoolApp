
        <?=$this->extend('coreTemplates/index');?>

<?=$this->section('page-content');?>



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            <div class="  col-sm-9">
                <h3>Database 7 B In <?=$thn;?></h3>
              </div>



            <div class="clearfix"></div>
            <div class="x_content">
            <div class="row">
              <div class="col-md-9 col-sm-9 ">
              <?php if (session()->getFlashdata('pesan')): ?>
          <div class="alert alert-success">
          <?=session()->getFlashdata('pesan');?>  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
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
                          <a href="<?=base_url('/SMP/kelas7_19_20');?>" >
                          <?=$create;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                          <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url('/SMP/kelas7_20_21');?>" >
                         <?=$create;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>
                        </li>

                        <li>
                        <?php if ($thn == '2019-2020'): ?>
                          <a href="<?=base_url($linkSMP) . "/data7b19_20";?>" >
                           <?=$database;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>

                          <?php if ($thn == '2020-2021'): ?>
                          <a href="<?=base_url($linkSMP) . "/data7b20_21";?>" >
                           <?=$database;?>
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                          <?php endif;?>
                        </li>

                      </ul>
                      <hr>

                              <a href="<?=base_url($linkSMP) . "/export";?>" class="btn btn-success btn-sm ">
                                 Export <i class="fa fa-file-excel-o"> </i>
                              </a>
                    <div class="col-md-9 col-sm-9 ">
                    <table class="table table-hover">
                      <thead>
                        <tr>

                          <th>Nomor Induk</th>
                          <th>Pas Poto</th>
                          <th>Nama Lengkap</th>
                          <th>Tempat Lahir</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>


                      <?php foreach ($dt7b as $dt): ?>
                        <tr>

                          <td><?=$dt['nis'];?></td>
                          <td>
                          <?php if ($thn == '2019-2020'): ?>
                            <img width="100" height="100" class="img-fluid rounded-circle" src="<?=base_url('/assets/images/dk19_20/SMP/kls7/7b') . "/" . $dt['img'];?>" alt="">
                          <?php endif;?>
                          <?php if ($thn == '2020-2021'): ?>
                            <img width="100"height="100" class="img-fluid  rounded-circle rounded-circle" src="<?=base_url('/assets/images/dk20_21/SMP/kls7/7b') . "/" . $dt['img'];?>" alt="">
                            <?php endif;?>
                        </td>
                          <td><?=$dt['nama'];?></td>
                          <td><?=$dt['tmp_lahir'];?></td>

                         <td>
                        <?php if ($thn == '2019-2020'): ?>
                         <a class="btn btn-sm btn-info" href="<?=base_url($linkSMP);?>/dataKelas7/data7b19_20/<?=$dt['slug'];?>" >
                            Detail </a>
                         <?php endif;?>
                     <?php if ($thn == '2020-2021'): ?>
                            <a class="btn btn-sm btn-info" href="<?=base_url($linkSMP);?>/dataKelas7/data7b20_21/<?=$dt['slug'];?>" >
                            Detail </a>
                      <?php endif;?>
                      <?php if ($thn == '2019-2020'): ?>
                            <form class="d-inline" method="post" action="<?=base_url($linkSMP);?>/delete1920_7b/<?=$dt['id'];?>">
                            <?php endif;?>
                            <?php if ($thn == '2020-2021'): ?>
                            <form class="d-inline" method="post" action="<?=base_url($linkSMP);?>/delete/<?=$dt['id'];?>">
                            <?php endif;?>
                            <?=csrf_field();?>
                            <input type="hidden" name="_method" value="DELETE" >
                            <button onclick="return confirm('Apakah Anda yakin ?');" class="btn btn-sm btn-danger" type="submit">Delete</button>
                             </form>

                            </td>


                        </tr>

                  <?php endforeach;?>
                      </tbody>
                    </table>



                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

   <div  class="modal  fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Ubah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">


         <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Induk<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" id="nis"  name="nis"  required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama" id="nama" required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="gender" id="gender"  required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">NISN<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nisn" id="nisn"  required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tempat Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tmp_lahir" id="tmp_lahir"  required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tgl_lahir" id="tgl_lahir"  required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <textarea class="form-control" data-validate-length-range="6" data-validate-words="2" name="alamat" id="alamat"  required="required"></textarea>
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ayah<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ayah" id="ayah"  required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ibu<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ibu" id="ibu"  required="required" />
                   </div>
                    </div>
                    <div class="field item form-group">
             <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Telepon<span class="required">*</span></label>
                 <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="tlp" id="tlp"  required="required" />
                   </div>
                    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Data</button>

      </div>
    </div>
  </div>
</div>


<script >
  $(document).ready(function(){
    $(document).on('click','#set_detail', function(){
      var nis =$(this).data('nis');
      var nama =$(this).data('nama');
      var gender =$(this).data('gender');
      var nisn =$(this).data('nisn');
      var tmp_lahir =$(this).data('tmp_lahir');
      var tgl_lahir =$(this).data('tgl_lahir');
      var alamat =$(this).data('alamat');
      var ayah =$(this).data('ayah');
      var ibu =$(this).data('ibu');
      var tlp =$(this).data('tlp');
      $('#nis').val(nis);
      $('#nama').val(nama);
      $('#gender').val(gender);
      $('#nisn').val(nisn);
      $('#tmp_lahir').val(tmp_lahir);
      $('#tgl_lahir').val(tgl_lahir);
      $('#alamat').val(alamat);
      $('#ayah').val(ayah);
      $('#ibu').val(ibu);
      $('#tlp').val(tlp);

    })
  })
</script>

        <?=$this->endSection();?>
