<h2>Post article</h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('admin/edit_article/'.$articleid.'') ?>

	<label for="title">Title</label>
    <br />
	<input name="title" title="title" type="input" value="<?php echo $article['title']; ?>" />
    <br />
    
    <label for="category_id">Category</label>
    <br />
	<select name="category_id">
      <?php foreach ($categories as $category) { ?>
		<option value="<?php echo $category['id']; ?>" <?php if ($article['category_id'] == $category['id']) { echo 'selected=selected'; } ?>><?php echo $category['title']; ?></option>  
	  <?php } ?>
	</select>
	<br />
    
	<label for="body">Body</label>
    <br />
	<textarea name="body" cols="105" rows="10"><?php echo $article['body']; ?></textarea>
	<br />
    
    <label for="featured">Featured</label>
    <br />
	<input name="featured" title="featured" type="file" value="<?php echo $article['featured']; ?>" />
    <br />

<input type="submit" name="submit" value="Post" />

</form>