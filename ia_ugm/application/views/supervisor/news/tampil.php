<h3><b>News Data</b></h3>
<hr>
<a href="<?php echo base_url("supervisor/news/add") ?>" class="btn btn-success btn-sm">Create New</a>
<br>
<br>
<table class="table table-bordered table-striped table-responsive" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>Category</th>
			<th>News Title</th>
			<th>Date Created</th>
			<th>Date Release</th>
			<th>User</th> 
			<th>Requested Permission</th>
			<th>Option</th>
		</tr>
	</thead>

	<?php foreach ($news as $key => $value): ?>
		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo $value['category_name'] ?></td>
			<td><?php echo $value['news_title'] ?></td>
			<td>
				<?php $explode_created=explode(" ", $value['news_created']) ?>
				Date: <?php echo $explode_created[0] ?>
				<br>
				
				
			</td>
			<td>
				<?php $explode_release=explode(" ", $value['news_release']) ?>
				Date: <?php echo $explode_release[0] ?>
				<br>
				
			</td>
			<td><?php echo $value['user_name'] ?></td>
			<td>
				<?php if ($value['permission_status']=="Pending"): ?>
					<span style="color: red">Pending</span>
				<?php endif ?>
				<?php if ($value['permission_status']=='Accepted'): ?>
					<span style="color: green">Accepted</span>
				<?php endif ?>
			</td>
			<td>
				<a href="<?php echo base_url("#news"); ?>" class="btn btn-warning btn-xs">Detail</a>
				<a href="<?php echo base_url("supervisor/news/edit/$value[news_id]") ?>" class="btn btn-info btn-xs"> Edit</a>
				<?php if ($value['permission_status']=="Accepted"): ?>
					<a href="<?php echo base_url("supervisor/news/delete/$value[news_id]") ?>" class="btn btn-danger btn-xs">Delete</a>

				<?php endif ?>
				<?php if ($value['permission_status']==""): ?>

					<a href="<?php echo base_url("supervisor/news/status/$value[news_id]") ?>" class="btn btn-success btn-xs">Ask Permission</a>
				<?php endif ?>
			</td>
		</tr>

	<?php endforeach ?>
</table>
