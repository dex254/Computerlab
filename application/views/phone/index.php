
<div class="page-wrapper">
			<div class="page-content">
        <div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Contact Entry</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-white">
							<div class="card-body">
								<div class="border p-4 rounded">
									
									<hr/>
<?php echo form_open_multipart('phone/store',$attributes); ?>
<div class="row mb-3">
  <label  class="col-sm-3 col-form-label">Enter name</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="name" name="name" placeholder=" Name type">
  </div><span class="help-block"><?php echo form_error('name'); ?></span>
</div>
<div class="row mb-3">
  <label  class="col-sm-3 col-form-label">Enter phone number</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter contacts">
  </div><span class="help-block"><?php echo form_error('phone'); ?></span>
</div>
<div class="row mb-3">
  <label  class="col-sm-3 col-form-label">Date of activites</label>
  <div class="col-sm-9">
    <input type="date" class="form-control" id="date" name="date" placeholder="pick  Date">
  </div><span class="help-block"><?php echo form_error('date'); ?></span>
</div>
<div class="row mb-3">
  <label  class="col-sm-3 col-form-label">Sarvice offerd</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="save" name="save" placeholder="describe service offerd">
  </div><span class="help-block"><?php echo form_error('save'); ?></span>
</div>
<div class="row mb-3">
  <label  class="col-sm-3 col-form-label">Enter the accupation</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="acc" name="acc" placeholder="Acronym">
  </div><span class="help-block"><?php echo form_error('acc'); ?></span>
</div>



<div class="row">
  <label class="col-sm-3 col-form-label"></label>
  <div class="col-sm-9">
    <button type="submit" class="btn btn-light px-5">Upload</button>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

    <div class="page-content">
      <!--breadcrumb-->

				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Contact table</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
                    <th>my no</th>
										<th>  Name</th>
										<th>contact</th>
										<th>Date of activites</th>
										<th>service </th>
                    <th>Acronym</th>


									</tr>
								</thead>
                <tbody>
                  <?php $i=1; foreach ($phone as $phone): ?>
                                      <tr>
                                          <td>my contact<?php echo $i; $i++;?></td>

                                          <td><?php echo $phone['name'];?></td>
                                          <td><?php echo $phone['phone'];?></td>
                                            <td><?php echo $phone['date'];?></td>
                                              <td><?php echo $phone['save'];?></td>
                                                <td><?php echo $phone['acc'];?></td>





                                      </tr>
                                        <?php endforeach ?>


                </tbody>
              <tfoot>
                <tr>
                  <th>no</th>
                  <th>Name</th>
                  <th>phone</th>
                  <th>Date </th>
                  <th>service</th>
                    <th>Acronym</th>


                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>

</div>
