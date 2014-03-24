<h2>Navigation</h2>
<form method="post">
<input name="search" id="search" type="text" placeholder="Search" />
</form>
<table width="100%" border="0" align="center">
<?php foreach ($nav as $nav_item): ?>
<tr>
    <td width="80%"><?php echo $nav_item['title'];?></td>
    <td width="10%"><a href="<?php echo base_url(); ?>admin/edit_nav/<?php echo $nav_item['id']; ?>">Edit</a></td>
    <td width="10%"><a onClick="return confirm('Delete?')" href="<?php echo base_url(); ?>admin/delete_nav/<?php echo $nav_item['id']; ?>">Delete</a></td>
</tr>
<?php endforeach; ?>
</table>
<?php echo $this->pagination->create_links(); ?>