<h3><b>Form Background</b></h3>
<hr> 
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
				<label>Existing Image</label>
				<img width="100" src="<?php echo base_url("assets/background/$background[background_img]") ?>">
				<br>
				<br>
				<p><small style="color: red">*use 16:9 ratio image for better resolution</small></p>
			</div>
			<div class="form-group">
				<label>New image</label>
				<input type="file" name="background_img" class="form-control">
			</div>
	<button class="btn btn-primary" name="name_background">Submit</button>
	<a href="<?php echo base_url("admin/background/"); ?>" class="btn btn-danger">Cancel</a>
	  
	
</form>