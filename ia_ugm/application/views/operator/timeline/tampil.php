 	<h3><b>Timeline Data</b></h3>
 	<hr>
 	<a href="<?php echo base_url("supervisor/timeline/add") ?>" class="btn btn-success btn-sm">Create New</a>
 	<br>
 	<br>
 	<table class="table table-bordered table-striped table-responsive" id="thetable">
 		<thead>
 			<tr> 
 				<th>No</th>
 				<th>Timeline Name</th>
 				<th>Program Name</th>
 				<th>Timeline Start</th>
 				<th>Timeline End</th>
 				<th>Requested Permission</th>
 				<th>Option</th>
 			</tr>
 		</thead> 
 		<tbody>
 			<?php foreach ($timeline as $key => $value): ?>
 				<tr>
 					<td><?php echo $key+1; ?></td>
 					<td><?php echo $value['timeline_name']; ?></td>
 					<td><?php echo $value['program_name'] ?></td>
 					<td><?php echo $value['timeline_start']; ?></td>
 					<td><?php echo $value['timeline_end'] ?></td>
 					<td>
 						 <?php if ($value['timeline_status']=="Pending"): ?>
 						 	<span style="color: red">Pending</span>
 						 <?php endif ?>
 						 <?php if ($value['timeline_status']=='Accepted'): ?>
 						 	<span style="color: green">Accepted</span>
 						 <?php endif ?>
 					</td>
 					<td>
 							<a href="<?php echo base_url("#timeline"); ?>" class="btn btn-warning btn-xs">Detail</a>
 							<a href="<?php echo base_url("supervisor/timeline/edit/$value[timeline_id]") ?>" class="btn btn-info btn-xs"> Edit</a>
 							<?php if ($value['timeline_status']=="Accepted"): ?>
 							<a href="<?php echo base_url("supervisor/timeline/delete/$value[timeline_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 							
 						<?php endif ?>
 						<?php if ($value['timeline_status']==""): ?>

 							<a href="<?php echo base_url("supervisor/timeline/status/$value[timeline_id]") ?>" class="btn btn-success btn-xs">Ask Permission</a>
 						<?php endif ?>
 					</td>
 				</tr>

 			<?php endforeach ?>
 		</tbody>
 	</table>
