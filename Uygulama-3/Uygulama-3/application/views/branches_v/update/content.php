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
                  <h3 class="card-title">Şube Güncelleme İşlemi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="<?php echo base_url("Branches/update/$item->id") ?>">
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="title" class="col-sm-2 col-form-label">Şube Adı:</label>
                      <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="title" 
                        value="<?php echo isset($formError) ? set_value("title") : $item->title; ?>" 
                        placeholder="Şubenin Adını Giriniz.">
                        <?php if (isset($formError)) { ?>
                          <small><?php echo form_error("title"); ?></small>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="address" class="col-sm-2 col-form-label">Adres:</label>
                      <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" id="address" 
                        value="<?php echo isset($formError) ? set_value("address") : $item->address; ?>" 
                        placeholder="Şubenin Adresini Giriniz.">
                        <?php if (isset($formError)) { ?>
                          <small><?php echo form_error("address"); ?></small>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                    <a href="<?php echo base_url("Branches") ?>" class="btn btn-danger float-right">Vazgeç</a>
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