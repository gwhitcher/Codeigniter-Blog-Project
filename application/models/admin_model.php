<?php
class Admin_model extends CI_Model
{
	public function set_article()
	{
	$this->load->helper('url');

	$slug = url_title($this->input->post('title'), 'dash', TRUE);

	$data = array(
		'title' => $this->input->post('title'),
		'category_id' => $this->input->post('category_id'),
		'slug' => $slug,
		'body' => $this->input->post('body')
	);

	return $this->db->insert('articles', $data);
	}
	
	//GET ARTICLES BY ID
	public function get_articles($id = FALSE)
	{
	if ($id === FALSE)
	{
		$query = $this->db->get('articles');
		return $query->result_array();
	}

	$query = $this->db->get_where('articles', array('id' => $id));
	return $query->row_array();
	}
	
	//EDIT ARTICLE
	public function update_article($id=0)
	{
	$this->load->helper('url');
 
	$slug = url_title($this->input->post('title'),'dash',TRUE);
	$data = array(
		'title' => $this->input->post('title'),
		'category_id' => $this->input->post('category_id'),
		'slug' => $slug,
		'body' => $this->input->post('body')
	);
	$this->db->where('id',$id);
	return $this->db->update('articles',$data);
	}
	
	//DELETE ARTICLE
	public function delete_article($id) {
    $this->db->delete('articles', array('id' => $id));
	}
	
	//GET CATEGORIES BY ID
	public function get_categories($id = FALSE)
	{
	if ($id === FALSE)
	{
		$query = $this->db->get('categories');
		return $query->result_array();
	}

	$query = $this->db->get_where('categories', array('id' => $id));
	return $query->row_array();
	}
	
	//CREATE CATEGORY
	public function set_cat()
	{
	$this->load->helper('url');
	$slug = url_title($this->input->post('title'),'dash',TRUE);
	$data = array(
		'title' => $this->input->post('title'),
		'slug' => $slug,
	);
	
	return $this->db->insert('categories', $data);
	}
	
	//DELETE CATEGORY
	public function delete_category($id) {
    $this->db->delete('categories', array('id' => $id));
	}
	
	//UPDATE CATEGORY
	public function update_category($id=0)
	{
	$this->load->helper('url');
	$slug = url_title($this->input->post('title'),'dash',TRUE);
	$data = array(
		'title' => $this->input->post('title'),
		'slug' => $slug,
	);
	$this->db->where('id',$id);
	return $this->db->update('categories',$data);
	}
}