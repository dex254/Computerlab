<div class="page-wrapper">
			<div class="page-content">
        <h6 class="mb-0 text-uppercase">The Retarn Sport</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-white">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-white"></i>
									</div>
									<h5 class="mb-0 text-white">Retarning</h5>

								</div>
								<a href="<?php echo base_url('index.php/ritan/');?>"><button type="button" class="btn btn-outline-dark px-5 radius-30">View  Retarns</button></a>
								<hr>								<?php if(!empty($this->session->flashdata('message'))){?>
										 <div class="text-white-<?php echo $this->session->flashdata('type');?>" role="alert">

											 <?php echo $this->session->flashdata('message');?>
										 </div>
								<?php }?>


                <?php echo form_open_multipart('ritan/store',$attributes); ?>
								<form class="row g-3">
									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Select the Retarn Date</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bxs-user'></i></span>
											<input type="date" class="form-control border-start-0" id="date" name="date" placeholder="tareee" />
										</div>
									</div>
									<div class="col-12">
										<label for="inputPhoneNo" class="form-label">Select the name if the item</label>
										<div class="input-group">
											<?php $dennis = array('' => 'Select an option') + $dennis; echo form_dropdown('name', $dennis,NULL,$prop); ?>
										</div><span class="help-block"><?php echo form_error('name'); ?></span>
										</div>


									<div class="col-12">
										<label for="inputPhoneNo" class="form-label">Condition of item on Retarn</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bxs-microphone' ></i></span>
											<input type="text" class="form-control border-start-0" id="conde" name="conde" placeholder="condition" />
										</div>

                  <div class="col-12">
                    <label for="inputPhoneNo" class="form-label">Serail numberof the item</label>
                    <div class="input-group">
											<?php $borrow = array('' => 'Select an option') + $borrow; echo form_dropdown('serial', $borrow,NULL,$prop); ?>
										</div><span class="help-block"><?php echo form_error('serial'); ?></span>
                    </div>
                  </div>
									<div class="col-12">
										<label for="inputEmailAddress" class="form-label">Identity of retarnee</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bxs-message' ></i></span>
											<input type="number" class="form-control border-start-0" id="phone" name="phone" placeholder="Enter phone numberor ID" />
										</div>
									</div>
									<div class="col-12">
										<label for="inputEmailAddress" class="form-label">Name of the retarning Person</label>
										<div class="input-group"> <span class="input-group-text"><i class='bx bxs-message' ></i></span>
											<input type="text" class="form-control border-start-0" id="names" name="names" placeholder="Full name" />
										</div>
									</div>




									<div class="col-12">
										<button type="submit" class="btn btn-success px-5 radius-30"> clck 🆑🆑 to UPDate</button>

									</div>
								</form>
							</div>
						</div>
          </div>
  </div>
