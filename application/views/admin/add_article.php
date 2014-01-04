<h2>Post article</h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('admin/add_article') ?>

	<label for="title">Title</label>
    <br />
	<input type="input" name="title" />
    <br />
    
    <label for="category_id">Category</label>
    <br />
	<select name="category_id">
      <?php foreach ($categories as $category) { ?>
		<option value="<?php echo $category['id']; ?>"><?php echo $category['title']; ?></option>  
	  <?php } ?>
	</select>
	<br />
    
	<label for="body">Body</label>
    <br />
	<textarea name="body" cols="105" rows="10"></textarea>
	<br />
    
    <label for="featured">Featured</label>
    <br />
	<input type="file" name="featured" />
	<br />
    
    

<input type="submit" name="submit" value="Post" />

</form>