<h2>Categories</h2>
<form method="post">
<input name="search" id="search" type="text" placeholder="Search" />
</form>
<table width="100%" border="0" align="center">
<?php foreach ($categories as $category): ?>
<tr>
    <td width="80%"><?php echo $category['title'];?></td>
    <td width="10%"><a href="<?php echo base_url(); ?>admin/edit_category/<?php echo $category['id']; ?>">Edit</a></td>
    <td width="10%"><a onClick="return confirm('Delete?')" href="<?php echo base_url(); ?>admin/delete_category/<?php echo $category['id']; ?>">Delete</a></td>
</tr>
<?php endforeach; ?>
</table>
<?php echo $this->pagination->create_links(); ?>