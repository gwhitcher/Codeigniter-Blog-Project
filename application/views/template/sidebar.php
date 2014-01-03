<sidebar>
<div id="sidebar_item">
<h2>Categories</h2>
<?php
$query = $this->db->query("SELECT * FROM categories");

foreach ($query->result_array() as $row)
{
   echo '<li><a href="'.base_url().'category/'.$row['slug'].'">'.$row['title'].'</a></li>';
}
?>
</div>
</sidebar>