<?php echo '<'.'?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';?>
<?php header("Content-type: text/xml"); ?>
<urlset xmlns="http://www.google.com/schemas/sitemap/0.90">
  <url>
    <loc><?php echo base_url();?></loc>
    <lastmod><?php echo date("Y-m-d\TH:i:sP"); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>10</priority>
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
    <loc><?php echo base_url();?>blog/<?php echo $article['slug']; ?></loc>
    <lastmod><?php echo $article['date']; ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.9</priority>
  </url>
<?php } ?>
  <url>
    <loc><?php echo base_url();?>about</loc>
    <lastmod><?php echo date("Y-m-d\TH:i:sP"); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc><?php echo base_url();?>contact</loc>
    <lastmod><?php echo date("Y-m-d\TH:i:sP"); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.5</priority>
  </url>
</urlset>