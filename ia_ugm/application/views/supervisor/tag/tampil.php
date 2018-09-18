<h3><b>News Tag</b></h3>
<hr>
<a href="<?php echo base_url("supervisor/tag/add") ?>" class="btn btn-success btn-sm">Create New</a>
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
						<span style="color: red">Pending</span>
					<?php endif ?>
					<?php if ($value['tag_status']=='Accepted'): ?>
						<span style="color: green">Accepted</span>
					<?php endif ?>
				</td>
				<td>
<!-- 					<a href="<?php echo base_url("#tag"); ?>" class="btn btn-warning btn-xs">Detail</a>
 -->					<a href="<?php echo base_url("supervisor/tag/edit/$value[tag_id]") ?>" class="btn btn-info btn-xs"> Edit</a>
					<?php if ($value['tag_status']=="Accepted"): ?>
						<a href="<?php echo base_url("supervisor/tag/delete/$value[tag_id]") ?>" class="btn btn-danger btn-xs">Delete</a>

					<?php endif ?>
					<?php if ($value['tag_status']==""): ?>

						<a href="<?php echo base_url("supervisor/tag/status/$value[tag_id]") ?>" class="btn btn-success btn-xs">Ask Permission</a>
					<?php endif ?>
				</td>
			</tr>

		<?php endforeach ?>
	</tbody>
</table>
