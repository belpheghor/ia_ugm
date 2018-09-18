<h3><b>Form News</b></h3>
<hr>

<!-- <?php 
foreach ($news as $key => $value) {
	$tag_id[] = $value['tag_id'];
}
foreach ($tag as $key => $value) {
	$semua_tag_id[] = $value['tag_id'];
}
 ?> -->
 <?php $image = $news ?>
<form method="post" enctype="multipart/form-data"> 
	<div class="form-group">
		<label>User</label>
		<div>
			<select class="form-control" name="user_id">
				<option>-Select User-</option>
				<?php foreach ($user as $key => $value): ?>
					<option value="<?php echo $value['user_id'] ?>" <?php if ($value['user_id']==$news['user_id']) {
						echo "selected";
					} ?>><?php echo $value['user_name'] ?></option>
				<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label>News Category</label>
		<select class="form-control" name="category_id">
			<option>-Select Category-</option>
			<?php foreach ($category as $key => $value): ?>
				<option value="<?php echo $value['category_id'] ?>" <?php if ($value['category_id']==$news['category_id']) {
					echo "selected";
				} ?>><?php echo $value['category_name'] ?></option>
			<?php endforeach ?>

		</select>
		
	</div>
	<div class="form-group">
		<label>Tag</label>
		<?php foreach ($tag as $key => $value): ?>
			<input type="checkbox" name="tag_id[]" value="<?php echo $value['tag_id']; ?>" <?php if (in_array($semua_tag_id[$key],$tag_id)) {
				echo "checked";
			} ?>><?php echo $value['tag_name']; ?>
		<?php endforeach ?>
	</div>
	<div class="form-group">
		<label>News Title</label>
		<div>
			<input type="text" name="news_title" class="form-control" required=""
			value="<?php echo $news['news_title'] ?>">
		</div>
	</div>
	<p><small style="color: red">*use 3:4 ratio image for better resolution</small></p>
	<div class="form-group">
		<label>New Image 1</label>
		<img width="100" src="<?php echo base_url("assets/news/$image[news_image1]") ?>">
		<br>
		<br>
		<input type="file" name="news_image1" class="form-control">
	</div>
	<div class="form-group">
		<label>New Image 2</label>
		<img width="100" src="<?php echo base_url("assets/news/$image[news_image2]") ?>">
		<br>
		<br>
		<input type="file" name="news_image2" class="form-control">
	</div>
	<div class="form-group">
		<label>News Image 3</label>
		<img width="100" src="<?php echo base_url("assets/news/$image[news_image3]") ?>">
		<br>
		<br>
		<input type="file" name="news_image3" class="form-control">
	</div>
	<div class="form-group">
		<label>News Image 4</label>
		<img width="100" src="<?php echo base_url("assets/news/$image[news_image4]") ?>">
		<br>
		<br>
		<input type="file" name="news_image4" class="form-control">
	</div>
	<div class="form-group">
		<label>News Image 5</label>
		<img width="100" src="<?php echo base_url("assets/news/$image[news_image5]") ?>">
		<br>
		<br>
		<input type="file" name="news_image5" class="form-control">
	</div>
	<div class="form-group">
		<label>News Status</label>
		<select class="form-control" name="news_status">
				<option>Select Role</option>
				<option value=1 <?php if($news['news_status']== 1){echo "selected";} ?>>Publish</option>
				<option value=0 <?php if($news['news_status']== 0){echo "selected";} ?>>Unpublish</option>
			</select>

	</div>
	<div class="form-group"> 
		<label>News Release</label>
		<input type="date" name="news_release" class="form-control" required=""
		value="<?php echo $news['news_release'] ?>">
	</div>
	<div class="form-group">
		<label>News Summary</label>
		<textarea name="news_summary" class="form-control" required=""
		><?php echo $news['news_summary'] ?></textarea>	
	</div>
	<div class="form-group">
		<label>News Content</label>
		<textarea name="news_content" class="form-control" id="theeditor" required="">
			<?php echo $news['news_content'] ?>
		</textarea>
		
	</div>
	
	
	<button class="btn btn-primary">Submit</button>
	<a href="<?php echo base_url("admin/news/"); ?>" class="btn btn-danger">Cancel</a>
	
	
</form>