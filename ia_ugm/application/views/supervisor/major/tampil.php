<h3><b>Major Data</b></h3>
	<hr>
	<a href="<?php echo base_url("supervisor/major/add") ?>" class="btn btn-success btn-sm">Create New</a>
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
 						 	<span style="color: red">Pending</span>
 						 <?php endif ?>
 						 <?php if ($value['major_status']=='Accepted'): ?>
 						 	<span style="color: green">Accepted</span>
 						 <?php endif ?>
 					</td>
 					<td>
 							<a href="https://ugm.ac.id/en/news/4921-faculties.directory" class="btn btn-warning btn-xs">Detail</a>
 							<a href="<?php echo base_url("supervisor/major/edit/$value[major_id]") ?>" class="btn btn-info btn-xs"> Edit</a>
 							<?php if ($value['major_status']=="Accepted"): ?>
 							<a href="<?php echo base_url("supervisor/major/delete/$value[major_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 							
 						<?php endif ?>
 						<?php if ($value['major_status']==""): ?>

 							<a href="<?php echo base_url("supervisor/major/status/$value[major_id]") ?>" class="btn btn-success btn-xs">Ask Permission</a>
 						<?php endif ?>
 					</td>
				</tr>
				
			<?php endforeach ?>
		</tbody>
	</table>
