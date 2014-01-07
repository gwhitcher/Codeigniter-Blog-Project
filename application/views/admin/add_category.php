<h2>Add category</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/add_category') ?>

	<label for="title">Title</label>
    <br />
	<input type="input" name="title" size="50" />
    <br />

<input type="submit" name="submit" value="Post" />

</form>