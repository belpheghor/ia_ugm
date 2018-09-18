<h3>Mentor Form</h3>
<hr>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>First Name</label>
		<input type="text" name="first_name" class="form-control" required="">
	</div>
	<div class="form-group">
		<label>Last Name</label>
		<input type="text" name="last_name" class="form-control" >
	</div>
	<div class="form-group">
		<label>Mentor Email</label>
		<input type="email" name="person_email" class="form-control" >
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
		<label>Last Education</label>
		<input type="text" name="last_education" class="form-control" >
	</div>
	<div class="form-group">
		<label>Mentor Company</label>
		<input type="text" name="person_company" class="form-control" required="">
	</div>
	<div class="form-group">
		<label>Mentor Website</label>
		<input type="text" name="person_website" class="form-control">
	</div>
	
	<div class="form-group">
		<label>Mentor Image</label>
		<input type="file" name="person_image" class="form-control" required="">
		<p><small style="color: red">*use 1:1 scale image for better resolution</small></p>

	</div>
	<div class="form-group">
		<label>Mentor Description</label>
		<textarea class="form-control" required="" name="person_description"></textarea>
	</div>
	<div class="form-group">
		<label>Mentor Linkedin</label>
		<input type="text" name="person_linkedin" class="form-control">
	</div>
	<div class="form-group">
		<label>Mentor Priority</label>
		<select class="form-control" name="person_priority">
			<option>- Priority Level -</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>

		</select>
	</div>
	<div class="form-group">
		<label>Position</label>
		<input type="text" name="person_level" value="mentor" readonly="" class="form-control">
	</div>
	<button class="btn btn-info ">Submit</button>
	<a href="<?php echo base_url("admin/mentor") ?>" class="btn btn-danger ">Cancel</a>
</form>