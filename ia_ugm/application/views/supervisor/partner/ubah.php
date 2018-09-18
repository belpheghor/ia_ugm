<h3><b>Form Partner</b></h3>
<hr> 
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Partner Name</label>
		<div>
			<input type="text" name="partner_name" class="form-control" required=""
			value="<?php echo $partner['partner_name'] ?>">
		</div>
	</div>
		<div class="form-group">
				<label>Existing Image</label>
				<img src="<?php echo base_url("assets/partner/$partner[partner_image]") ?>">
			</div>
			<div class="form-group">
				<label>New Image</label>
				<input type="file" name="partner_image" class="form-control" required="">
				<p><small style="color: red">*use 3:4 ratio image for better resolution</small></p>	
			</div>
		
	<div class="form-group">
		<label>Partner Link</label> 
		<div>
			<input type="text" name="partner_link" class="form-control"
			value="<?php echo $partner['partner_link'] ?>">
		</div>
	</div>
	
	<button class="btn btn-primary">Submit</button>
	<a href="<?php echo base_url("supervisor/partner/"); ?>" class="btn btn-danger">Cancel</a>
	 
	
</form>