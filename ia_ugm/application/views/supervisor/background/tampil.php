<h3><b>Background</b></h3>
<hr>
<a href="<?php echo base_url("supervisor/background/add") ?>" class="btn btn-success btn-sm">Create New</a> 
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
 						 	<span style="color: red">Pending</span>
 						 <?php endif ?>
 						 <?php if ($value['permission_status']=='Accepted'): ?>
 						 	<span style="color: green">Accepted</span>
 						 <?php endif ?>
 					</td>
 					<td>
 						
 							<a href="<?php echo base_url(""); ?>" class="btn btn-warning btn-xs">Detail</a>
 							<!-- <a href="<?php echo base_url("supervisor/background/edit/$value[background_id]") ?>"
 							class="btn btn-info btn-xs">Edit</a> -->
 							
 							<a href="<?php echo base_url("supervisor/background/select/$value[background_id]") ?>" class="btn btn-default btn-xs">Select</a>
 							<?php if ($value['permission_status']=="Accepted"): ?>
 							<a href="<?php echo base_url("supervisor/background/delete/$value[background_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 							
 							
 							
 						<?php endif ?>
 						<?php if ($value['permission_status']==""): ?>

 							<a href="<?php echo base_url("supervisor/background/status/$value[background_id]") ?>" class="btn btn-success btn-xs">Ask Permission</a>
 						<?php endif ?>
 					</td>
				
			</tr>
			
		<?php endforeach ?>
	</tbody>
	
</table>