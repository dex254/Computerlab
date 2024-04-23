<div class="page-wrapper">
    <div class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Crop</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Farm Production Table</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Crop and maintainace </button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="<?php echo base_url('index.php/crop/create/');?>">Add here</a>
								<a class="dropdown-item" href="<?php echo base_url('index.php/crop/');?>">view</a>
								<a class="dropdown-item" href="<?php echo base_url('index.php/cale/create/');?>">Crop treatment</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="<?php echo base_url('index.php/cale/create/');?>">treating</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Animals</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                    <th>serial</th>
										<th>Crop  Name</th>
										<th>Crop Berand</th>
										<th>Date Planted</th>
										<th>Land size</th>
                    <th>Fatilizer quantity in(kg)</th>
										<th>Input costs</th>

									</tr>
								</thead>
                <tbody>
                  <?php $i=1; foreach ($crop as $crop): ?>
                                      <tr>
                                          <td>202200<?php echo $i; $i++;?></td>

                                          <td><?php echo $crop['name'].' '.$crop['id'];?></td>
                                          <td><?php echo $crop['breed'];?></td>
                                            <td><?php echo $crop['date'];?></td>
                                              <td><?php echo $crop['size'];?></td>
                                                <td><?php echo $crop['fat'];?></td>
                                                <td><?php echo $crop['pesa'];?></td>




                                      </tr>
                                        <?php endforeach ?>


                </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Bland</th>
                  <th>Date Planted</th>
                  <th>land size</th>
                    <th>Fatilizer Quantiy</th>
                  <th>Price of input</th>

                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
