<h3><b>News Category</b></h3>
<hr>
<a href="<?php echo base_url("supervisor/category/add") ?>" class="btn btn-success btn-sm">Create New</a>
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
 						 	<span style="color: red">Pending</span>
 						 <?php endif ?>
 						 <?php if ($value['category_status']=='Accepted'): ?>
 						 	<span style="color: green">Accepted</span>
 						 <?php endif ?>
 					</td>
 					<td>
 							<!-- <a href="<?php echo base_url("#category"); ?>" class="btn btn-warning btn-xs">Detail</a> -->
 							<a href="<?php echo base_url("supervisor/category/edit/$value[category_id]") ?>" class="btn btn-info btn-xs"> Edit</a>
 							<?php if ($value['category_status']=="Accepted"): ?>
 							<a href="<?php echo base_url("supervisor/category/delete/$value[category_id]") ?>" class="btn btn-danger btn-xs">Delete</a>
 							
 						<?php endif ?>
 						<?php if ($value['category_status']==""): ?>

 							<a href="<?php echo base_url("supervisor/category/status/$value[category_id]") ?>" class="btn btn-success btn-xs">Ask Permission</a>
 						<?php endif ?>
 					</td>
			</tr>

		<?php endforeach ?>
	</tbody>
</table>
