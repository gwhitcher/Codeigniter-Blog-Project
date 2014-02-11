<h2>Welcome <?php echo $username; ?>!</h2>
<strong><a href="<?php echo base_url(); ?>admin/add_nav">Add Nav</a></strong>
<table width="100%" border="0">
  <?php foreach ($nav as $nav_item) { ?>
  <tr>
    <td width="100%"><?php echo $nav_item['title']; ?></td>
    <td><a href="<?php echo base_url(); ?>admin/edit_nav/<?php echo $nav_item['id']; ?>">Edit</a></td>
    <td><a onClick="return confirm('Delete?')" href="<?php echo base_url(); ?>admin/delete_article/<?php echo $nav_item['id']; ?>">Delete</a></td>
  </tr>
<?php } ?>
</table>

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

<strong><a href="<?php echo base_url(); ?>admin/add_page">Add Page</a></strong>
<table width="100%" border="0">
  <?php foreach ($pages as $page) { ?>
  <tr>
    <td width="100%"><a href="<?php echo base_url(); ?><?php echo $page['slug']; ?>"><?php echo $page['title']; ?></a></td>
    <td><a href="<?php echo base_url(); ?>admin/edit_page/<?php echo $page['id']; ?>">Edit</a></td>
    <td><a onClick="return confirm('Delete?')" href="<?php echo base_url(); ?>admin/delete_page/<?php echo $page['id']; ?>">Delete</a></td>
  </tr>
<?php } ?>
</table>