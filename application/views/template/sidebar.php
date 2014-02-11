<div id="sidebar">
<?php foreach ($sidebar as $sidebar_item) { ?>
<div class="sidebar_item">
<h2><?php echo $sidebar_item['title']; ?></h2>
<?php echo eval('?>' .$sidebar_item['body']. '<?php '); ?>
</div>
<?php } ?>
</div>