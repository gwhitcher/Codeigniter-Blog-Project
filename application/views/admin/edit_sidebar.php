<h2>Add sidebar item</h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('admin/edit_sidebar/'.$sidebarid.'') ?>
	<label for="title">Title</label>
    <br />
	<input name="title" title="title" type="input" value="<?php echo $sidebar['title']; ?>" size="50" />
    <br /> 
	<label for="body">Body</label>
    <br />
	<textarea class="mceNoEditor" name="body" cols="105" rows="10"><?php echo $sidebar['body']; ?></textarea>
    <br />
<input type="submit" name="submit" value="Add" />
</form>