<div id="left_wrapper">
<div class="header"><h3>From the blog</h3></div>
<?php foreach ($articles as $article) { ?>
<article>
<?php if (!empty($article['featured'])) { ?>
<a href="<?php echo base_url(); ?>post/<?php echo $article['id']; ?>/<?php echo $article['slug']; ?>"><img src="<?php echo base_url(); ?>images/posts/<?php echo $article['featured']; ?>" class="featuredimg" title="<?php echo $article['title']; ?>" alt="<?php echo $article['title']; ?>" /></a>
<?php } ?>
<h2><a href="<?php echo base_url(); ?>post/<?php echo $article['id']; ?>/<?php echo $article['slug']; ?>"><?php echo $article['title']; ?></a></h2>
<?php 
$body = substr($article['body'],0,300);
echo strip_tags($body, '<br>');
?>...
<div class="readmore">
<a href="<?php echo base_url(); ?>post/<?php echo $article['id']; ?>/<?php echo $article['slug']; ?>">Read More</a>
</div>
</article>
<?php } ?>
<?php echo $this->pagination->create_links(); ?>
</div>