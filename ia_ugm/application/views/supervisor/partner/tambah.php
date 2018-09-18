<h3><b>Form Partner</b></h3>
<hr class="title-underline"> 
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Partner Name</label>
		<div>
			<input type="text" name="partner_name" class="form-control" required="">
		</div>
	</div>
		<div class="form-group">
			<label>Partner Image</label>
			<div>
			<input type="file" name="partner_image" class="form-control" required="">
			<p><small style="color: red">*use 3:4 ratio image for better resolution</small></p>			
		</div>
		</div>
	<div class="form-group">
		<label>Partner Link</label> 
		<div>
			<input type="text" name="partner_link" class="form-control">
		</div>
	</div>
	
	<button class="btn btn-primary">Submit</button>
	<a href="<?php echo base_url("supervisor/user/"); ?>" class="btn btn-danger">Cancel</a>
	 
	
</form>