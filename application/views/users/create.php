<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Users</div>
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
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-7 mx-auto">
						<h6 class="mb-0 text-uppercase">User Form</h6>
						<hr/><div class="row row-cols-auto g-3">
											<div class="col">
												<!-- Button trigger modal -->


<div class="app-content toggle-content">
					<div class="side-app">
            <div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Admin Registration form</h3>
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

											<div class="col-md-6">
                        <?php echo form_open_multipart('users/store',$attributes); ?>
												<div class="form-group">
													<label class="form-label">First Name:</label>
													<input type="text"   name="fname"  id="fname" class="form-control"  placeholder="Enter your first name">
												</div><span class="help-block"><?php echo form_error('fname'); ?></span>
												<div class="form-group">
													<label class="form-label">Last Name:</label>
													<input type="text"  name="lname" id="lname" class="form-control"  placeholder="Eneter  your  last name" >
												</div><span class="help-block"><?php echo form_error('lname'); ?></span>
												<div class="form-group">
													<label class="form-label">Email:</label>
													<input type="email" name="email" id="email"    class="form-control"  placeholder="Enter gmail adress with@"  >
												</div><span class="help-block"><?php echo form_error('email'); ?></span>
                        <div class="form-group">
                          <label class="form-label">Phone:</label>
                          <input type="number" name="phone" id="phone"    class="form-control"  placeholder="Enter phone Number"  >
                        </div><span class="help-block"><?php echo form_error('phone'); ?></span>
                        <div class="form-group">
                          <label class="form-label">Username:</label>
                          <input type="text" name="username" id="username"    class="form-control"  placeholder="Enter username"  >
                        </div><span class="help-block"><?php echo form_error('username'); ?></span>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Password:</label>
													<input type="password" name="password" id="password" class="form-control is-valid state-valid"  placeholder="Secret password">
												</div><span class="help-block"><?php echo form_error('password'); ?></span>
												<div class="form-group m-0">
													<label class="form-label">Confirm password</label>
													<input type="cpassword"  name="cpassword" id="cpassword" class="form-control is-invalid state-invalid" placeholder="Confirm password">

												</div><span class="help-block"><?php echo form_error('cpassword'); ?></span>

											</div>
											<div class="col-md-12 ">
												<div class="form-group mb-0">
													<label class="form-label">Occupation in the school</label>
													<input type="text" name="name" id="name"    class="form-control"  placeholder="Enter occupation of the user"  >
                        </div><span class="help-block"><?php echo form_error('username'); ?></span>
											</div>



                        <button type="submit" class="btn btn-success">Register<i class="fa fa-check fa-spin ml-2"></i></button>
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
