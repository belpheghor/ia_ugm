<h3><b>Form Program</b></h3>
<hr class="title-underline"> 
<form method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label>Program Name</label>
		
			<input type="text" name="program_name" class="form-control">
		
	</div>
	<div class="form-group">
		<label>Program Image</label>
		
			<input type="file" name="program_image" class="form-control">		
		
	</div>
	<div class="form-group">
		<label>Program Description</label>
		<textarea class="form-control" name="program_description"></textarea>
		
	</div>
	
	<div class="form-group">
		<label>Timeline Link</label> 
		
			<input type="text" name="timeline_link" class="form-control">
		
	</div>
	<div class="form-group">
		<label>Program Priority</label>
		
			<select class="form-control" name="program_level">
				<option>- Priority Level -</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>

			</select>
		
		</div>
	
	<button class="btn btn-primary">Submit</button>
	<a href="<?php echo base_url("admin/program/"); ?>" class="btn btn-danger">Cancel</a>

	
</form>