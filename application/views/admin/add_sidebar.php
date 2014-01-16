<h2>Post article</h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('admin/add_sidebar') ?>

	<label for="title">Title</label>
    <br />
	<input type="input" name="title" size="50"/>
    <br />
        
	<label for="body">Body</label>
    <br />
	<textarea name="body" cols="105" rows="10"></textarea>
	<br />

<input type="submit" name="submit" value="Post" />

</form>