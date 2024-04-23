<div class="page-wrapper">
    <div class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Items Borrowing table</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">contents table</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Add here👉👉👉👉 </button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="<?php echo base_url('index.php/borrow/create/');?>">Add here</a>
								<a class="dropdown-item" href="<?php echo base_url('index.php/borrow/');?>">view</a>

							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Borrowing s🙏🙏</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                    <th>Number</th>
										<th>Item Name</th>
										<th>Serial Number</th>
										<th>Borrower</th>
										<th>Bprrower. identification</th>
										<th>item condition</th>
                    	<th>Date Borrowed</th>


									</tr>
								</thead>
                <tbody>
                  <?php $i=1; foreach ($borrow as $borrow): ?>
                                      <tr>
                                          <td><?php echo $i; $i++;?></td>

                                          <td><?php echo $borrow['name'];?></td>
                                          <td><?php echo $borrow['serial'];?></td>
                                            <td><?php echo $borrow['namea'];?></td>
                                            <td><?php echo $borrow['phone'];?></td>

                                              <td><?php echo $borrow['conde'];?></td>
                                                <td><?php echo $borrow['date'];?></td>




                                      </tr>
                                        <?php endforeach ?>


                </tbody>
              <tfoot>
                <tr>
                  <th>&&&</th>
                  <th>Item Name</th>
                  <th>Serial Number</th>
                  <th>Borrower</th>
                  <th>Bprrower. identification</th>
                  <th>item condition</th>
                    <th>Date Borrowed</th>

                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
