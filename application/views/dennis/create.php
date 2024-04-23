<div class="page-wrapper">
    <div class="page-content">

			<div class="page-content">
        <div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">REQUISITIONS</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-white">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-white"></i>
										</div>

										<h5 class="mb-0 text-white">ALL ITEMSIN THE LAB AND OFFICE</h5>
									</div>
									<hr/>
									<?php if(!empty($this->session->flashdata('message'))){?>
			 <div class="text-white-<?php echo $this->session->flashdata('type');?>" role="alert">

				 <?php echo $this->session->flashdata('message');?>
			 </div>
	<?php }?>
                  <?php echo form_open_multipart('dennis/store',$attributes); ?>
									<div class="row mb-3">
										<label  class="col-sm-3 col-form-label">Name of item</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="name" name="name" placeholder="item  name">
										</div><span class="help-block"><?php echo form_error('name'); ?></span>
									</div>
									<div class="row mb-3">
										<label  class="col-sm-3 col-form-label">Item serial Number</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="serial" name="serial" placeholder="Item serial">
										</div><span class="help-block"><?php echo form_error('serial'); ?></span>
									</div>
									<div class="row mb-3">
										<div class="col-12">
											<label for="inputAddress" class="form-label">CONDITION OF THE ITEM</label>
											<textarea class="form-control" type="text" id="conde"  name="conde" placeholder="condition of the item Enter..." rows="3"></textarea>
										</div>

										</div><span class="help-block"><?php echo form_error('conde'); ?></span>
									</div>

									<div class="row mb-3">
										<label  class="col-sm-3 col-form-label">Date recived </label>
										<div class="col-sm-9">
											<input type="date" class="form-control" id="date" name="date" placeholder="date">
										</div><span class="help-block"><?php echo form_error('date'); ?></span>
									</div>





									<div class="row">
										<label class="col-sm-3 col-form-label"></label>

									<div class="col">
										<a href="<?php echo base_url('index.php/dennis/');?>"><button type="button" class="btn btn-danger px-5 radius-30">	VIEW</button></a>
									</div>
									<div class="col">
									<button type="submit" class="btn btn-success px-5 radius-30">Upload</button>
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
