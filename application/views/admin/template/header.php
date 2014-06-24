<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $this->config->item('title'); ?> | <?php if ($this->router->method == 'index') { echo $this->config->item('sub_title'); } else { echo $title; } ?></title>
<meta name="description" content="<?php if (!empty($metadescription)) { echo $metadescription; } else { echo $this->config->item('metadescription'); } ?>">
<meta name="keywords" content="<?php if (!empty($metakeywords)) { echo $metakeywords; } else { echo $this->config->item('metakeywords'); } ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/mobile.css" type="text/css" media="Screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/mobile.css" type="text/css" media="handheld" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/print.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/global/ui-darkness/jquery-ui-1.10.3.custom.css" type="text/css" />
<script src="<?php echo base_url(); ?>js/global/jqueryui/jquery-1.9.1.js" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>js/global/jqueryui/jquery-ui-1.10.3.custom.js"></script>
<script src="<?php echo base_url(); ?>js/global/jqueryui/jquery-ui-all.js"></script>
<script src="<?php echo base_url(); ?>js/admin/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url(); ?>js/admin/tinymce/tinymce-global.js"></script>
</head>
<body>
<div id="container">
<header>
<h1><a href="<?php echo base_url(); ?>admin"><?php echo $this->config->item('title'); ?></a></h1>
<h2><?php echo $this->config->item('sub_title'); ?></h2>
</header>
<div id="body_container">
<nav>
<ul>
<li><a href="<?php echo base_url(); ?>admin/articles">Articles</a>
	<ul>
	<li><a href="<?php echo base_url(); ?>admin/add_article">Add Article</a></li>
    </ul>
</li>
<li><a href="<?php echo base_url(); ?>admin/categories">Categories</a>
	<ul>
	<li><a href="<?php echo base_url(); ?>admin/add_category">Add Category</a></li>
    </ul>
</li>
<li><a href="<?php echo base_url(); ?>admin/pages">Pages</a>
	<ul>
	<li><a href="<?php echo base_url(); ?>admin/add_page">Add Page</a></li>
    </ul>
</li>
<li><a href="<?php echo base_url(); ?>admin/nav">Navigation</a>
	<ul>
	<li><a href="<?php echo base_url(); ?>admin/add_nav">Add Nav</a></li>
    </ul>
</li>
<li><a href="<?php echo base_url(); ?>admin/sidebar">Sidebar</a>
	<ul>
	<li><a href="<?php echo base_url(); ?>admin/add_sidebar">Add Sidebar</a></li>
    </ul>
</li>
<li><a href="<?php echo base_url(); ?>logout">Logout</a></li>
</ul>
</nav>
<section>