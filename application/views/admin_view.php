<h2>Welcome <?php echo $username; ?>!</h2>
<strong><a href="<?php echo base_url(); ?>admin/add_sidebar">Add Sidebar</a></strong>
<table width="100%" border="0">
  <?php foreach ($sidebar as $sidebar_item) { ?>
  <tr>
    <td width="100%"><?php echo $sidebar_item['title']; ?></td>
    <td><a href="<?php echo base_url(); ?>admin/edit_sidebar/<?php echo $sidebar_item['id']; ?>">Edit</a></td>
    <td><a onClick="return confirm('Delete?')" href="<?php echo base_url(); ?>admin/delete_article/<?php echo $sidebar_item['id']; ?>">Delete</a></td>
  </tr>
<?php } ?>
</table>

<strong><a href="<?php echo base_url(); ?>admin/add_article">Add Article</a></strong>
<table width="100%" border="0">
  <?php foreach ($articles as $article) { ?>
  <tr>
    <td width="100%"><a href="<?php echo base_url(); ?>blog/<?php echo $article['slug']; ?>"><?php echo $article['title']; ?></a></td>
    <td><a href="<?php echo base_url(); ?>admin/edit_article/<?php echo $article['id']; ?>">Edit</a></td>
    <td><a onClick="return confirm('Delete?')" href="<?php echo base_url(); ?>admin/delete_article/<?php echo $article['id']; ?>">Delete</a></td>
  </tr>
<?php } ?>
</table>

<strong><a href="<?php echo base_url(); ?>admin/add_category">Add Category</a></strong>
<table width="100%" border="0">
  <?php foreach ($categories as $category) { ?>
  <tr>
    <td width="100%"><a href="<?php echo base_url(); ?>category/<?php echo $category['slug']; ?>"><?php echo $category['title']; ?></a></td>
    <td><a href="<?php echo base_url(); ?>admin/edit_category/<?php echo $category['id']; ?>">Edit</a></td>
    <td><a onClick="return confirm('Delete?')" href="<?php echo base_url(); ?>admin/delete_category/<?php echo $category['id']; ?>">Delete</a></td>
  </tr>
<?php } ?>
</table>
<div align="center">
<a href="<?php echo base_url(); ?>logout">Logout</a>
</div>