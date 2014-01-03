<?php foreach ($articles as $article) { ?>
<h2><a href="<?php echo base_url(); ?>blog/<?php echo $article['slug']; ?>"><?php echo $article['title']; ?></a></h2>
<?php 
$body = substr($article['body'],0,10);
echo $body;
?>
<br />
<a href="<?php echo base_url(); ?>blog/<?php echo $article['slug']; ?>">Read More...</a>
<?php } ?>
<?php echo $this->pagination->create_links(); ?>