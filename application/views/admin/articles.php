<h2>Articles</h2>
<form method="post">
<input name="search" id="search" type="text" placeholder="Search" />
</form>
<table width="100%" border="0" align="center">
<?php foreach ($articles as $article): ?>
<tr>
    <td width="80%"><?php echo $article['title'];?></td>
    <td width="10%"><a href="<?php echo base_url(); ?>admin/edit_article/<?php echo $article['id']; ?>">Edit</a></td>
    <td width="10%"><a onClick="return confirm('Delete?')" href="<?php echo base_url(); ?>admin/delete_article/<?php echo $article['id']; ?>">Delete</a></td>
</tr>
<?php endforeach; ?>
</table>
<?php echo $this->pagination->create_links(); ?>