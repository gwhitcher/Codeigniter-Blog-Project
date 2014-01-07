<h2>Edit category</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/edit_category/'.$categoryid.'') ?>

	<label for="title">Title</label>
    <br />
	<input name="title" type="input" value="<?php echo $category['title']; ?>" size="50" />
    <br />
    
    <label for="metadescription">Meta Description (leave blank for default)</label>
    <br />
	<input type="input" name="metadescription" value="<?php echo $category['metadescription']; ?>" size="50"/>
    <br />
    
    <label for="metakeywords">Meta Keywords (leave blank for default, seperate each by comma)</label>
    <br />
	<input type="input" name="metakeywords" value="<?php echo $category['metakeywords']; ?>" size="50"/>
    <br />

<input type="submit" name="submit" value="Post" />

</form>