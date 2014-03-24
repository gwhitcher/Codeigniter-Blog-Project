<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $this->config->item('title'); ?> | <?php if ($this->router->method == 'index') { echo $this->config->item('sub_title'); } else { echo $title; } ?></title>
<meta name="description" content="<?php if (!empty($metadescription)) { echo $metadescription; } else { echo $this->config->item('metadescription'); } ?>">
<meta name="keywords" content="<?php if (!empty($metakeywords)) { echo $metakeywords; } else { echo $this->config->item('metakeywords'); } ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/default/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/default/mobile.css" type="text/css" media="Screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/default/mobile.css" type="text/css" media="handheld" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/default/print.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/global/ui-darkness/jquery-ui-1.10.3.custom.css" type="text/css" />
<script src="<?php echo base_url(); ?>js/global/jqueryui/jquery-1.9.1.js" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>js/global/jqueryui/jquery-ui-1.10.3.custom.js"></script>
<script src="<?php echo base_url(); ?>js/global/jqueryui/jquery-ui-all.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/default/prettyPhoto.css" type="text/css" media="screen" />
<script src="<?php echo base_url(); ?>js/default/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false, deeplinking: false, theme: 'dark_square',default_width: 800,default_height: 600,});
});
</script>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "d4dd2f87-22da-44a2-ad1c-548ebfbb3850", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<?php if ($this->router->class == 'admin') { ?>
<script src="<?php echo base_url(); ?>js/default/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url(); ?>js/default/tinymce/tinymce-global.js"></script>
<?php } ?>
<?php if($this->router->method == 'blog_view') { ?>
<link rel="image_src" href="<?php echo base_url(); ?>images/posts/<?php echo $article['featured']; ?>"/>
<meta property="og:title" content="<?php echo $article['title']; ?>" />
<meta property="og:url" content="<?php echo base_url(); ?>blog/<?php echo $article['slug']; ?>" />
<meta property="og:image" content="<?php echo base_url(); ?>images/posts/<?php echo $article['featured']; ?>" />
<?php } ?>
</head>
<body>
<header>
<h1><a href="<?php echo base_url(); ?>"><?php echo $this->config->item('title'); ?></a></h1>
<h2><?php echo $this->config->item('sub_title'); ?></h2>
</header>
<div id="container">
<div id="nav_left">&nbsp;</div>
<div id="menu_wrapper">
<nav>
<ul>
<?php foreach ($nav as $nav_item) { ?>
<li><a href="<?php echo eval('?>' .$nav_item['url']. '<?php ');; ?>"><?php echo $nav_item['title']; ?></a></li>
<?php } ?>
</ul>
</nav>
<div id="nav_right">&nbsp;</div>
<section>
<?php if ($this->router->method == 'index' && $this->router->class == 'blog') { ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/default/flexslider.css" type="text/css" />
<script src="<?php echo base_url(); ?>js/default/jquery.flexslider-min.js" charset="utf-8"></script>
<script type="text/javascript">
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
</script>
<div class="flexslider">
<h3>Featured Articles</h3>
  <ul class="slides">
  <?php foreach ($slider as $slider_item) { ?>
  <li><a href="<?php echo base_url(); ?>post/<?php echo $slider_item['id']; ?>/<?php echo $slider_item['slug']; ?>"><img src="<?php echo base_url(); ?>images/posts/<?php echo $slider_item['featured']; ?>" title="<?php echo $slider_item['title']; ?>" alt="<?php echo $slider_item['title']; ?>" /></a></li>
  <?php } ?>
  </ul>
</div>
<?php } ?>