<h3><b>Mentor Data</b></h3>
<hr>

<a href="<?php echo base_url("admin/mentor/add") ?>" class="btn btn-success btn-sm">Create New</a>
<br>
<br>

<table class="table table-bordered table-striped table-responsive" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Company</th>
			<th>Linkedin</th>
			<th>Website</th>
			<th>Requested Permission</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($mentor as $key => $value): ?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['first_name'] ?></td>
				<td><?php echo $value['last_name'] ?></td>
				<td><?php echo $value['person_company'] ?></td>
				<td><?php echo $value['person_linkedin'] ?></td>
				<td><?php echo $value['person_website'] ?></td>
				<td>
 						<?php if ($value['person_status']=="Pending"): ?>
 							<span style="color: red"><?php echo $value['person_status'] ?></span>
 						<?php endif ?>
 						<?php if ($value['person_status']=="Accepted"): ?>
 							<span style="color: green">Accepted</span>
 							
 						<?php endif ?>
 					</td> 
 					<td>
 						<?php if ($value['person_status']!="Pending"): ?>
 							<a href="<?php echo base_url("admin/mentor/status/$value[person_id]") ?>" class="btn btn-success btn-xs hidden">Accept</a>
 						<?php else: ?>
 							<a href="<?php echo base_url("admin/mentor/status/$value[person_id]") ?>" class="btn btn-success btn-xs">Accept</a>
 							<?php endif ?>
 						<a href="<?php echo base_url("#mentor"); ?>" class="btn btn-warning btn-xs">Detail</a>
 						<a href="<?php echo base_url("admin/mentor/edit/$value[person_id]") ?>"
 							class="btn btn-info btn-xs">Edit</a>
 						<a href="<?php echo base_url("admin/mentor/delete/$value[person_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 					</td>
			</tr>
		<?php endforeach ?>
	</tbody>
	
</table>