<h2>Post article</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/add_article') ?>

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
	<textarea name="body"></textarea>
	<br />

<input type="submit" name="submit" value="Post" />

</form>