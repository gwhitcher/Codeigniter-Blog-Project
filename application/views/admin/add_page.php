<h2>Add Page</h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('admin/add_page') ?>
	<label for="title">Title</label>
    <br />
	<input type="input" name="title" size="50"/>
    <br />
    <label for="metadescription">Meta Description (leave blank for default)</label>
    <br />
	<input type="input" name="metadescription" size="50"/>
    <br />
    <label for="metakeywords">Meta Keywords (leave blank for default, seperate each by comma)</label>
    <br />
	<input type="input" name="metakeywords" size="50"/>
    <br />  
	<label for="body">Body</label>
    <br />
	<textarea name="body" cols="105" rows="10"></textarea>
	<br />
<input type="submit" name="submit" value="Post" />

</form>