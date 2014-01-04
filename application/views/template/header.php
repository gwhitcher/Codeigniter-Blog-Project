<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $this->config->item('title'); ?> | <?php echo $this->config->item('sub_title'); ?></title>
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo base_url(); ?>js/wysiwyg/nicEdit.js"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
<link href="<?php echo base_url(); ?>css/ui-darkness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>js/jquery/jquery-1.9.1.js"></script>
<script src="<?php echo base_url(); ?>js/jquery/jquery-ui-1.10.3.custom.js"></script>
<script src="<?php echo base_url(); ?>js/jquery/jquery-ui-all.js"></script>
</head>
<body>
<div id="container">
<header>
<h1><a href="<?php echo base_url(); ?>"><?php echo $this->config->item('title'); ?></a></h1>
<h2><?php echo $this->config->item('sub_title'); ?></h2>
</header>
<nav>
<a href="<?php echo base_url(); ?>">Home</a>
<a href="<?php echo base_url(); ?>about">About</a>
<a href="<?php echo base_url(); ?>category/projects">Projects</a>
<a href="<?php echo base_url(); ?>category/portfolio">Portfolio</a>
<a href="<?php echo base_url(); ?>contact">Contact</a>
</nav>
<section>