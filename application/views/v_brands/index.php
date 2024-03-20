
	<!-- partial:partials/_navbar.html -->
	<?php $this->load->view("inc/navbar"); ?>
	<!-- partial -->

	<div class="container-fluid page-body-wrapper">
		<!-- partial:partials/_settings-panel.html -->
		<?php $this->load->view("inc/settings_panel"); ?>

		<!-- partial -->
		<!-- partial:partials/_sidebar.html -->
		<?php $this->load->view("inc/sidebar"); ?>
		<!-- partial -->

		<div class="main-panel">
			<!-- content-wrapper ends -->
			<div class="content-wrapper">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Markalar</h4>
						<div class="row">
							<div class="col-12">
								<div class="table-responsive">
									<div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
										<div class="row">
											<div class="col-sm-12 col-md-6">
												<div class="dataTables_length" id="order-listing_length"><label>Göster
														<select name="order-listing_length"
																aria-controls="order-listing"
																class="form-select form-select-sm">
															<option value="5">5</option>
															<option value="10">10</option>
															<option value="15">15</option>
															<option value="-1">Tümü</option>
														</select> veri</label></div>
											</div>
											<div class="col-sm-12 col-md-6">
												<div id="order-listing_filter" class="dataTables_filter"><label><input
															type="search" class="form-control" placeholder="Ara"
															aria-controls="order-listing"></label>
												</div>
											</div>
										</div>
										<div class="row dt-row">
											<div class="col-sm-12">
												<table id="order-listing" class="table dataTable no-footer"
													   aria-describedby="order-listing_info">
													<thead>
													<tr>
														<th class="sorting sorting_asc" tabindex="0"
															aria-controls="order-listing" rowspan="1" colspan="1"
															aria-label="ID #: activate to sort column descending"
															style="width: 109.406px;" aria-sort="ascending">ID #
														</th>
														<th class="sorting" tabindex="0" aria-controls="order-listing"
															rowspan="1" colspan="1"
															aria-label="Resim Linki: activate to sort column ascending"
															style="width: 174.75px;">Resim Linki
														</th>
														<th class="sorting" tabindex="0" aria-controls="order-listing"
															rowspan="1" colspan="1"
															aria-label="Başlık: activate to sort column ascending"
															style="width: 130.109px;">Başlık
														</th>
														<th class="sorting" tabindex="0" aria-controls="order-listing"
															rowspan="1" colspan="1"
															aria-label="Sıra: activate to sort column ascending"
															style="width: 130.109px;">Sıra
														</th>
														<th class="sorting" tabindex="0" aria-controls="order-listing"
															rowspan="1" colspan="1"
															aria-label="Durum: activate to sort column ascending"
															style="width: 130.109px;">Durum
														</th>
														<th class="sorting" tabindex="0" aria-controls="order-listing"
															rowspan="1" colspan="1"
															aria-label="Oluşturma Tarihi: activate to sort column ascending"
															style="width: 119.219px;">Oluşturma Tarihi
														</th>
														<th class="sorting" tabindex="0" aria-controls="order-listing"
															rowspan="1" colspan="1"
															aria-label="İşlemler: activate to sort column ascending"
															style="width: 137.609px;">İşlemler
														</th>
													</tr>
													</thead>
													<tbody>
													<?php foreach ($brands as $brand) { ?>
														<tr class="odd">
															<td class="sorting_1"><?php echo $brand->id; ?></td>
															<td><?php echo $brand->img_url; ?></td>
															<td><?php echo $brand->title; ?></td>
															<td><?php echo $brand->rank; ?></td>
															<td>
																<label class="badge badge-info"><?php echo $brand->is_active==0 ? "Pasif" : "Aktif"; ?></label>
															</td>
															<td><?php echo $brand->created_at; ?></td>
															<td>
																<button class="btn btn-outline-primary">Sil</button>
																<button class="btn btn-outline-primary">Düzenle</button>
															</td>
														</tr>
													<?php } ?>
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
			</div>
			<!-- partial:partials/_footer.html -->
			<?php $this->load->view("inc/footer"); ?>
			<!-- partial -->
		</div>
		<!-- main-panel ends -->
	</div>
	<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="<?php echo base_url("assets/"); ?>vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo base_url("assets/"); ?>vendors/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url("assets/"); ?>vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?php echo base_url("assets/"); ?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo base_url("assets/"); ?>js/off-canvas.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/hoverable-collapse.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/template.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/settings.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo base_url("assets/"); ?>js/dashboard.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->
</body>

</html>

