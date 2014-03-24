<h2>Post article</h2>
<a href="<?php echo base_url(); ?>blog/<?php echo $article['slug']; ?>">View page</a>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('admin/edit_article/'.$articleid.'') ?>

	<label for="title">Title</label>
    <br />
	<input name="title" title="title" type="input" value="<?php echo $article['title']; ?>" size="50" />
    <br />
    
    <label for="metadescription">Meta Description (leave blank for default)</label>
    <br />
	<input type="input" name="metadescription" value="<?php echo $article['metadescription']; ?>" size="50"/>
    <br />
    
    <label for="metakeywords">Meta Keywords (leave blank for default, seperate each by comma)</label>
    <br />
	<input type="input" name="metakeywords" value="<?php echo $article['metakeywords']; ?>" size="50"/>
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
    <?php if (!empty($article['featured'])) { ?>
    <img src="<?php echo base_url(); ?>images/posts/<?php echo $article['featured']; ?>" /><br />
    <?php } ?>
    <label for="featured">Featured</label>
    <br />
	<input name="featured" title="featured" type="file" value="<?php echo $article['featured']; ?>" />
    <br />
    
    <label for="slider">Add to slider?</label>
    <br />
	<select name="slider">
		<option value="0" <?php if ($article['slider'] == 0) { echo 'selected=selected'; } ?>>No</option>  
        <option value="1" <?php if ($article['slider'] == 1) { echo 'selected=selected'; } ?>>Yes</option>
	</select>
	<br />

<input type="submit" name="submit" value="Post" />

</form>