<h3><b>Major Form</b></h3>
<hr>
<form method="post">
	<div class="form-group">
		<label>Faculty</label>
		<select class="form-control" name="faculty_id">
			<option>- Select Faculty -</option>
			<?php foreach ($faculty as $key => $value): ?>
				<option value="<?php echo $value['faculty_id'] ?>"
					<?php if ($value['faculty_id']==$major['faculty_id']) {
					echo "selected";
				} ?>><?php echo $value['faculty_name'] ?></option>
				
			<?php endforeach ?>
			
		</select>
	</div>
	<div class="form-group">
		<label>Major Name</label>
		
		<input type="text" name="major_name" class="form-control" required="" value="<?php echo $major['major_name'] ?>" >
		
	</div>
	<button class="btn btn-primary">Submit</button>
	<a href="<?php echo base_url("admin/major/"); ?>" class="btn btn-danger">Cancel</a>
	
	
</form>