<h3><b>News Tag Form</b></h3>
<hr>
<form method="post">
	<div class="form-group">
		<label>Tag Name</label>
		
			<input type="text" name="tag_name" class="form-control">
		
	</div>
	<div class="form-group">
		<label>News Title</label>
		<select class="form-control" name="news_id">
			<option>- Select News -</option>
			<?php foreach ($news as $key => $value): ?>
				<option value="<?php echo $value['news_id'] ?>">
					<?php echo $value['news_title'] ?>
				</option>
				
			<?php endforeach ?>
			
		</select>
		</div>
	<button class="btn btn-primary">Submit</button>
	<a href="<?php echo base_url("admin/news_tag/"); ?>" class="btn btn-danger">Cancel</a>
	
	
</form>