<?php echo '<'.'?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';?>
<?php header("Content-type: text/xml"); ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?php echo base_url();?></loc>
    <lastmod><?php echo date("Y-m-d\TH:i:sP"); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.9</priority>
  </url>
<?php foreach ($categories as $category) { ?> 
  <url>
    <loc><?php echo base_url();?>category/<?php echo $category['slug']; ?></loc>
    <lastmod><?php echo date("Y-m-d\TH:i:sP"); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.8</priority>
  </url>
<?php } ?>
<?php foreach ($articles as $article) { ?> 
  <url>
    <loc><?php echo base_url();?>post/<?php echo $article['id']; ?>/<?php echo $article['slug']; ?></loc>
    <lastmod><?php echo $article['date']; ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.9</priority>
  </url>
<?php } ?>
<?php foreach ($pages as $page) { ?> 
  <url>
    <loc><?php echo base_url();?><?php echo $page['slug']; ?></loc>
    <lastmod><?php echo date("Y-m-d\TH:i:sP"); ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.9</priority>
  </url>
<?php } ?>
  <url>
    <loc><?php echo base_url();?>contact</loc>
    <lastmod><?php echo date("Y-m-d\TH:i:sP"); ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.9</priority>
  </url>
</urlset>