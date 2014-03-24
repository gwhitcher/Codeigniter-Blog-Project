<h2>Welcome <?php echo $username; ?>, to the <?php echo $this->config->item('title'); ?> Administration!</h2>
<p>Welcome to the dashboard!</p>

<div class="last5">
<h3>Last 5 Articles</h3>
<ul>
<?php foreach ($articles as $article) { ?>
    <li><a href="<?php echo base_url(); ?>admin/edit_article/<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a></li>
<?php } ?>
</ul>
<a href="<?php echo base_url(); ?>admin/articles">More</a>
</div>

<div class="last5">
<h3>Last 5 Categories</h3>
<ul>
<?php foreach ($categories as $category) { ?>
    <li><a href="<?php echo base_url(); ?>admin/edit_category/<?php echo $category['id']; ?>"><?php echo $category['title']; ?></a></li>
<?php } ?>
</ul>
<a href="<?php echo base_url(); ?>admin/categories">More</a>
</div>

<div class="last5">
<h3>Last 5 Pages</h3>
<ul>
<?php foreach ($pages as $page) { ?>
    <li><a href="<?php echo base_url(); ?>admin/edit_page/<?php echo $page['id']; ?>"><?php echo $page['title']; ?></a></li>
<?php } ?>
</ul>
<a href="<?php echo base_url(); ?>admin/pages">More</a>
</div>

<div class="last5">
<h3>Last 5 Nav Items</h3>
<ul>
<?php foreach ($nav as $nav_item) { ?>
    <li><a href="<?php echo base_url(); ?>admin/edit_nav/<?php echo $nav_item['id']; ?>"><?php echo $nav_item['title']; ?></a></li>
<?php } ?>
</ul>
<a href="<?php echo base_url(); ?>admin/nav">More</a>
</div>

<div class="last5">
<h3>Last 5 Sidebar Items</h3>
<ul>
<?php foreach ($sidebar as $sidebar_item) { ?>
    <li><a href="<?php echo base_url(); ?>admin/edit_sidebar/<?php echo $sidebar_item['id']; ?>"><?php echo $sidebar_item['title']; ?></a></li>
<?php } ?>
</ul>
<a href="<?php echo base_url(); ?>admin/sidebar">More</a>
</div>