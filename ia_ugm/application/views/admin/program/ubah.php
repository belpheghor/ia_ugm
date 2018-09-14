<h3><b>Form Program</b></h3>
<hr class="title-underline"> 
<form method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label>Program Name</label>
		
			<input type="text" name="program_name" class="form-control"
			value="<?php echo $program['program_name'] ?>">
		
	</div>
	<div class="form-group">
		<label>Existing Image</label>
		<img width="100" src="<?php echo base_url("assets/program/$program[program_image]") ?>">
		
	</div>
	<div class="form-group">
		<label>New Image</label>
		
		<input type="file" name="program_image" class="form-control">		
		
	</div>
	<div class="form-group">
		<label>Program Description</label>
		<textarea class="form-control" name="program_description"><?php echo $program['program_description'] ?></textarea>
		
	</div>
	
	<div class="form-group">
		<label>Timeline Link</label> 
		
			<input type="text" name="timeline_link" class="form-control"
			value="<?php echo $program['timeline_link'] ?>">
		
	</div>
	<div class="form-group">
		<label>Program Priority</label>
		
			<select class="form-control" name="program_level">
				<option>- Priority Level -</option>
				<option value="1" <?php if ($program['program_level']=='1') {
					echo "selected";
				} ?>>1</option>
				<option value="2" <?php if ($program['program_level']=='2') {
					echo "selected";
				} ?>>2</option>
				<option value="3" <?php if ($program['program_level']=='3') {
					echo "selected";
				} ?>>3</option>
				<option value="4" <?php if ($program['program_level']=='4') {
					echo "selected";
				} ?>>4</option>

			</select>

			<!-- <select class="form-control" name="user_level">
				<option>Select Role</option>
				<option value="supervisor" <?php if($user['user_level']=='supervisor'){echo "selected";} ?>>Supervisor</option>
				<option value="operator" <?php if($user['user_level']=='operator'){echo "selected";} ?>>Operator</option>
			</select> -->
		
		</div>
	
	<button class="btn btn-primary">Submit</button>
	<a href="<?php echo base_url("admin/program/"); ?>" class="btn btn-danger">Cancel</a>

	
</form>