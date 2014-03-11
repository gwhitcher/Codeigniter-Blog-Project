<div id="left_wrapper">
<div id="page_body">
<h2>Search</h2>
<form method="post">
Search: <input name="search" type="text">
<input name="submit" type="submit" value="Search">
</form>
<?php
if (!empty($_POST['submit'])) {
$searchterm = mysql_real_escape_string($_POST['search']);
$searcharticle = $this->db->query('SELECT * FROM articles WHERE body LIKE \'%' . $searchterm . '%\' ORDER BY id DESC');
foreach ($searcharticle->result() as $row) { 
	echo '<li><a href="'.base_url().'blog/'.$row->slug.'">'.$row->title.'</a></li>';
}
}
?>
</div>
</div>