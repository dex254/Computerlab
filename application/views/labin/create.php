<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Settings</button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="<?php echo base_url('index.php/labin/');?>">Action</a>

								<div class="dropdown-divider"></div>								</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-7 mx-auto">
						<h6 class="mb-0 text-uppercase">LAB Form</h6>
						<hr/><div class="row row-cols-auto g-3">
											<div class="col">
												<!-- Button trigger modal -->


<div class="app-content toggle-content">
					<div class="side-app">
            <div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Lab INVENTORY</h3>
										</div>
                    <div class="card-options">
											<a href="#" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fe fe-more-horizontal fs-20"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="<?php echo base_url('index.php/users/');?>"><i class="fe fe-eye mr-2"></i>datatable</a></li>

											</ul>
										</div>

									</div>
									<div class="card-body">
										<div class="row">

																				<?php if(!empty($this->session->flashdata('message'))){?>
														 <div class="text-white-<?php echo $this->session->flashdata('type');?>" role="alert">

															 <?php echo $this->session->flashdata('message');?>
														 </div>
												<?php }?>
                                          <?php echo form_open_multipart('labin/store',$attributes); ?>
										                	<div class="col-md-6">
                                        <label class="form-label">Item Name:</label>
                                          <input type="text"   name="name"  id="name" class="form-control"  placeholder="Give a Name">
                                        </div><span class="help-block"><?php echo form_error('name'); ?></span>
                                        <div class="form-group">
                                          <label class="form-label">Enter serial Number:</label>
                                          <input type="text" name="serial" id="serial"    class="form-control"  placeholder="Enter serial"  >
                                        </div><span class="help-block"><?php echo form_error('serial'); ?></span>
                                        <div class="form-group">
                                          <label class="form-label">Items Condition:</label>
                                          <input type="text" name="conde" id="conde"    class="form-control"  placeholder="Give items Condition"  >
                                        </div><span class="help-block"><?php echo form_error('conde'); ?></span>



                        <button type="submit" class="btn btn-success">save<i class="fa fa-check fa-spin ml-2"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>





          </div>
  </div>
<!-- End Rightsidebar-->
</div>
