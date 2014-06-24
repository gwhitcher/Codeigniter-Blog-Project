<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //LOAD SESSION
class Admin extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	}

	//ADMIN HOME
	function index()
	{
	if($this->session->userdata('logged_in'))
	{
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
	 //LOAD NAV
	 $query = $this->db->order_by("position","asc");
	 $query = $this->db->get('nav', 5);
	 $data["nav"] = $query->result_array();
	 //LOAD SIDEBAR
	 $query = $this->db->order_by("position","asc");
	 $query = $this->db->get('sidebar', 5);
	 $data["sidebar"] = $query->result_array();
	 //LOAD ARTICLES
	 $query = $this->db->order_by("id","desc");
	 $query = $this->db->get('articles', 5);
	 $data["articles"] = $query->result_array();
	 //LOAD CATEGORIES
	 $query = $this->db->order_by("id","desc");
	 $query = $this->db->get('categories', 5);
	 $data["categories"] = $query->result_array();
	 //LOAD PAGES
	 $query = $this->db->order_by("id","desc");
	 $query = $this->db->get('pages', 5);
	 $data["pages"] = $query->result_array();
	 $this->load->view('admin/template/header', $data);
     $this->load->view('admin/admin_view', $data);
	 $this->load->view('admin/template/footer', $data);
	}
	else
	{
     redirect('login', 'refresh');
	}
	}
	
	/* NAV */
	public function nav()
	{
	if($this->session->userdata('logged_in'))
	{
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->library('pagination');
	$config['base_url'] = site_url('admin/nav/');
	$config['total_rows'] = $this->db->get('nav')->num_rows();
	$config['per_page'] = 30;
	$config['num_links'] = 5;
	$config['full_tag_open'] = '<div id="pagination">';
	$config['full_tag_close'] = '</div>';
	$config['cur_tag_open'] = '<a class="current" href="#">';
	$config['cur_tag_close'] = '</a>';
	$this->pagination->initialize($config);
	$this->db->order_by("position","asc");
	$searchterm = $this->input->post('search',TRUE);
	if (!empty($searchterm)) {
	$this->db->like('title', $searchterm); 
	}
	$query = $this->db->get('nav', $config['per_page'], $this->uri->segment(3));
	$data["nav"] = $query->result_array();
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
		if ($this->form_validation->run() === FALSE)
		{
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/nav', $data);
		$this->load->view('admin/template/footer', $data);
		}
	} else {
		redirect('login', 'refresh');
	}
	}
	
	//ADD NAV
	public function add_nav()
	{
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$this->load->helper('form');
	$this->load->library('form_validation');
	$data['title'] = 'Add nav';
	$this->form_validation->set_rules('title', 'Title', 'required');
	$this->form_validation->set_rules('url', 'url', 'required');
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/add_nav', $data);
		$this->load->view('admin/template/footer', $data);
	}
	else
	{
		$this->load->model('admin_model');
		$this->admin_model->set_nav();
		redirect('admin', 'refresh');

	}
	} else {
		redirect('login', 'refresh');
	}
	}
 
	//EDIT NAV
	function edit_nav($id) {
	{
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['title'] = 'Edit nav';
	$data['navid'] = $id;
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->model('admin_model');
	$this->form_validation->set_rules('title', 'Title', 'required');
	if($this->form_validation->run())
	{
	$this->admin_model->update_nav($id);
	}
	$data['nav'] = $this->admin_model->get_nav($id);
	if(empty($data['nav']))
	{
        show_404();
	}
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$this->load->view('admin/template/header',$data);
	$this->load->view('admin/edit_nav',$data);
	$this->load->view('admin/template/footer',$data);
	} else  {
		redirect('login', 'refresh');
	}
	}
	}
	
	//DELETE NAV
	public function delete_nav($id) {
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$this->load->model('admin_model');
	$data['title'] = 'Item deleted!';
	$this->admin_model->delete_nav($id);
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$this->load->view('admin/template/header', $data);
	$this->load->view('admin/delete_nav', $data);
	$this->load->view('admin/template/footer');
	} else  {
		redirect('login', 'refresh');
	}
	}
	
	/* SIDEBAR */
	public function sidebar()
	{
	if($this->session->userdata('logged_in'))
	{
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->library('pagination');	
	$config['base_url'] = site_url('admin/sidebar/');
	$config['total_rows'] = $this->db->get('sidebar')->num_rows();
	$config['per_page'] = 30;
	$config['num_links'] = 5;
	$config['full_tag_open'] = '<div id="pagination">';
	$config['full_tag_close'] = '</div>';
	$config['cur_tag_open'] = '<a class="current" href="#">';
	$config['cur_tag_close'] = '</a>';
	$this->pagination->initialize($config);
	$this->db->order_by("position","asc");
	$searchterm = $this->input->post('search',TRUE);
	if (!empty($searchterm)) {
	$this->db->like('title', $searchterm); 
	}
	$query = $this->db->get('sidebar', $config['per_page'], $this->uri->segment(3));
	$data["sidebar"] = $query->result_array();
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
		if ($this->form_validation->run() === FALSE)
		{
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/template/footer', $data);
		}
	} else {
		redirect('login', 'refresh');
	}
	}
	
	//ADD SIDEBAR
	public function add_sidebar()
	{
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$this->load->helper('form');
	$this->load->library('form_validation');
	$data['title'] = 'Add sidebar';
	$this->form_validation->set_rules('title', 'Title', 'required');
	$this->form_validation->set_rules('body', 'body', 'required');
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/add_sidebar', $data);
		$this->load->view('admin/template/footer', $data);
	}
	else
	{
		$this->load->model('admin_model');
		$this->admin_model->set_sidebar();
		redirect('admin', 'refresh');

	}
	} else {
		redirect('login', 'refresh');
	}
	}
 
	//EDIT SIDEBAR
	function edit_sidebar($id) {
	{
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['title'] = 'Edit sidebar';
	$data['sidebarid'] = $id;
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->model('admin_model');
	$this->form_validation->set_rules('title', 'Title', 'required');
	if($this->form_validation->run())
	{
	$this->admin_model->update_sidebar($id);
	}
	$data['sidebar'] = $this->admin_model->get_sidebar($id);
	if(empty($data['sidebar']))
	{
        show_404();
	}
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$this->load->view('admin/template/header',$data);
	$this->load->view('admin/edit_sidebar',$data);
	$this->load->view('admin/template/footer',$data);
	} else  {
		redirect('login', 'refresh');
	}
	}
	}
	
	//DELETE SIDEBAR
	public function delete_sidebar($id) {
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$this->load->model('admin_model');
	$data['title'] = 'Item deleted!';
	$this->admin_model->delete_sidebar($id);
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$this->load->view('admin/template/header', $data);
	$this->load->view('admin/delete_sidebar', $data);
	$this->load->view('admin/template/footer');
	} else  {
		redirect('login', 'refresh');
	}
	}
	
	/* ARTICLE */
	public function articles()
	{
	if($this->session->userdata('logged_in'))
	{
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->library('pagination');	
	$config['base_url'] = site_url('admin/articles/');
	$config['total_rows'] = $this->db->get('articles')->num_rows();
	$config['per_page'] = 30;
	$config['num_links'] = 5;
	$config['full_tag_open'] = '<div id="pagination">';
	$config['full_tag_close'] = '</div>';
	$config['cur_tag_open'] = '<a class="current" href="#">';
	$config['cur_tag_close'] = '</a>';
	$this->pagination->initialize($config);
	$this->db->order_by("id","desc");
	$searchterm = $this->input->post('search',TRUE);
	if (!empty($searchterm)) {
	$this->db->like('title', $searchterm); 
	}
	$query = $this->db->get('articles', $config['per_page'], $this->uri->segment(3));
	$data["articles"] = $query->result_array();
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
		if ($this->form_validation->run() === FALSE)
		{
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/articles', $data);
		$this->load->view('admin/template/footer', $data);
		}
	} else {
		redirect('login', 'refresh');
	}
	}
 
	//ADD ARTICLE
	public function add_article()
	{
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$this->load->helper('form');
	$this->load->library('form_validation');
	$data['title'] = 'Add Article';
	$this->form_validation->set_rules('title', 'Title', 'required');
	$this->form_validation->set_rules('body', 'body', 'required');
	$query = $this->db->get('categories');
	$data["categories"] = $query->result_array();
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/add_article', $data);
		$this->load->view('admin/template/footer', $data);
	}
	else
	{
		$this->load->model('admin_model');
		$this->admin_model->set_article();
		redirect('admin', 'refresh');

	}
	} else {
		redirect('login', 'refresh');
	}
	}
 
	//EDIT ARTICLE
	function edit_article($id) {
	{
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['title'] = 'Edit article';
	$data['articleid'] = $id;
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->model('admin_model');
	$this->form_validation->set_rules('title', 'Title', 'required');
	if($this->form_validation->run())
	{
	$this->admin_model->update_article($id);
	}
	$data['article'] = $this->admin_model->get_articles($id);
	$query = $this->db->get('categories');
	$data["categories"] = $query->result_array();
	if(empty($data['article']))
	{
        show_404();
	}
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$this->load->view('admin/template/header',$data);
	$this->load->view('admin/edit_article',$data);
	$this->load->view('admin/template/footer',$data);
	} else  {
		redirect('login', 'refresh');
	}
	}
	}
	
	//DELETE ARTICLE
	public function delete_article($id) {
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$this->load->model('admin_model');
	$data['title'] = 'Item deleted!';
	$this->admin_model->delete_article($id);
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$this->load->view('admin/template/header', $data);
	$this->load->view('admin/delete_article', $data);
	$this->load->view('admin/template/footer');
	} else  {
		redirect('login', 'refresh');
	}
	}
	
	/* CATEGORIES */
	public function categories()
	{
	if($this->session->userdata('logged_in'))
	{
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->library('pagination');	
	$config['base_url'] = site_url('admin/categories/');
	$config['total_rows'] = $this->db->get('articles')->num_rows();
	$config['per_page'] = 30;
	$config['num_links'] = 5;
	$config['full_tag_open'] = '<div id="pagination">';
	$config['full_tag_close'] = '</div>';
	$config['cur_tag_open'] = '<a class="current" href="#">';
	$config['cur_tag_close'] = '</a>';
	$this->pagination->initialize($config);
	$this->db->order_by("id","desc");
	$searchterm = $this->input->post('search',TRUE);
	if (!empty($searchterm)) {
	$this->db->like('title', $searchterm); 
	}
	$query = $this->db->get('categories', $config['per_page'], $this->uri->segment(3));
	$data["categories"] = $query->result_array();
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
		if ($this->form_validation->run() === FALSE)
		{
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/categories', $data);
		$this->load->view('admin/template/footer', $data);
		}
	} else {
		redirect('login', 'refresh');
	}
	}
	
	//ADD CATEGORY
	public function add_category()
	{
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$this->load->helper('form');
	$this->load->library('form_validation');
	$data['title'] = 'Add Article';
	$this->form_validation->set_rules('title', 'Title', 'required');
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/add_category');
		$this->load->view('admin/template/footer');

	}
	else
	{
		$this->load->model('admin_model');
		$this->admin_model->set_cat();
		redirect('admin', 'refresh');
	} 
	} else  {
		redirect('login', 'refresh');
	}
	}
 
	//EDIT CATEGORY
	function edit_category($id) {
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$data['title'] = 'Edit category';
	$data['categoryid'] = $id;
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->model('admin_model');
	$this->form_validation->set_rules('title', 'Title', 'required');
	if($this->form_validation->run())
	{
	$this->admin_model->update_category($id);
	}
	$data['category'] = $this->admin_model->get_categories($id);
	$query = $this->db->get('categories');
	$data["categories"] = $query->result_array();
	if(empty($data['category']))
	{
        show_404();
	}
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$this->load->view('admin/template/header',$data);
	$this->load->view('admin/edit_category',$data);
	$this->load->view('admin/template/footer',$data);
	} else  {
		redirect('login', 'refresh');
	}
	}
	
	//DELETE CATEGORY
	public function delete_category($id) {
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$this->load->model('admin_model');
	$data['title'] = 'Item deleted!';
	$this->admin_model->delete_article($id);
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$this->load->view('admin/template/header', $data);
	$this->load->view('admin/delete_category', $data);
	$this->load->view('admin/template/footer');
	} else  {
		redirect('login', 'refresh');
	}
	}
	
	/* PAGES */
	public function pages()
	{
	if($this->session->userdata('logged_in'))
	{
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->library('pagination');	
	$config['base_url'] = site_url('admin/pages/');
	$config['total_rows'] = $this->db->get('pages')->num_rows();
	$config['per_page'] = 30;
	$config['num_links'] = 5;
	$config['full_tag_open'] = '<div id="pagination">';
	$config['full_tag_close'] = '</div>';
	$config['cur_tag_open'] = '<a class="current" href="#">';
	$config['cur_tag_close'] = '</a>';
	$this->pagination->initialize($config);
	$this->db->order_by("id","desc");
	$searchterm = $this->input->post('search',TRUE);
	if (!empty($searchterm)) {
	$this->db->like('title', $searchterm); 
	}
	$query = $this->db->get('pages', $config['per_page'], $this->uri->segment(3));
	$data["pages"] = $query->result_array();
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
		if ($this->form_validation->run() === FALSE)
		{
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/pages', $data);
		$this->load->view('admin/template/footer', $data);
		}
	} else {
		redirect('login', 'refresh');
	}
	}
	
	//ADD PAGE
	public function add_page()
	{
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$this->load->helper('form');
	$this->load->library('form_validation');
	$data['title'] = 'Add page';
	$this->form_validation->set_rules('title', 'Title', 'required');
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('template/header', $data);
		$this->load->view('admin/add_page', $data);
		$this->load->view('template/footer', $data);
	}
	else
	{
		$this->load->model('admin_model');
		$this->admin_model->set_page();
		redirect('admin', 'refresh');

	}
	} else {
		redirect('login', 'refresh');
	}
	}
 
	//EDIT PAGE
	function edit_page($id) {
	{
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['username'];
	$data['title'] = 'Edit page';
	$data['pageid'] = $id;
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->model('admin_model');
	$this->form_validation->set_rules('title', 'Title', 'required');
	if($this->form_validation->run())
	{
	$this->admin_model->update_page($id);
	}
	$data['page'] = $this->admin_model->get_page($id);
	if(empty($data['page']))
	{
        show_404();
	}
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$this->load->view('admin/template/header',$data);
	$this->load->view('admin/edit_page',$data);
	$this->load->view('admin/template/footer',$data);
	} else  {
		redirect('login', 'refresh');
	}
	}
	}
	
	//DELETE PAGE
	public function delete_page($id) {
	if($this->session->userdata('logged_in'))
	{
	$session_data = $this->session->userdata('logged_in');
	$this->load->model('admin_model');
	$data['title'] = 'Item deleted!';
	$this->admin_model->delete_page($id);
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$this->load->view('admin/template/header', $data);
	$this->load->view('admin/delete_page', $data);
	$this->load->view('admin/template/footer');
	} else  {
		redirect('login', 'refresh');
	}
	}
	
	//LOGOUT
	public function logout()
	{
	$this->session->unset_userdata('logged_in');
	session_destroy();
	redirect('login', 'refresh');
	}
}
?>