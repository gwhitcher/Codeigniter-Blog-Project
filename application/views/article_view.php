<?php if (!empty($article['featured'])) { ?>
<img src="<?php echo base_url(); ?>images/posts/<?php echo $article['featured']; ?>" />
<?php } ?>
<h2><?php echo $article['title']; ?></h2>
<?php echo $article['body']; ?>