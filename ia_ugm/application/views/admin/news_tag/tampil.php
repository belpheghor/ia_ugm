<h3><b>News Tag Data</b></h3>

<a href="<?php echo base_url("admin/news_tag/add") ?>"
	class="btn btn-success">Create New</a>
	<br>
	<br>
	

	<table class="table table-bordered table-striped table-responsive" id="thetable">
		<thead>
			<tr>
				<th>No</th>
				<th>News Title</th>
				<th>Tag</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($news_tag as $key => $value): ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $value['news_title']; ?></td>
					<td><?php echo $value['tag_name']; ?></td>
					<td>
						<a href="<?php echo base_url("admin/news_tag/edit/$value[newstag_id]") ?>" class="btn btn-info btn-sm"> Edit</a>
						<a href="<?php echo base_url("admin/news_tag/delete/$value[newstag_id]") ?>" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>