	<h3><b>Form News</b></h3>
<hr>
<br>
<br>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>User</label>
		<select class="form-control" name="user_id">
			<option>- Select User -</option>
			<?php foreach ($user as $key => $value): ?>
				<option value="<?php echo $value['user_id'] ?>"><?php echo $value['user_name'] ?></option>
				
			<?php endforeach ?>
			
		</select>
	</div>
	<div class="form-group">
		<label>News Category</label>
		<select class="form-control" name="category_id">
			<option>- Select Category -</option>
			<?php foreach ($category as $key => $value): ?>
				<option value="<?php echo $value['category_id'] ?>">
					<?php echo $value['category_name'] ?>
				</option>
				
			<?php endforeach ?>
			
		</select>
		</div>
		<div class="form-group">
			<label>News Title</label>
			<input type="text" name="news_title" class="form-control">
		</div>
		<div class="form-group">
			<label>News Image 1</label>
			<input type="file" name="news_image1" class="form-control">
		</div>
		<div class="form-group">
			<label>News Image 2</label>
			<input type="file" name="news_image2" class="form-control">
		</div>
		<div class="form-group">
			<label>News Image 3</label>
			<input type="file" name="news_image3" class="form-control">
		</div>
		<div class="form-group">
			<label>News Image 4</label>
			<input type="file" name="news_image4" class="form-control">
		</div>
		<div class="form-group">
			<label>News Image 5</label>
			<input type="file" name="news_image5" class="form-control">
		</div>
		<div class="form-group">
			<label>News Status</label>
			<select class="form-control" name="news_status">
				<option>- Select Status -</option>
				<option value=1>publish</option>
				<option value=0>unpublish</option>
				
			</select>
		</div>
		<div class="form-group">
			<label>News Release</label>
			<input type="date" name="news_release" class="form-control">
			
		</div>
		<div class="form-group">
			<label>News Summary</label>
			<textarea class="form-control" name="news_summary"></textarea>
		</div>
		<div class="form-group">
			<label>News Content</label>
			<textarea class="form-control" name="news_content" id="theeditor"></textarea>
		</div>
		<button class="btn btn-info btn-sm">Submit</button>
		<a href="<?php echo base_url("supervisor/news") ?>" class="btn btn-danger btn-sm">Cancel</a>
</form>