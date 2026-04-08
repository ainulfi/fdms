
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                   <div class="col">
					 <div class="card radius-10 border-start border-0 border-3 border-info">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Water Level
									<h4 class="my-1 text-info">28.3</h4>
									<!-- <p class="mb-0 font-13">+2.5% from last week</p> -->
								</div>
								<div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bx-water'></i>
								</div>
							</div>
						</div>
					 </div>
				   </div>
				   <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-danger">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Temperature</p>
								   <h4 class="my-1 text-danger">28.3</h4>
								   <!-- <p class="mb-0 font-13">+5.4% from last week</p> -->
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bx-hot'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				  <!-- <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-success">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Bounce Rate</p>
								   <h4 class="my-1 text-success">34.6%</h4>
								   <p class="mb-0 font-13">-4.5% from last week</p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bxs-bar-chart-alt-2' ></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div> -->
				  <!-- <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-warning">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Customers</p>
								   <h4 class="my-1 text-warning">8.4K</h4>
								   <p class="mb-0 font-13">+8.4% from last week</p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-group'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div> --> 
				</div><!--end row-->

				<div class="row">
						<div class="col-12 col-lg-7 col-xl-6 d-flex">
						  <div class="card radius-10 w-100">
							<div class="card-header bg-transparent">
								<div class="d-flex align-items-center">
									<div>
										<h6 class="mb-0">Water Realtime Monitoring</h6>
										<div id="chart-container" style="width: 100%; height: 400px;"></div>
									</div>
									
								</div>
							   </div>
							 <div class="card-body">
								<div class="row">
								  <div class="col-lg-7 col-xl-8">
									 <div id="geographic-map-2"></div>
									
								  </div>
								</div>
							 </div>
						   </div>
						</div>

						<div class="col-12 col-lg-7 col-xl-6 d-flex">
						  <div class="card radius-10 w-100">
							<div class="card-header bg-transparent">
								<div class="d-flex align-items-center">
									<div>
										<h6 class="mb-0">Temperature Realtime Monitoring</h6>
									</div>
									
								</div>
							   </div>
							 <div class="card-body">
								<div class="row">
								  <div class="col-lg-7 col-xl-8">
									 <div id="geographic-map-2"></div>
									
								  </div>
								</div>
							 </div>
						   </div>
						</div>
					</div>

				<!-- table for data in local host -->	
				 <!-- <div class="card radius-10">
                         <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Recent Monitoring</h6>
								</div>
							</div>
						 <div class="table-responsive">
						   <table class="table align-middle mb-0">
							<thead class="table-light">
							 <tr>
							   <th>No</th>
							   <th>Water Level</th>
							   <th>Humidity</th>
							   <th>Temperature</th>
							   <th>Date & Time</th>
							 </tr>
							 </thead>
							 <tbody>
							 	<?php 
									$no = 1;
									foreach($tb_sensor as $u){ 
								?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $u->waterlevel ?></td>
									<td><?php echo $u->humidity ?></td>
									<td><?php echo $u->temperature ?></td>
									<td><?php echo $u->timetaken ?></td>
								</tr>
								<?php } ?>
						    </tbody>
						  </table>
						  </div>
						 </div>
					</div> -->
					<!-- end table for data in local host -->	

					<!-- table for data in the server -->	
				 <div class="card radius-10">
                         <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Recent Monitoring</h6>
								</div>
							</div>
						 <div class="table-responsive">
						   <table id="example2" class="table table-striped table-bordered">
							<thead class="table-light">
							 <tr>
							   <th>No</th>
							   <th>Id</th>
							   <th>Waterlevel</th>
							   <th>Humidity</th>
							   <th>Temperature</th>
							   <th>Date & Time</th>
							 </tr>
							 </thead>
							 <tbody>
							 	<?php 
									$no = 1;
									foreach($sensor_tb as $u){ 
								?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $u->id ?></td>
									<td><?php echo $u->sen_w ?></td>
									<td><?php echo $u->sen_h ?></td>
									<td><?php echo $u->sen_t ?></td>
									<td><?php echo $u->timetaken ?></td>
								</tr>
								<?php } ?>
						    </tbody>
						  </table>
						  </div>
						 </div>
					</div>
					<!-- end table for data in the server -->
					
			</div>

		</div>
		<!--end page wrapper -->


		