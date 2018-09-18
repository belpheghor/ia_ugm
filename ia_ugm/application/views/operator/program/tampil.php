 	<h3><b>Program Data</b></h3>
 	<hr>
 	<a href="<?php echo base_url("supervisor/program/add") ?>" class="btn btn-success btn-sm">Create New</a>
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
 						 	<span style="color: red">Pending</span>
 						 <?php endif ?>
 						 <?php if ($value['program_status']=='Accepted'): ?>
 						 	<span style="color: green">Accepted</span>
 						 <?php endif ?>
 					</td>
 					<td>
 							<a href="<?php echo base_url("#program"); ?>" class="btn btn-warning btn-xs">Detail</a>
 							<a href="<?php echo base_url("supervisor/program/edit/$value[program_id]") ?>" class="btn btn-info btn-xs"> Edit</a>
 							<?php if ($value['program_status']=="Accepted"): ?>
 							<a href="<?php echo base_url("supervisor/program/delete/$value[program_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 							
 						<?php endif ?>
 						<?php if ($value['program_status']==""): ?>

 							<a href="<?php echo base_url("supervisor/program/status/$value[program_id]") ?>" class="btn btn-success btn-xs">Ask Permission</a>
 						<?php endif ?>
 					</td>
 				</tr>

 			<?php endforeach ?>
 		</tbody>
 	</table>
