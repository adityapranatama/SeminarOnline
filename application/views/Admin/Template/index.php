 <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <div class="card">
          <form action="<?php echo base_url('Admin/Admin/createSeminar') ?>" method="post" enctype="multipart/form-data">
            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
              <fieldset class="form-group">
                <label for="namaseminar">Nama Seminar</label>
                <input type="text" id="namaseminar" class="form-control round" placeholder="Silahkan masukkan nama seminar" name="nama_seminar">
              </fieldset>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
              <fieldset class="form-group">
                <label for="Tanggal Seminar">Tanggal Seminar</label>
                <input type="date" id="Tanggal Seminar" type="text" name="tanggal_seminar" class="form-control round">
              </fieldset>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
              <fieldset class="form-group">
                <label for="waktu_seminar">Waktu Seminar</label>
                <input type="time" id="waktu_seminar" type="text" name="waktu_seminar" class="form-control round" name="waktu_seminar">
              </fieldset>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
              <fieldset class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" type="text" name="alamat" class="form-control round" placeholder="Silahkan masukkan alamat/Tempat seminar...">
              </fieldset>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">IDR</span>
                </div>
                <input type="text" class="form-control" placeholder="Masukkan Harga Seminar" name="harga">
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <label id="projectinput8" class="file center-block">
                  <input type="file" id="file" name="filefoto" required="image/*">
                  <span class="file-custom"></span>
                </label>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Input Data Seminar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>