    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Horizontal Form -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Kullanıcı Ekleme İşlemi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="<?php echo base_url("Users/save") ?>">
                  <div class="card-body">
                  <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">E-posta Adresi:</label>
                      <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="email" placeholder="E-posta Adresini Giriniz.">
                        <?php if (isset($formError)) { ?>
                          <small><?php echo form_error("email"); ?></small>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label">İsim:</label>
                      <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" placeholder="İsim Giriniz.">
                        <?php if (isset($formError)) { ?>
                          <small><?php echo form_error("name"); ?></small>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="surname" class="col-sm-2 col-form-label">Soyisim:</label>
                      <div class="col-sm-10">
                        <input type="text" name="surname" class="form-control" id="surname" placeholder="Soyisim Giriniz.">
                        <?php if (isset($formError)) { ?>
                          <small><?php echo form_error("surname"); ?></small>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="password" class="col-sm-2 col-form-label">Şifre:</label>
                      <div class="col-sm-10">
                        <input type="text" name="password" class="form-control" id="password" placeholder="Şifre Giriniz.">
                        <?php if (isset($formError)) { ?>
                          <small><?php echo form_error("password"); ?></small>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="repass" class="col-sm-2 col-form-label">Şifre Tekrarı:</label>
                      <div class="col-sm-10">
                        <input type="text" name="repass" class="form-control" id="repass" placeholder="Şifrenizi Tekrar Giriniz.">
                        <?php if (isset($formError)) { ?>
                          <small><?php echo form_error("repass"); ?></small>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="is_active" class="col-sm-2 col-form-label">Durum:</label>
                        <div class="col-sm-2  mt-2">
				                  <label for="">Aktif </label>
				                  <input type="radio" name="is_active" value="1" id="is_active">
                        </div>
                        <div class="col-sm-2  mt-2">
				                  <label for="">Pasif </label>
				                  <input type="radio" name="is_active" value="0" id="is_active"><br>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                    <a href="<?php echo base_url("Users") ?>" class="btn btn-danger float-right">Vazgeç</a>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->