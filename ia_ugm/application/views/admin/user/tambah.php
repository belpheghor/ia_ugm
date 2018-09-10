<h3><b>Form User</b></h3>
<hr> 
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Username</label>
		<div>
			<input type="text" name="user_name" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label>Password</label> 
		<div>
			<input type="password" name="user_password" class="form-control">
		</div>
	</div>
	<div class="form-group"> 
		<label>Email</label>
		<div>
			<input type="email" name="user_email" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label>Role</label>
		<div>
			<select class="form-control" name="user_level">
				<option>Select Role</option>
				<option value="supervisor">Supervisor</option>
				<option value="operator">Operator</option>
			</select>
		</div>
		</div>
		<div class="form-group">
			<label>User Image</label>
			<input type="file" name="user_image" class="form-control">		
		</div>
	<button class="btn btn-primary">Submit</button>
	<a href="<?php echo base_url("admin/user/"); ?>" class="btn btn-danger">Cancel</a>
	 
	
</form>