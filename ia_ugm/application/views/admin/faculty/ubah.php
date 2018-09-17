<h3><b>Faculty Form</b></h3>
<hr>
<form method="post">
	<div class="form-group">
		<label>Faculty Name</label>
		<div>
			<input type="text" name="faculty_name" class="form-control" value="<?php echo $faculty['faculty_name'] ?>">
		</div>
	</div>
	<button class="btn btn-primary">Submit</button>
	<a href="<?php echo base_url("admin/faculty/"); ?>" class="btn btn-danger">Cancel</a>
	
	
</form>