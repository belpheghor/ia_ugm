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
 						<a href="" class="btn btn-warning btn-sm">Detail</a>
 						<a href="<?php echo base_url("admin/program/edit/$value[program_id]") ?>" class="btn btn-info btn-sm"> Edit</a>

 						<a href="<?php echo base_url("admin/program/delete/$value[program_id]") ?>" class="btn btn-danger btn-sm">Delete</a>
 					</td> 
 				</tr>

 			<?php endforeach ?>
 		</tbody>
 	</table>
