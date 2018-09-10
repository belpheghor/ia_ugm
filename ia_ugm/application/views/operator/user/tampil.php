 	<h3><b>User Data</b></h3>
 	<hr>
 	<a href="<?php echo base_url("admin/user/add") ?>" class="btn btn-success btn-sm">Create New</a>
 	<br>
 	<br>
 	<table class="table table-bordered table-striped table-responsive" id="thetable">
 		<thead>
 			<tr> 
 				<th>No</th>
 				<th>Username</th>
 				<th>Email</th>
 				<th>Level</th>
 				<th>Option</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($user as $key => $value): ?>
 				<tr>
 					<td><?php echo $key+1; ?></td>
 					<td><?php echo $value['user_name']; ?></td>
 					<td><?php echo $value['user_email']; ?></td>
 					<td><?php echo $value['user_level'] ?></td>
 					<td>
 						<a href="<?php echo base_url("admin/user/edit/$value[user_id]") ?>" class="btn btn-info"> Edit</a>
 						<a href="<?php echo base_url("admin/user/delete/$value[user_id]") ?>" class="btn btn-danger">Delete</a>
 					</td> 
 				</tr>

 			<?php endforeach ?>
 		</tbody>
 	</table>
