<h3>Startup Founder Form</h3>
<hr>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Startup Name</label>
		<select class="form-control" name="startup_id">
			<option>- Select Startup -</option>
			<?php foreach ($startup as $key => $value): ?>
				<option value="<?php echo $value['startup_id'] ?>"><?php echo $value['startup_name'] ?></option>
				
			<?php endforeach ?>
			
		</select>
	</div>

	<div class="form-group">
		<label>First Name</label>
		<input type="text" name="first_name" class="form-control" required="">
	</div>
	<div class="form-group">
		<label>Last Name</label>
		<input type="text" name="last_name" class="form-control">
	</div>
	<div class="form-group">
		<label>Position</label>
		<input type="text" name="sf_position" class="form-control" required="">
	</div>
	
	<div class="form-group">
		<label>Faculty Name</label>
		<select class="form-control" name="faculty_id">
			<option>- Select Faculty -</option>
			<?php foreach ($faculty as $key => $value): ?>
				<option value="<?php echo $value['faculty_id'] ?>"><?php echo $value['faculty_name'] ?></option>

			<?php endforeach ?>

		</select>
	</div>
	<div class="form-group">
		<label>Major Name</label>
		<select class="form-control" name="major_id">
			<option>- Select Major -</option>
			<?php foreach ($major as $key => $value): ?>
				<option value="<?php echo $value['major_id'] ?>"><?php echo $value['major_name'] ?></option>
				
			<?php endforeach ?>
			
		</select>
	</div>
	
	<div class="form-group">
		<label>Startup Founder Image</label>
		<input type="file" name="sf_image" class="form-control" required="">
		<p><small style="color: red">*use 1:1 scale image for better resolution</small></p>

	</div>
	
	<button class="btn btn-info ">Submit</button>
	<a href="<?php echo base_url("admin/startup_founder") ?>" class="btn btn-danger ">Cancel</a>
</form>