<h3>Staff Form</h3>
<hr>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>First Name</label>
		<input type="text" name="first_name" class="form-control" required="">
	</div>
	<div class="form-group">
		<label>Last Name</label>
		<input type="text" name="last_name" class="form-control" required="">
	</div>
	
	<div class="form-group">
		<label>Front Degree</label>
		<input type="text" name="front_degree" class="form-control">
	</div>
	<div class="form-group">
		<label>Back Degree</label>
		<input type="text" name="back_degree" class="form-control">
	</div>
	<div class="form-group">
	 	<label>Staff Image</label>
	 	<input type="file" name="person_image" class="form-control" required="">
	 </div>
	<div class="form-group">
		<label>Staff Position</label>
		<input type="text" name="person_position" class="form-control">
	</div>
	<div class="form-group">
		<label>Staff Email</label>
		<input type="text" name="person_email" class="form-control" required="">
	</div>
	 
	 <div class="form-group">
	 	<label>Staff Description</label>
	 	<textarea class="form-control" required="" name="person_description"></textarea>
	 </div>
	 <div class="form-group">
	 	<label>Staff Linkedin</label>
	 	<input type="text" name="person_linkedin" class="form-control">
	 </div>
	 <div class="form-group">
	 	<label>Staff Priority</label>
	 	<select class="form-control" name="person_priority">
				<option>- Priority Level -</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>

			</select>
	 </div>
	 <div class="form-group">
	 	<label>Person Level</label>
	 	<input type="text" name="person_level" value="staff" readonly="" class="form-control">
	 </div>
	 <button class="btn btn-info ">Submit</button>
	 <a href="<?php echo base_url("admin/staff") ?>" class="btn btn-danger ">Cancel</a>
</form>