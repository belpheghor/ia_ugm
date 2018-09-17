<h3><b>Faculty Data</b></h3>
	<hr>
	<a href="<?php echo base_url("admin/faculty/add") ?>" class="btn btn-success btn-sm">Create New</a>
	<br>
	<br>

	<table class="table table-bordered table-striped table-responsive" id="thetable">
		<thead>
			<tr>
				<th>No</th>
				<th>Faculty Name</th>
				<th>Requested Permission Status</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($faculty as $key => $value): ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $value['faculty_name']; ?></td>
					<td>
 						<?php if ($value['faculty_status']=="Pending"): ?>
 							<span style="color: red"><?php echo $value['faculty_status'] ?></span>
 						<?php endif ?>
 						<?php if ($value['faculty_status']=="Accepted"): ?>
 							<span style="color: green">Accepted</span>
 							
 						<?php endif ?>
 					</td> 
 					<td>
 						<?php if ($value['faculty_status']!="Pending"): ?>
 							<a href="<?php echo base_url("admin/faculty/status/$value[faculty_id]") ?>" class="btn btn-success btn-xs hidden">Accept</a>
 						<?php else: ?>
 							<a href="<?php echo base_url("admin/faculty/status/$value[faculty_id]") ?>" class="btn btn-success btn-xs">Accept</a>
 							<?php endif ?>
 						<a href="<?php echo base_url("#faculty"); ?>" class="btn btn-warning btn-xs">Detail</a>
 						<a href="<?php echo base_url("admin/faculty/edit/$value[faculty_id]") ?>"
 							class="btn btn-info btn-xs">Edit</a>
 						<a href="<?php echo base_url("admin/faculty/delete/$value[faculty_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 						
 							
 						

 					</td>
				</tr>
				
			<?php endforeach ?>
		</tbody>
	</table>
