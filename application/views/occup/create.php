
<div class="page-wrapper">
			<div class="page-content">
        <div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">occupation in the school</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-white">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-white"></i>
										</div>
										<h5 class="mb-0 text-white">occupation registration</h5>
									</div>
									<hr/>
                  <?php echo form_open_multipart('occup',$attributes); ?>
									<div class="row mb-3">
										<label  class="col-sm-3 col-form-label">Occupation entry date</label>
										<div class="col-sm-9">
											<input type="date" class="form-control" id="date" name="date" placeholder="crop Name type">
										</div><span class="help-block"><?php echo form_error('date'); ?></span>
									</div>
									<div class="row mb-3">
										<label  class="col-sm-3 col-form-label">Occupation serial number/label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="serial" name="serial" placeholder="Enter occupation numbe">
										</div><span class="help-block"><?php echo form_error('serial'); ?></span>
									</div>
									<div class="row mb-3">
										<label  class="col-sm-3 col-form-label">Occupation Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="name" name="name" placeholder="Enter occupation name">
										</div><span class="help-block"><?php echo form_error('name'); ?></span>
									</div>





									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-light px-5">Upload</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
