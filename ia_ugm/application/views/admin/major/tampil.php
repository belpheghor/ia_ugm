<h3><b>Major Data</b></h3>
	<hr>
	<a href="<?php echo base_url("admin/major/add") ?>" class="btn btn-success btn-sm">Create New</a>
	<br>
	<br>

	<table class="table table-bordered table-striped table-responsive" id="thetable">
		<thead>
			<tr>
				<th>No</th>
				<th>Faculty Name</th>
				<th>Major Name</th>
				<th>Requested Permission Status</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($major as $key => $value): ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $value['faculty_name']; ?></td>
					<td><?php echo $value['major_name']; ?></td>
					<td>
 						<?php if ($value['major_status']=="Pending"): ?>
 							<span style="color: red"><?php echo $value['major_status'] ?></span>
 						<?php endif ?>
 						<?php if ($value['major_status']=="Accepted"): ?>
 							<span style="color: green">Accepted</span>
 							
 						<?php endif ?>
 					</td> 
 					<td>
 						<?php if ($value['major_status']!="Pending"): ?>
 							<a href="<?php echo base_url("admin/major/status/$value[major_id]") ?>" class="btn btn-success btn-xs hidden">Accept</a>
 						<?php else: ?>
 							<a href="<?php echo base_url("admin/major/status/$value[major_id]") ?>" class="btn btn-success btn-xs">Accept</a>
 							<?php endif ?>
 						<a href="<?php echo base_url("#major"); ?>" class="btn btn-warning btn-xs">Detail</a>
 						<a href="<?php echo base_url("admin/major/edit/$value[major_id]") ?>"
 							class="btn btn-info btn-xs">Edit</a>
 						<a href="<?php echo base_url("admin/major/delete/$value[major_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 						
 							
 						

 					</td>
				</tr>
				
			<?php endforeach ?>
		</tbody>
	</table>
