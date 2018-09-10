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
				<!-- detail nyambung ke front(pengunjung) pada news yang di klik -->
				<a href="<?php echo base_url("") ?>" class="btn btn-warning btn-sm">Detail</a>
				<a href="<?php echo base_url("supervisor/news/edit/$value[news_id]") ?>" class="btn btn-info">Edit</a>
				<a href="<?php echo base_url("supervisor/news/delete/$value[news_id]") ?>" class="btn btn-danger btn-sm">Delete</a>
			</td>
		</tr>

		<?php endforeach ?>
</table>
