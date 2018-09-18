<h3>Tag News Form</h3>
<br>
<form method="post">
	<div class="form-group">
		<label>Tag Name</label>
		<input type="text" name="tag_name" class="form-control" 
		value="<?php echo $tag['tag_name'] ?>">
	</div>
	<button class="btn btn-primary">Submit</button>
	<a href="<?php echo base_url("supervisor/tag") ?>" class="btn btn-danger">Cancel</a>
	
</form>