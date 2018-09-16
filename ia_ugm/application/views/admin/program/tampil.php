 	<h3><b>Program Data</b></h3>
 	<hr>
 	<a href="<?php echo base_url("admin/program/add") ?>" class="btn btn-success btn-sm">Create New</a>
 	<br>
 	<br>
 	<table class="table table-bordered table-striped table-responsive" id="thetable">
 		<thead>
 			<tr> 
 				<th>No</th>
 				<th>Program Name</th>
 				<th>Program Priority</th>
 				<th>Requested Permission</th>
 				<th>Option</th>
 			</tr> 
 		</thead>
 		<tbody>
 			<?php foreach ($program as $key => $value): ?>
 				<tr>
 					<td><?php echo $key+1; ?></td>
 					<td><?php echo $value['program_name'] ?></td>
 					<td><?php echo $value['program_level']; ?></td>
 					<td>
 						<?php if ($value['program_status']=="Pending"): ?>
 							<span style="color: red"><?php echo $value['program_status'] ?></span>
 						<?php endif ?>
 						<?php if ($value['program_status']=="Accepted"): ?>
 							<span style="color: green">Accepted</span>
 							
 						<?php endif ?>
 					</td> 
 					<td>
 						<?php if ($value['program_status']!="Pending"): ?>
 							<a href="<?php echo base_url("admin/program/status/$value[program_id]") ?>" class="btn btn-success btn-xs hidden">Accept</a>
 						<?php else: ?>
 							<a href="<?php echo base_url("admin/program/status/$value[program_id]") ?>" class="btn btn-success btn-xs">Accept</a>
 							<?php endif ?>
 						<a href="<?php echo base_url("#program"); ?>" class="btn btn-warning btn-xs">Detail</a>
 						<a href="<?php echo base_url("admin/program/edit/$value[program_id]") ?>"
 							class="btn btn-info btn-xs">Edit</a>
 						<a href="<?php echo base_url("admin/program/delete/$value[program_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 						
 							
 						

 					</td>
 				</tr>

 			<?php endforeach ?>
 		</tbody>
 	</table>
