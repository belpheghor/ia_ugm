<h3><b>Form Background</b></h3>
<hr> 
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
			<label>Background Image</label>
			<input type="file" name="background_img" class="form-control">		
		</div>
	<button class="btn btn-primary" name="name_background">Submit</button>
	<a href="<?php echo base_url("admin/background/"); ?>" class="btn btn-danger">Cancel</a>
	 
	 
</form>