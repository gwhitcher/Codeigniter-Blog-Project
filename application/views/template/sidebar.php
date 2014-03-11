<div id="right_wrapper">
<div id="sidebar">
<?php foreach ($sidebar as $sidebar_item) { ?>
<div class="sidebar_item">
<div class="header"><h2><?php echo $sidebar_item['title']; ?></h2></div>
<?php echo eval('?>' .$sidebar_item['body']. '<?php '); ?>
</div>
<?php } ?>
</div>
<div class="footer">&nbsp;</div>
</div>