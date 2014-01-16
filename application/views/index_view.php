<?php foreach ($articles as $article) { ?>
<?php if (!empty($article['featured'])) { ?>
<a href="<?php echo base_url(); ?>blog/<?php echo $article['slug']; ?>"><img src="<?php echo base_url(); ?>images/posts/<?php echo $article['featured']; ?>" id="featuredimg" title="<?php echo $article['title']; ?>" /></a>
<?php } ?>
<h2><a href="<?php echo base_url(); ?>blog/<?php echo $article['slug']; ?>"><?php echo $article['title']; ?></a></h2>
<?php 
$body = substr($article['body'],0,300);
echo strip_tags($body, '<br>');
?>...
<a href="<?php echo base_url(); ?>blog/<?php echo $article['slug']; ?>">Read More</a>
<hr width="600" size="1" noshade="noshade" />
<?php } ?>
<?php echo $this->pagination->create_links(); ?>