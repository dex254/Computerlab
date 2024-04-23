<div class="page-wrapper">
    <div class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">LAB ITEM RETARNINGS</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">RECIVED ITEMS</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">others on dropdown👉👉 </button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="<?php echo base_url('index.php/ritan/create/');?>">Add here</a>
								<a class="dropdown-item" href="<?php echo base_url('index.php/ritan/');?>">view</a>
								<a class="dropdown-item" href="<?php echo base_url('index.php/ritan/create/');?>">Retarn an item here</a>
								<div class="dropdown-divider"></div>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">LAB AND OFFICE ITEMS</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                    <th>🔢🔢</th>
										<th>ITEM NAME</th>
										<th>RETARN DATE</th>
										<th>CONDITION </th>
                    <th>NAME OF PERSON RETARNING</th>
										<th>ID ENTITY</th>
										<th>ITEM SERIAL NUMBER</th>

									</tr>
								</thead>
                <tbody>
                  <?php $i=1; foreach ($ritan as $ritan): ?>
                                      <tr>
                                          <td><?php echo $i; $i++;?></td>

                                          <td><?php echo $ritan['name'];?></td>
                                          <td><?php echo $ritan['date'];?></td>
                                            <td><?php echo $ritan['conde'];?></td>
                                              <td><?php echo $ritan['names'];?></td>
                                                <td><?php echo $ritan['phone'];?></td>
                                                  <td><?php echo $ritan['serial'];?></td>




                                      </tr>
                                        <?php endforeach ?>


                </tbody>
              <tfoot>

              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
