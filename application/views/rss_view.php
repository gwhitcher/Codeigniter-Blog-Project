<?php echo '<'.'?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';?>
<?php header("Content-type: text/xml"); ?>
<rss version="2.0">
<channel>
<title><?php echo $this->config->item('title'); ?></title>
<link><?php echo base_url(); ?></link>
<description><?php echo $this->config->item('sub_title'); ?></description>
<?php foreach ($articles as $article) { ?> 
<item>
<title><?php $titlereplace = preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $article['title']); echo $titlereplace; ?></title>
<link><?php echo base_url(); ?>post/<?php echo $article['id']; ?>/<?php echo $article['slug']; ?></link>
<guid><?php echo base_url(); ?>post/<?php echo $article['id']; ?>/<?php echo $article['slug']; ?></guid>
<description><![CDATA[<?php 
$body = substr($article['body'],0,200); 
$bodyreplace = preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $body);
echo strip_tags($bodyreplace); ?>...]]></description>
</item>
<?php } ?>
</channel>
</rss>