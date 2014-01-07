<?php
class Admin_model extends CI_Model
{	
	// SET ARTICLES
	public function set_article()
	{
	$this->load->library("upload");
	$this->load->helper('url');
	$slug = url_title($this->input->post('title'),'dash',TRUE);
	$config['upload_path'] = './images/posts/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_width'] = '620';
	$config['max_height'] = '150';
	$this->upload->initialize($config); 
	$this->upload->do_upload('featured');
	$image_data = $this->upload->data();
	$featured = $image_data['file_name'];
	$data = array(
		'title' => $this->input->post('title'),
		'category_id' => $this->input->post('category_id'),
		'slug' => $slug,
		'body' => $this->input->post('body'),
		'featured' => $featured
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
	$this->load->library("upload");
	$this->load->helper('url');
	$slug = url_title($this->input->post('title'),'dash',TRUE);
	$config['upload_path'] = './images/posts/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_width'] = '620';
	$config['max_height'] = '150';
	$this->upload->initialize($config); 
	$this->upload->do_upload('featured');
	$image_data = $this->upload->data();
	$featured = $image_data['file_name'];
	if (!empty($featured)) {
	$data = array(
		'title' => $this->input->post('title'),
		'metadescription' => $this->input->post('metadescription'),
		'metakeywords' => $this->input->post('metakeywords'),
		'category_id' => $this->input->post('category_id'),
		'slug' => $slug,
		'body' => $this->input->post('body'),
		'featured' => $featured
	);
	} else {
	$data = array(
		'title' => $this->input->post('title'),
		'metadescription' => $this->input->post('metadescription'),
		'metakeywords' => $this->input->post('metakeywords'),
		'category_id' => $this->input->post('category_id'),
		'slug' => $slug,
		'body' => $this->input->post('body')
	);
	}
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
		'metadescription' => $this->input->post('metadescription'),
		'metakeywords' => $this->input->post('metakeywords'),
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
		'metadescription' => $this->input->post('metadescription'),
		'metakeywords' => $this->input->post('metakeywords'),
		'slug' => $slug,
	);
	$this->db->where('id',$id);
	return $this->db->update('categories',$data);
	}
}