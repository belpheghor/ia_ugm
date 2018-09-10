<h1 class="text-left ia-title">Background</h1>

<a href="<?php echo base_url("admin/background/add") ?>" class="btn btn-success btn-sm">Create New</a> 
<br>
<br>
<table class="table table-bordered table-striped table-responsive" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>Image</th>
			<th>Background Status</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($background as $key => $value): ?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td>
					<img width="100%" src="<?php echo base_url("assets/background/$value[background_img]") ?>">
				</td>
				<td>
					<?php if ($value['background_status']=="selected"): ?>
						<span style="color: green"><b>Selected</b></span>
					<?php else: ?>
						<span style="color: red"><b>Unselected</b></span>
					<?php endif ?>
				</td>
				<td>
					<a href="<?php echo base_url("") ?>" class="btn btn-warning btn-sm">Detail</a>
					<a href="<?php echo base_url("admin/background/edit/$value[background_id]") ?>" class="btn btn-info">Edit</a>
					<a href="<?php echo base_url("admin/background/delete/$value[background_id]") ?>" class="btn btn-danger btn-sm">Delete</a>
					<a href="<?php echo base_url("admin/background/select/$value[background_id]") ?>" class="btn btn-default">Select</a>
				</td>
				
			</tr>
			
		<?php endforeach ?>
	</tbody>
	
</table>