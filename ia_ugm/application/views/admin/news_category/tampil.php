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
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($category as $key => $value): ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $value['category_name']; ?></td>
					<td>
						<a href="<?php echo base_url("admin/category/edit/$value[category_id]") ?>" class="btn btn-info btn-sm"> Edit</a>
						<a href="<?php echo base_url("admin/category/delete/$value[category_id]") ?>" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
				
			<?php endforeach ?>
		</tbody>
	</table>
