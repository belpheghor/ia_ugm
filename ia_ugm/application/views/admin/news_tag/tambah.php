<h3><b>News Tag Form</b></h3>
<hr>		
<form method="post">
	<div class="form-group">
			<label>Tag</label>
			<?php foreach ($tag as $key => $value): ?>
				<!-- [] untuk isi index tag_id karena data array & lebih dari satu -->
				<input type="checkbox" name="tag_id[]" value="<?php echo $value['tag_id']; ?>"> <?php echo $value['tag_name']; ?>
			<?php endforeach ?>
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