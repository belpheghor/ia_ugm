<h3><b>Form User</b></h3>
<hr>
<form method="post" enctype="multipart/form-data"> 
	<div class="form-group">
		<label>Username</label>
		<div>
			<input type="text" name="user_name" class="form-control" required=""
			value="<?php echo $user['user_name'] ?>">
		</div>
	</div>
	<div class="form-group">
		<label>Password</label> 
		<div>
			<input type="password" name="user_password" class="form-control" required=""
			value="<?php echo $user['user_password'] ?>">
		</div>
	</div>
	<div class="form-group"> 
		<label>Email</label>
		<div>
			<input type="email" name="user_email" class="form-control" required=""
			value="<?php echo $user['user_email'] ?>">
		</div>
	</div>
	<div class="form-group">
		<label>Role</label>
		<div>
			<select class="form-control" name="user_level">
				<option>Select Role</option>
				<option value="supervisor" <?php if($user['user_level']=='supervisor'){echo "selected";} ?>>Supervisor</option>
				<option value="operator" <?php if($user['user_level']=='operator'){echo "selected";} ?>>Operator</option>
			</select>
		</div>
		</div>
		
		<div class="form-group">
				<label>Existing Image</label>
				<img width="100" src="<?php echo base_url("assets/img/$user[user_image]") ?>">
			</div>
			<div class="form-group">
				<label>New Image</label>
				<input type="file" name="user_image" class="form-control">
				<p><small style="color: red">*use 1:1 scale image for better resolution</small></p>
			</div>
	<button class="btn btn-primary">Submit</button>
	<a href="<?php echo base_url("admin/user/"); ?>" class="btn btn-danger">Cancel</a>
	
	 
</form>