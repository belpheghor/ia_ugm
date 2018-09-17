 <h3><b>Startup Founder Data</b></h3>
<hr>

<a href="<?php echo base_url("admin/startup_founder/add") ?>" class="btn btn-success btn-sm">Create New</a>
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
 							<span style="color: red"><?php echo $value['sf_status'] ?></span>
 						<?php endif ?>
 						<?php if ($value['sf_status']=="Accepted"): ?>
 							<span style="color: green">Accepted</span>
 							
 						<?php endif ?>
 					</td> 
 					<td>
 						<?php if ($value['sf_status']!="Pending"): ?>
 							<a href="<?php echo base_url("admin/startup_founder/status/$value[sf_id]") ?>" class="btn btn-success btn-xs hidden">Accept</a>
 						<?php else: ?>
 							<a href="<?php echo base_url("admin/startup_founder/status/$value[sf_id]") ?>" class="btn btn-success btn-xs">Accept</a>
 							<?php endif ?>
 						<a href="<?php echo base_url("#sf"); ?>" class="btn btn-warning btn-xs">Detail</a>
 						<a href="<?php echo base_url("admin/startup_founder/edit/$value[sf_id]") ?>"
 							class="btn btn-info btn-xs">Edit</a>
 						<a href="<?php echo base_url("admin/startup_founder/delete/$value[sf_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 						
 							
 						

 					</td>
			</tr>
		<?php endforeach ?>
	</tbody>
	
</table>