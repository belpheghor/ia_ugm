<h3><b>Staff Data</b></h3>
<hr>
<a href="<?php echo base_url("supervisor/staff/add") ?>" class="btn btn-success btn-sm">Create New</a>
<br>
<br>

<table class="table table-bordered table-striped table-responsive" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Position</th>
			<th>Email</th>
			<th>Requested Permission</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($staff as $key => $value): ?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['first_name'] ?></td>
				<td><?php echo $value['last_name'] ?></td>
				<td><?php echo $value['person_position'] ?></td>
				<td><?php echo $value['person_email'] ?></td>
				<td>
 						 <?php if ($value['person_status']=="Pending"): ?>
 						 	<span style="color: red">Pending</span>
 						 <?php endif ?>
 						 <?php if ($value['person_status']=='Accepted'): ?>
 						 	<span style="color: green">Accepted</span>
 						 <?php endif ?>
 					</td>
 					<td>
 							<a href="<?php echo base_url("#staff"); ?>" class="btn btn-warning btn-xs">Detail</a>
 							<a href="<?php echo base_url("supervisor/staff/edit/$value[person_id]") ?>" class="btn btn-info btn-xs"> Edit</a>
 							<?php if ($value['person_status']=="Accepted"): ?>
 							<a href="<?php echo base_url("supervisor/staff/delete/$value[person_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 							
 						<?php endif ?>
 						<?php if ($value['person_status']==""): ?>

 							<a href="<?php echo base_url("supervisor/staff/status/$value[person_id]") ?>" class="btn btn-success btn-xs">Ask Permission</a>
 						<?php endif ?>
 					</td>
			</tr>
		<?php endforeach ?>
	</tbody>
	
</table>