<h3><b>News Category</b></h3>
<hr>
<a href="<?php echo base_url("admin/category/add") ?>" class="btn btn-success btn-sm">Create New</a>
<br>
<br>

<table class="table table-bordered table-striped table-responsive" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>Category Name</th>
			<th>Requested Permission</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($category as $key => $value): ?>
			<tr>
				<td><?php echo $key+1; ?></td>
				<td><?php echo $value['category_name']; ?></td>
				<td>
					<?php if ($value['category_status']=="Pending"): ?>
						<span style="color: red"><?php echo $value['category_status'] ?></span>
					<?php endif ?>
					<?php if ($value['category_status']=="Accepted"): ?>
						<span style="color: green">Accepted</span>
						
					<?php endif ?>
				</td> 
				<td>
					<?php if ($value['category_status']!="Pending"): ?>
						<a href="<?php echo base_url("admin/category/status/$value[category_id]") ?>" class="btn btn-success btn-xs hidden">Accept</a>
					<?php else: ?>
						<a href="<?php echo base_url("admin/category/status/$value[category_id]") ?>" class="btn btn-success btn-xs">Accept</a>
					<?php endif ?>
					<!-- <a href="<?php echo base_url("#category"); ?>" class="btn btn-warning btn-xs">Detail</a> -->
					<a href="<?php echo base_url("admin/category/edit/$value[category_id]") ?>"
						class="btn btn-info btn-xs">Edit</a>
						<a href="<?php echo base_url("admin/category/delete/$value[category_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
					</td>
				</tr>
				
			<?php endforeach ?>
		</tbody>
	</table>
