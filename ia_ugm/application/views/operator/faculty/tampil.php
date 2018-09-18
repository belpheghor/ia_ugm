<h3><b>Faculty Data</b></h3>
	<hr>
	<a href="<?php echo base_url("operator/faculty/add") ?>" class="btn btn-success btn-sm">Create New</a>
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
 						 	<span style="color: red">Pending</span>
 						 <?php endif ?>
 						 <?php if ($value['faculty_status']=='Accepted'): ?>
 						 	<span style="color: green">Accepted</span>
 						 <?php endif ?>
 					</td>
 					<td>
 							<a href="https://ugm.ac.id/en/news/4921-faculties.directory" class="btn btn-warning btn-xs">Detail</a> 
 							<?php if ($value['faculty_status']=="Accepted"): ?>
 							<a href="<?php echo base_url("operator/faculty/edit/$value[faculty_id]") ?>" class="btn btn-info btn-xs"> Edit</a>
 							<a href="<?php echo base_url("operator/faculty/delete/$value[faculty_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 							
 						<?php endif ?>
 						<?php if ($value['faculty_status']==""): ?>

 							<a href="<?php echo base_url("operator/faculty/status/$value[faculty_id]") ?>" class="btn btn-success btn-xs">Ask Permission</a>
 						<?php endif ?>
 					</td>
				</tr>
				
			<?php endforeach ?>
		</tbody>
	</table>
