<?php
class Article_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_articles($slug)
	{
	if ($slug === FALSE)
	{
		$query = $this->db->get('articles');
		return $query->result_array();
	}
	$query = $this->db->get_where('articles', array('slug' => $slug));
	return $query->row_array();
	}	
	
	public function get_categories($slug)
	{
	if ($slug === FALSE)
	{
		$query = $this->db->get('categories');
		return $query->result_array();
	}
	$query = $this->db->get_where('categories', array('slug' => $slug));
	return $query->row_array();
	}
	
	public function get_pages($slug)
	{
	if ($slug === FALSE)
	{
		$query = $this->db->get('pages');
		return $query->result_array();
	}
	$query = $this->db->get_where('pages', array('slug' => $slug));
	return $query->row_array();
	}
	
}