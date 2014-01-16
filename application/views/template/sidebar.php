<sidebar>
<?php foreach ($sidebar as $sidebar_item) { ?>
<div id="sidebar_item">
<h2><?php echo $sidebar_item['title']; ?></h2>
<?php echo eval('?>' .$sidebar_item['body']. '<?php '); ?>
</div>
<?php } ?>
</sidebar>