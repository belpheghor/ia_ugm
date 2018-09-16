<h3><b>Background</b></h3>
<hr>
<a href="<?php echo base_url("admin/background/add") ?>" class="btn btn-success btn-sm">Create New</a> 
<br>
<br>
<table class="table table-bordered table-striped table-responsive" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>Image</th>
			<th>Background Status</th>
			<th>Requested Permission Status</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($background as $key => $value): ?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td>
					<img width="100" src="<?php echo base_url("assets/background/$value[background_img]") ?>">
				</td>
				<td>
					<?php if ($value['background_status']=="selected"): ?>
						<span style="color: green"><b>Selected</b></span>
					<?php else: ?>
						<span style="color: red"><b>Unselected</b></span>
					<?php endif ?>
				</td>
				<td>
 						<?php if ($value['permission_status']=="Pending"): ?>
 							<span style="color: red"><?php echo $value['permission_status'] ?></span>
 						<?php endif ?>
 						<?php if ($value['permission_status']=="Accepted"): ?>
 							<span style="color: green">Accepted</span>
 							
 						<?php endif ?>
 					</td> 
 					<td>
 						<?php if ($value['permission_status']!="Pending"): ?>
 							<a href="<?php echo base_url("admin/background/status/$value[background_id]") ?>" class="btn btn-success btn-xs hidden">Accept</a>
 						<?php else: ?>
 							<a href="<?php echo base_url("admin/background/status/$value[background_id]") ?>" class="btn btn-success btn-xs">Accept</a>
 							
 						<?php endif ?>
 						<a href="<?php echo base_url(""); ?>" class="btn btn-warning btn-xs">Detail</a>
 						<!-- <a href="<?php echo base_url("admin/background/edit/$value[background_id]") ?>"
 							class="btn btn-info btn-xs">Edit</a> -->
 						<a href="<?php echo base_url("admin/background/delete/$value[background_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 						<a href="<?php echo base_url("admin/background/select/$value[background_id]") ?>" class="btn btn-default btn-xs">Select</a>

 					</td>
				
			</tr>
			
		<?php endforeach ?>
	</tbody>
	
</table>