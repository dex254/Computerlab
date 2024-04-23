
<div class="page-wrapper">
			<div class="page-content">
        <div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Lab and office borrowing interface</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-white">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div>
										</div>
										<h5 class="mb-0 text-white">Activity recording</h5>
									</div>
									<a href="<?php echo base_url('index.php/borrow/');?>"><button type="button" class="btn btn-warning px-5 radius-30">click here to see contents</button></a>
									<hr/>

									<?php if(!empty($this->session->flashdata('message'))){?>
			 <div class="text-white-<?php echo $this->session->flashdata('type');?>" role="alert">

				 <?php echo $this->session->flashdata('message');?>
			 </div>
	<?php }?>
                  <?php echo form_open_multipart('borrow/store',$attributes); ?>
									<div class="row mb-3">
										<label  class="col-sm-3 col-form-label">Name of item borrowed</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="name" name="name" placeholder="Enter item name">
										</div><span class="help-block"><?php echo form_error('name'); ?></span>
									</div>
									<div class="row mb-3">
										<label  class="col-sm-3 col-form-label">pick Serial Number</label>
										<div class="col-sm-9">
											<?php $dennis = array('' => 'Select an option') + $dennis; echo form_dropdown('serial', $dennis,NULL,$prop); ?>
										</div><span class="help-block"><?php echo form_error('serial'); ?></span>
									</div>
									<div class="row mb-3">
										<label  class="col-sm-3 col-form-label">Name of the Borrower</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="namea" name="namea" placeholder="Enter BORROWERS NAME">
										</div><span class="help-block"><?php echo form_error('namea'); ?></span>
									</div>	<div class="row mb-3">
											<label  class="col-sm-3 col-form-label">ID or phone number of  Borrower</label>
											<div class="col-sm-9">
												<input type="number" class="form-control" id="phone" name="phone" placeholder="Enter IDENTITY">
											</div><span class="help-block"><?php echo form_error('phone'); ?></span>

										</div>
										<div class="row mb-3">
											<label  class="col-sm-3 col-form-label">Give condition of the item</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="conde" name="conde" placeholder="Condition.....">
											</div><span class="help-block"><?php echo form_error('conde'); ?></span>
										</div>
									<div class="row mb-3">
										<label  class="col-sm-3 col-form-label">Date Issued</label>
										<div class="col-sm-9">
											<input type="date" class="form-control" id="date" name="date" placeholder="pick  Date">
										</div><span class="help-block"><?php echo form_error('date'); ?></span>
									</div>




									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-primary px-5 radius-30">save</button>

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
