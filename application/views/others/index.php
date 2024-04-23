<div class="page-wrapper">
			<div class="page-content">

				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Table</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">A.O.B CONTENTS</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Shortcatt👉👉👉</button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden"> Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
								<a class="dropdown-item" href="<?php echo base_url('index.php/others/');?>">refresh</a>

								<div class="dropdown-divider"></div>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">A.O.B data</h6>
				<hr/>
        <div class="col">
  										<!-- Button trigger modal -->
  										<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleSuccessModal">Add a New A.O.B</button>
  										<!-- Modal -->
  										<div class="modal fade" id="exampleSuccessModal" tabindex="-1" aria-hidden="true">
  											<div class="modal-dialog modal-lg modal-dialog-centered">
  												<div class="modal-content bg-success">
  													<div class="modal-header">
  														<h5 class="modal-title text-white">A.O.B Entry</h5>
  														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  													</div>
  													<div class="modal-body text-white">
															<?php echo form_open_multipart('others/store',$attributes); ?>
	                  <div class="form-group">

	                    <label class="form-label">Title:</label>
	                    <input type="text"   name="title"  id="title" class="form-control"  placeholder="Title to the A.O.B">
	                  </div><span class="help-block"><?php echo form_error('title'); ?></span>
										<div class="form-group">
											<label class="form-label">Topic For The A. O . B:</label>
											<input type="text" name="topic" id="topic"    class="form-control"  placeholder="Topic forthe writng.."  >
										</div><span class="help-block"><?php echo form_error('topic'); ?></span>
										<div class="form-group">
										 <label class="form-label">Select A.O.B DATE:</label>
										 <input type="date" name="date" id="date"    class="form-control"  placeholder="Give items Condition"  >
									 </div><span class="help-block"><?php echo form_error('DATE'); ?></span>
	                  <div class="form-group">
	                    <label for="inputAddress" class="form-label">Topic For The A. O . B:</label>
	                    <textarea class="form-control" id="notes"  name="notes" placeholder="📝📝📝📝📝📝📝📔📓📒.." rows="3"></textarea>
	                  </div><span class="help-block"><?php echo form_error('notes'); ?></span>


	                  <button type="submit" class="btn btn-outline-warning px-5 radius-30">Save A.O.B<i class="fa fa-check fa-spin ml-2"></i></button>
														</div>

  													<div class="modal-footer">
  														<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
  														<button type="button" class="btn btn-dark">Save changes</button>
  													</div>
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
										<th>TITLE A.O.B</th>
										<th>TOPIC</th>
										<th>DATE</th>
                    <th>NOTES</th>

									</tr>
								</thead>
								<tbody>
									  <?php $i=1; foreach ($others as $others): ?>
									<tr>
										<td><?php echo $i; $i++;?></td>

										<td><?php echo $others['title'];?></td>
										<td><?php echo $others['topic'];?></td>
											<td><?php echo $others['date'];?></td>
                      	<td><?php echo $others['notes'];?></td>





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
