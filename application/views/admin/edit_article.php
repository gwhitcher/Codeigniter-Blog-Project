<h2>Post article</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/edit_article/'.$articleid.'') ?>

	<label for="title">Title</label>
    <br />
	<input name="title" title="title" type="input" value="<?php echo $article['title']; ?>" />
    <br />
    
    <label for="category_id">Category</label>
    <br />
	<select name="category_id">
      <?php foreach ($categories as $category) { ?>
		<option value="<?php echo $category['id']; ?>" <?php if ($category['id'] == $category['id']) { echo 'selected=selected'; } ?>><?php echo $category['title']; ?></option>  
	  <?php } ?>
	</select>
	<br />
    
	<label for="body">Body</label>
    <br />
	<textarea name="body"><?php echo $article['body']; ?></textarea>
	<br />

<input type="submit" name="submit" value="Post" />

</form>