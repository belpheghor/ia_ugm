<h3><b>News Tag</b></h3>
	<hr>
	<a href="<?php echo base_url("admin/tag/add") ?>" class="btn btn-success btn-sm">Create New</a>
	<br>
	<br> 

	<table class="table table-bordered table-striped table-responsive" id="thetable">
		<thead>
			<tr>
				<th>No</th>
				<th>Tag Name</th>
				<th>Requested Permission</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($tag as $key => $value): ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $value['tag_name']; ?></td>
					<td>
					<?php if ($value['tag_status']=="Pending"): ?>
						<span style="color: red"><?php echo $value['tag_status'] ?></span>
					<?php endif ?>
					<?php if ($value['tag_status']=="Accepted"): ?>
						<span style="color: green">Accepted</span>
						
					<?php endif ?>
				</td> 
				<td>
					<?php if ($value['tag_status']!="Pending"): ?>
						<a href="<?php echo base_url("admin/tag/status/$value[tag_id]") ?>" class="btn btn-success btn-xs hidden">Accept</a>
					<?php else: ?>
						<a href="<?php echo base_url("admin/tag/status/$value[tag_id]") ?>" class="btn btn-success btn-xs">Accept</a>
					<?php endif ?>
					<!-- <a href="<?php echo base_url("#tag"); ?>" class="btn btn-warning btn-xs">Detail</a> -->
					<a href="<?php echo base_url("admin/tag/edit/$value[tag_id]") ?>"
						class="btn btn-info btn-xs">Edit</a>
						<a href="<?php echo base_url("admin/tag/delete/$value[tag_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
					</td>
				</tr>
				
			<?php endforeach ?>
		</tbody>
	</table>
