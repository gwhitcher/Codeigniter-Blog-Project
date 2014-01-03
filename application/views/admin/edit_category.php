<h2>Edit category</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/edit_category/'.$categoryid.'') ?>

	<label for="title">Title</label>
    <br />
	<input name="title" type="input" value="<?php echo $category['title']; ?>" />
    <br />

<input type="submit" name="submit" value="Post" />

</form>