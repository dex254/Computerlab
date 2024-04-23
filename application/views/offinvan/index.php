<div class="page-wrapper">
			<div class="page-content">

				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Table</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">OFFICE  CONTENTS</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Shortcarts👉👉</button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden"> Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
								<a class="dropdown-item" href="<?php echo base_url('index.php/offinvan/');?>">refresh</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">OFFICE CONTENTS</h6>
				<hr/>
        <div class="col">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleDarkModal">Add new office item</button>
										<!-- Modal -->
										<div class="modal fade" id="exampleDarkModal" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-lg modal-dialog-centered">
												<div class="modal-content bg-dark">
													<div class="modal-header">
														<h5 class="modal-title text-white">Register/form</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body text-white">
                            <?php echo form_open_multipart('offinvan/store',$attributes); ?>
                  <div class="form-group">

                    <label class="form-label">Item Name:</label>
                    <input type="text"   name="name"  id="name" class="form-control"  placeholder="Give a Name">
                  </div><span class="help-block"><?php echo form_error('fname'); ?></span>
                  <div class="form-group">
                    <label class="form-label">Enter serial Number:</label>
                    <input type="text" name="serial" id="serial"    class="form-control"  placeholder="Enter serial"  >
                  </div><span class="help-block"><?php echo form_error('serial'); ?></span>
                  <div class="form-group">
                    <label class="form-label">Items Condition:</label>
                    <input type="text" name="conde" id="conde"    class="form-control"  placeholder="Give items Condition"  >
                  </div><span class="help-block"><?php echo form_error('conde'); ?></span>









                  <button type="submit" class="btn btn-warning px-5 radius-30">Upload<i class="fa fa-check fa-spin ml-2"></i></button>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
														<button type="button" class="btn btn-dark">Save changes</button>
													</div>
												</div>
											</div>
										</div>

              <div class="modal-footer">

                                                                          <?php if(!empty($this->session->flashdata('message'))){?>
                                                               <div class="text-white-<?php echo $this->session->flashdata('type');?>" role="alert">

                                                                 <?php echo $this->session->flashdata('message');?>
                                                               </div>
                                                          <?php }?>
              </div>




				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Id</th>
										<th>Item Name</th>
										<th>Item serial Number</th>
										<th>Item condition</th>

									</tr>
								</thead>
								<tbody>
									  <?php $i=1; foreach ($offinvan as $offinvan): ?>
									<tr>
										<td><?php echo $i; $i++;?></td>

										<td><?php echo $offinvan['name'];?></td>
										<td><?php echo $offinvan['serial'];?></td>
											<td><?php echo $offinvan['conde'];?></td>





								</tr>
									<?php endforeach ?>
								</tbody>
								</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end page wrapper -->
	<!--start overlay-->
	<div class="overlay toggle-icon"></div>
	<!--end overlay-->
	<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>


		<!--end switcher-->
		<!-- Bootstrap JS -->

		<!--plugins-->
