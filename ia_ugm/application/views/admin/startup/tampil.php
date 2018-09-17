 	<h3><b>Startup Data</b></h3>
 	<hr>

 	<a href="<?php echo base_url("admin/startup/add") ?>" class="btn btn-success btn-sm">Create New</a>
 	<br>
 	<br>
 	<table class="table table-bordered table-striped table-responsive" id="thetable">
 		<thead>
 			<tr> 
 				<th>No</th>
 				<th>Startup Name</th>
 				<th>Link</th>
 				<th>Status</th>
 				<th>Option</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($startup as $key => $value): ?>
 				<tr>
 					<td><?php echo $key+1; ?></td>
 					<td><?php echo $value['startup_name']; ?></td>
 					<td><?php echo $value['startup_weburl']; ?></td>
 					<td><?php echo $value['startup_status']; ?></td>
 					<td>
 						<?php if ($value['permission_status']=="Pending"): ?>
 							<span style="color: red"><?php echo $value['permission_status'] ?></span>
 						<?php endif ?>
 						<?php if ($value['permission_status']=="Accepted"): ?>
 							<span style="color: green">Accepted</span>
 							
 						<?php endif ?>
 					</td> 
 					<td>
 						<?php if ($value['permission_status']!="Pending"): ?>
 							<a href="<?php echo base_url("admin/startup/status/$value[startup_id]") ?>" class="btn btn-success btn-xs hidden">Accept</a>
 						<?php else: ?>
 							<a href="<?php echo base_url("admin/startup/status/$value[startup_id]") ?>" class="btn btn-success btn-xs">Accept</a>
 							<?php endif ?>
 						<a href="<?php echo base_url("#startup"); ?>" class="btn btn-warning btn-xs">Detail</a>
 						<a href="<?php echo base_url("admin/startup/edit/$value[startup_id]") ?>"
 							class="btn btn-info btn-xs">Edit</a>
 						<a href="<?php echo base_url("admin/startup/delete/$value[startup_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 						
 							
 						

 					</td>
 				</tr>

 			<?php endforeach ?>
 		</tbody>
 	</table>
