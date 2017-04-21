<div id="right_wrapper">
<div id="sidebar">
<?php foreach ($sidebar as $sidebar_item) { ?>
<div class="sidebar_item">
<div class="header"><h2><?php echo $sidebar_item['title']; ?></h2></div>
<?php echo eval('?>' .$sidebar_item['body']. '<?php '); ?>
</div>
<?php } ?>
    <script type="text/javascript">
        google_ad_client = "ca-pub-1862231357641748";
        google_ad_slot = "4889078117";
        google_ad_width = 336;
        google_ad_height = 280;
    </script>
    <!-- Sidebar -->
    <script type="text/javascript"
            src="//pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>
</div>
<div class="footer">&nbsp;</div>
</div>