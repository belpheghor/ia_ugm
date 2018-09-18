 <h3><b>Startup Founder Data</b></h3>
 <hr>

 <a href="<?php echo base_url("supervisor/startup_founder/add") ?>" class="btn btn-success btn-sm">Create New</a>
 <br>
 <br>

 <table class="table table-bordered table-striped table-responsive" id="thetable">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>First Name</th>
 			<th>Last Name</th>
 			<th>Position</th>
 			<th>Major</th>
 			<th>Faculty</th>
 			<th>Startup</th>
 			<th>Requeted Permission</th>
 			<th>Option</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php foreach ($startup_founder as $key => $value): ?>
 			<tr>
 				<td><?php echo $key+1 ?></td>
 				<td><?php echo $value['first_name'] ?></td>
 				<td><?php echo $value['last_name'] ?></td>
 				<td><?php echo $value['sf_position'] ?></td>
 				<td><?php echo $value['faculty_name'] ?></td>
 				<td><?php echo $value['major_name'] ?></td>

 				<td><?php echo $value['startup_name'] ?></td>
 				<td>
 					<?php if ($value['sf_status']=="Pending"): ?>
 						<span style="color: red">Pending</span>
 					<?php endif ?>
 					<?php if ($value['sf_status']=='Accepted'): ?>
 						<span style="color: green">Accepted</span>
 					<?php endif ?>
 				</td>
 				<td>
 					<a href="<?php echo base_url("#startup_founder"); ?>" class="btn btn-warning btn-xs">Detail</a>
 					<a href="<?php echo base_url("supervisor/startup_founder/edit/$value[sf_id]") ?>" class="btn btn-info btn-xs"> Edit</a>
 					<?php if ($value['sf_status']=="Accepted"): ?>
 						<a href="<?php echo base_url("supervisor/startup_founder/delete/$value[sf_id]") ?>" class="btn btn-danger btn-xs">Delete</a>

 					<?php endif ?>
 					<?php if ($value['sf_status']==""): ?>

 						<a href="<?php echo base_url("supervisor/startup_founder/status/$value[sf_id]") ?>" class="btn btn-success btn-xs">Ask Permission</a>
 					<?php endif ?>
 				</td>
 			</tr>
 		<?php endforeach ?>
 	</tbody>

 </table>