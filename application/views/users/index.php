<div class="page-wrapper">
			<div class="page-content">

				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">System users</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Users</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Add members</button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="<?php echo base_url('index.php/users/create/');?>">Add</a>
								<a class="dropdown-item" href="<?php echo base_url('index.php/users/');?>">view</a>
								
								<div class="dropdown-divider"></div>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Sytem acces</h6>
				<hr/>
				<div class="col">
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#examplePrimaryModal">Add a new system user here 🈁🈁🈁</button>
											<!-- Modal -->
											<div class="modal fade" id="examplePrimaryModal" tabindex="-1" aria-hidden="true">
												<div class="modal-dialog modal-lg modal-dialog-centered">
													<div class="modal-content bg-primary">
														<div class="modal-header">
															<h5 class="modal-title text-white">user Register</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body text-white">
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
														<div class="modal-footer">
															<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
															<button type="button" class="btn btn-dark">Save changes</button>
														</div>
													</div>
												</div>
											</div>
										</div>

				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Id</th>
										<th>full Name</th>
										<th>Username</th>
										<th>Phone</th>
										<th>Email</th>
										<th>Occupation</th>
										<th>Activity</th>
									</tr>
								</thead>
								<tbody>
									  <?php $i=1; foreach ($users as $user): ?>
									<tr>
										<td><?php echo $i; $i++;?></td>
										<td><?php echo $user['fname'].' '.$user['lname'];?></td>
										<td><?php echo $user['username'];?></td>
										<td><?php echo $user['phone'];?></td>
											<td><?php echo $user['email'];?></td>

											<td><?php echo $user['name'];?></td>

										<td><span class="badge badge-success"><?php echo $user['status'];?></span></td>

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
