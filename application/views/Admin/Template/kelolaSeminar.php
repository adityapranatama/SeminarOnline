 <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- Stats -->
        <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Seminar</th>
                                        <th>Tanggal Seminar</th>
                                        <th>Waktu Seminar</th>
                                        <th>alamat</th>
                                        <th>Harga</th>
                                        <th>Gambar Seminar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($data->result_array() as $i) :
                                        $id=$i['id_seminar'];
                                        $nama_seminar=$i['NS'];
                                        $Tempat_seminar=$i['TS'];
                                        $Waktu_seminar=$i['WS'];
                                        $alamat=$i['alamat'];
                                        $harga=$i['harga'];
                                        $gambar=$i['image']
                                    ?>

                                        <tr>
                                            <td><?php echo $id;?> </td>
                                            <td><?php echo $nama_seminar;?> </td>
                                            <td><?php echo $Tempat_seminar;?> </td>
                                            <td><?php echo $Waktu_seminar ?></td>
                                            <td><?php echo $alamat ?></td>
                                            <td><?php echo $harga ?></td>
                                            <td><img src="<?php echo base_url('assets/images/uploadSeminar/'.$gambar) ?>" class="img-fluid"></td>
                                            <td>
                                                <a href="#form" data-toggle="modal" class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal_editgambarseminar<?= $id; ?>"> Edit Gambar</a>
                                                <a  href="#form" data-toggle="modal" class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal_editSeminar<?= $id; ?>">Edit Seminar</a>
                                                <a class="btn btn-xs btn-info" href="<?php echo base_url('Admin/Admin/hapusSeminar/'.$id) ?>" onclick="return confirm('Data Akan Dihapus');">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
        <!--/ Stats -->
       
       
        
        <!--/ Basic Horizontal Timeline -->
      </div>
    </div>
  </div>


<?php 
    foreach ($data->result_array() as $i) :
        $id=$i['id_seminar'];
        $nama_seminar=$i['NS'];
        $Tangal_seminar=$i['TS'];
        $Waktu_seminar=$i['WS'];
        $alamat=$i['alamat'];
        $harga=$i['harga']
 ?>

  <div class="modal fade" id="modal_editSeminar<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          <h3 class="modal-title" id="myModalLabel">Edit Data</h3>
        </div>

        <form class="form-horizontal" method="post" action="<?php echo base_url().'Admin/Admin/modal_editSeminar'?>">
          <div class="modal-body">
            <input type="hidden" name="idmodal" value="<?php echo $id;?>">
            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3 text-white">Nama Seminar</label>
                <div class="col-xs-8">
                  <input name="nama_seminar" value="<?php echo $nama_seminar;?>" class="form-control" type="text" placeholder="Nama Seminar">
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3 text-white" >Tanggal Seminar</label>
                <div class="col-xs-8">
                  <input name="tanggal_seminar" type="date" value="<?php echo $Tangal_seminar;?>" class="form-control" type="text" placeholder="Nomor DSI...">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3 text-white">Waktu Seminar</label>
                <div class="col-xs-8">
                  <input name="waktu_seminar" type="time" value="<?php echo $Waktu_seminar;?>" class="form-control" placeholder="Waktu Seminar">
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3 text-white" >Alamat</label>
                <div class="col-xs-8">
                  <input name="alamat" value="<?php echo $alamat;?>" class="form-control" type="text" placeholder="Nomor DSI...">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3 text-white">Harga</label>
                <div class="col-xs-8">
                  <input name="harga" value="<?php echo $harga?>" class="form-control" type="text" placeholder="Nama Seminar" required>
                </div>
              </div>
            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Cancel</button>
              <input type="submit" name="" class="btn btn-primary pull-right" value="Update Data">
            </div>
          </form>



        </div>
      </div>
    </div>
  </div>
<?php endforeach;?>


<?php
foreach ($data->result_array() as $i) :
    $id=$i['id_seminar'];
    $image=$i['image'];
    ?>

    <div class="modal fade" id="modal_editgambarseminar<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Edit Gambar</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url().'Admin/Admin/modal_editgambarseminar'?>" enctype="multipart/form-data">

                    <div class="modal-body">
                        <input type="hidden" name="id_seminar" value="<?php echo $id;?>">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Gambar</h4>
                                <center><img src="<?php echo base_url().'assets/images/uploadSeminar/'.$image;?>" class="img-fluid"><br><br></center>
                                <input type="file" name="editgambarseminar"/>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Cancel</button>
                        <input type="submit" name="" class="btn btn-primary pull-right" value="Update Gambar">
                    </div>

                </form>
            </div>
        </div>
    </div>
<?php endforeach;?>





                      