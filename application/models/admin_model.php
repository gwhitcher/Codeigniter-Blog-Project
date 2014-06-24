<?php
class Admin_model extends CI_Model
{	
	// SET NAV
	public function set_nav()
	{
	$data = array(
		'title' => $this->input->post('title'),
		'url' => $this->input->post('url'),
		'position' => $this->input->post('position')
	);
	return $this->db->insert('nav', $data);
	}
	
	//GET NAV BY ID
	public function get_nav($id = FALSE)
	{
	if ($id === FALSE)
	{
		$query = $this->db->get('nav');
		return $query->result_array();
	}

	$query = $this->db->get_where('nav', array('id' => $id));
	return $query->row_array();
	}
	
	//EDIT NAV
	public function update_nav($id=0)
	{
	$data = array(
		'title' => $this->input->post('title'),
		'url' => $this->input->post('url'),
		'position' => $this->input->post('position')
	);
	$this->db->where('id',$id);
	return $this->db->update('nav',$data);
	}
	
	//DELETE NAV
	public function delete_nav($id) {
    $this->db->delete('nav', array('id' => $id));
	}	
	
	// SET SIDEBAR
	public function set_sidebar()
	{
	$data = array(
		'title' => $this->input->post('title'),
		'body' => $this->input->post('body'),
		'position' => $this->input->post('position')
	);
	return $this->db->insert('sidebar', $data);
	}
	
	//GET SIDEBAR BY ID
	public function get_sidebar($id = FALSE)
	{
	if ($id === FALSE)
	{
		$query = $this->db->get('sidebar');
		return $query->result_array();
	}

	$query = $this->db->get_where('sidebar', array('id' => $id));
	return $query->row_array();
	}
	
	//EDIT SIDEBAR
	public function update_sidebar($id=0)
	{
	$data = array(
		'title' => $this->input->post('title'),
		'body' => $this->input->post('body'),
		'position' => $this->input->post('position')
	);
	$this->db->where('id',$id);
	return $this->db->update('sidebar',$data);
	}
	
	//DELETE SIDEBAR
	public function delete_sidebar($id) {
    $this->db->delete('sidebar', array('id' => $id));
	}
	
	// SET ARTICLES
	public function set_article()
	{
	$this->load->library("upload");
	$this->load->helper('url');
	$slug = url_title($this->input->post('title'),'dash',TRUE);
	$config['upload_path'] = './images/posts/';
	$config['allowed_types'] = 'gif|jpg|png';
	$this->upload->initialize($config); 
	$this->upload->do_upload('featured');
	$image_data = $this->upload->data();
	$featured = $image_data['file_name'];
	$date = date("Y-m-d\TH:i:sP");
	$data = array(
		'title' => $this->input->post('title'),
		'date' => $date,
		'metadescription' => $this->input->post('metadescription'),
		'metakeywords' => $this->input->post('metakeywords'),
		'category_id' => $this->input->post('category_id'),
		'slug' => $slug,
		'body' => $this->input->post('body'),
		'slider' => $this->input->post('slider'),
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
	$this->upload->initialize($config); 
	$this->upload->do_upload('featured');
	$image_data = $this->upload->data();
	$featured = $image_data['file_name'];
	$date = date("Y-m-d\TH:i:sP");
	if (!empty($featured)) {
	$data = array(
		'title' => $this->input->post('title'),
		'date' => $date,
		'metadescription' => $this->input->post('metadescription'),
		'metakeywords' => $this->input->post('metakeywords'),
		'category_id' => $this->input->post('category_id'),
		'slug' => $slug,
		'body' => $this->input->post('body'),
		'slider' => $this->input->post('slider'),
		'featured' => $featured
	);
	} else {
	$data = array(
		'title' => $this->input->post('title'),
		'date' => $date,
		'metadescription' => $this->input->post('metadescription'),
		'metakeywords' => $this->input->post('metakeywords'),
		'category_id' => $this->input->post('category_id'),
		'slug' => $slug,
		'slider' => $this->input->post('slider'),
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
	
	// SET PAGE
	public function set_page()
	{
	$slug = url_title($this->input->post('title'),'dash',TRUE);
	$data = array(
		'title' => $this->input->post('title'),
		'metadescription' => $this->input->post('metadescription'),
		'metakeywords' => $this->input->post('metakeywords'),
		'slug' => $slug,
		'body' => $this->input->post('body')
	);
	return $this->db->insert('pages', $data);
	}
	
	//GET PAGE BY ID
	public function get_page($id = FALSE)
	{
	if ($id === FALSE)
	{
		$query = $this->db->get('pages');
		return $query->result_array();
	}

	$query = $this->db->get_where('pages', array('id' => $id));
	return $query->row_array();
	}
	
	//EDIT PAGE
	public function update_page($id=0)
	{
	$slug = url_title($this->input->post('title'),'dash',TRUE);
	$data = array(
		'title' => $this->input->post('title'),
		'metadescription' => $this->input->post('metadescription'),
		'metakeywords' => $this->input->post('metakeywords'),
		'slug' => $slug,
		'body' => $this->input->post('body')
	);
	$this->db->where('id',$id);
	return $this->db->update('pages',$data);
	}
	
	//DELETE PAGE
	public function delete_page($id) {
    $this->db->delete('pages', array('id' => $id));
	}	
	
}