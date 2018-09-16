<h3><b>Form Timeline</b></h3>
<hr class="title-underline"> 
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Program</label>
		<select class="form-control" name="program_id">
			<option>- Select Program -</option>
			<?php foreach ($program as $key => $value): ?>
				<option value="<?php echo $value['program_id'] ?>"
					<?php if ($value['program_id']==$timeline['program_id']) {
						echo "selected";
					} ?>><?php echo $value['program_name'] ?></option>
				<?php endforeach ?>

			</select>
		</div>
		<div class="form-group">
			<label>Timeline Name</label>

			<input type="text" name="timeline_name" class="form-control" required=""
			value="<?php echo $timeline['timeline_name'] ?>" >

		</div>
		<div class="form-group">
			<label>Timeline Description</label>
			<textarea class="form-control" required="" name="timeline_description"><?php echo $timeline['timeline_description'] ?></textarea>

		</div>
		<div class="form-group">
			<label>Timeline Start</label>
			<input type="date" name="timeline_start" class="form-control" required=""
			value="<?php echo $timeline['timeline_start'] ?>">
		</div>
		<div class="form-group">
			<label>Timeline End</label>
			<input type="date" name="timeline_end" class="form-control" required=""
			value="<?php echo $timeline['timeline_end'] ?>">
		</div>
		<div class="form-group">
			<label>Existing Image</label>
			<img width="100" src="<?php echo base_url("assets/timeline/$timeline[timeline_image]") ?>">

		</div>
		<div class="form-group">
			<label>New Image</label>

			<input type="file" name="timeline_image" class="form-control" required="">		

		</div>
		<div class="form-group">
			<label>Timeline Link</label> 

			<input type="text" name="registration_link" class="form-control"
			value="<?php echo $timeline['registration_link'] ?>">

		</div>

		<button class="btn btn-primary">Submit</button>
		<a href="<?php echo base_url("supervisor/timeline/"); ?>" class="btn btn-danger">Cancel</a>


	</form>