<h2>Edit Page</h2>
<a href="<?php echo base_url(); ?><?php echo $page['slug']; ?>">View page</a>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('admin/edit_page/'.$pageid.'') ?>
	<label for="title">Title</label>
    <br />
	<input name="title" title="title" type="input" value="<?php echo $page['title']; ?>" size="50" />
    <br />    
    <label for="metadescription">Meta Description (leave blank for default)</label>
    <br />
	<input type="input" name="metadescription" value="<?php echo $page['metadescription']; ?>" size="50"/>
    <br />   
    <label for="metakeywords">Meta Keywords (leave blank for default, seperate each by comma)</label>
    <br />
	<input type="input" name="metakeywords" value="<?php echo $page['metakeywords']; ?>" size="50"/>
    <br />
	<label for="body">Body</label>
    <br />
	<textarea name="body" cols="105" rows="10"><?php echo $page['body']; ?></textarea>
    <br />
<input type="submit" name="submit" value="Post" />
</form>