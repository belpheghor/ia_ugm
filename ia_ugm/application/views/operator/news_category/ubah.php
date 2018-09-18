<h3><b>Form News Category</b></h3>
<hr>
<form method="post">
	<div class="form-group">
		<label>Category Name</label>
		<div>
			<input type="text" name="category_name" class="form-control" value="<?php echo $category['category_name'] ?>">
		</div>
	</div>
	<button class="btn btn-primary">Submit</button>
	<a href="<?php echo base_url("supervisor/category/"); ?>" class="btn btn-danger">Cancel</a>
	
	
</form>