<h3> <b>Mentor Data</b></h3>
<hr>
<a href="<?php echo base_url("supervisor/mentor/add") ?>" class="btn btn-success btn-sm">Create New</a>
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
			<th>Requested Permsission</th>
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
 						 	<span style="color: red">Pending</span>
 						 <?php endif ?>
 						 <?php if ($value['person_status']=='Accepted'): ?>
 						 	<span style="color: green">Accepted</span>
 						 <?php endif ?>
 					</td>
 					<td>
 							<a href="<?php echo base_url("#mentor"); ?>" class="btn btn-warning btn-xs">Detail</a>
 							<a href="<?php echo base_url("supervisor/mentor/edit/$value[person_id]") ?>" class="btn btn-info btn-xs"> Edit</a>
 							<?php if ($value['person_status']=="Accepted"): ?>
 							<a href="<?php echo base_url("supervisor/mentor/delete/$value[person_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 							
 						<?php endif ?>
 						<?php if ($value['person_status']==""): ?>

 							<a href="<?php echo base_url("supervisor/mentor/status/$value[person_id]") ?>" class="btn btn-success btn-xs">Ask Permission</a>
 						<?php endif ?>
 					</td>
			</tr>
		<?php endforeach ?>
	</tbody>
	
</table>