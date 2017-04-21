<div id="left_wrapper">
<article>
<?php if (!empty($article['featured'])) { ?>
<img class="featuredimg" src="<?php echo base_url(); ?>images/posts/<?php echo $article['featured']; ?>" title="<?php echo $article['title']; ?>" alt="<?php echo $article['title']; ?>" />
<?php } ?>
<h2><?php echo $article['title']; ?></h2>
<?php echo $article['body']; ?>
<div id="share">
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<span class='st_email_large' displayText='Email'></span>
<span class='st_sharethis_large' displayText='ShareThis'></span>
</div>
</article>
</div>