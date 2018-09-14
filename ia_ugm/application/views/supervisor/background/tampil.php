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
					<a href="<?php echo base_url("") ?>" class="btn btn-warning btn-sm">Detail</a>
				<a href="<?php echo base_url("supervisor/background/edit/$value[background_id]") ?>" class="btn btn-info">Edit</a>
				<a href="<?php echo base_url("supervisor/background/delete/$value[background_id]") ?>" class="btn btn-danger btn-sm">Delete</a>
				</td>
				
			</tr>
			
		<?php endforeach ?>
	</tbody>
	
</table>