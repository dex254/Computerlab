<div class="page-wrapper">
    <div class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">🥼🥼🧪</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">ALL ITEMS ON THE DATABASE</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
              <button type="button" class="btn btn-light">Tap here👉👉👉👉</button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="<?php echo base_url('index.php/dennis/create/');?>">Add here</a>
								<a class="dropdown-item" href="<?php echo base_url('index.php/dennis/');?>">view</a>
								<a class="dropdown-item" href="<?php echo base_url('index.php/dennis/create/');?>">UPDATE</a>

							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">KIPKABUS LAB</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                    <th>🔒🔒🔒</th>
										<th>ITEMS   Name</th>
                    <th>ITEMS serial Number</th>
										<th>Condition of item</th>

										<th>Entrydate</th>
                    <th>🖥️🖥️</th>


									</tr>
								</thead>
                <tbody>
                  <?php $i=1; foreach ($dennis as $dennis): ?>
                                      <tr>
                                          <td>🔒🔒<?php echo $i; $i++;?></td>


                                          <td><?php echo $dennis['name'];?></td>
                                          <td><?php echo $dennis['serial'];?></td>
                                            <td><?php echo $dennis['conde'];?></td>
                                              <td><?php echo $dennis['date'];?></td>

                                                <td><a href=""><button type="button" class="btn btn-warning px-5 radius-30"><i class="fa fa-search"></i>Remove</button></a></td>




                                      </tr>
                                        <?php endforeach ?>


                </tbody>
              <tfoot>
                <tr>
                  <th>🔒🔒🔒</th>
                  <th>item   Name</th>
                  <th>serial</th>
                  <th>condition</th>

                  <th>date</th>
                  <th>🖥️🖥️</th>


                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
