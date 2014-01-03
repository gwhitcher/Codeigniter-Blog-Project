<?php
class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
	}

	//HOME
	public function index()
	{
	$this->load->library('pagination');
				
	$config['base_url'] = site_url('articles/index/');
	$config['total_rows'] = $this->db->get('articles')->num_rows();
	$config['per_page'] = 5;
	$config['num_links'] = 5;
	$config['full_tag_open'] = '<div id="pagination">';
	$config['full_tag_close'] = '</div>';
	$this->pagination->initialize($config);
	$this->db->order_by("id","desc");
	$query = $this->db->get('articles', $config['per_page'], $this->uri->segment(3));
	$data["articles"] = $query->result_array();
	$data['title'] = 'Home';
	$this->load->view('template/header', $data);
	$this->load->view('template/sidebar', $data);
	$this->load->view('index_view', $data);
	$this->load->view('template/footer');
	}

	//LOAD ARTICLE
	public function view($slug)
	{
	$data['article'] = $this->article_model->get_articles($slug);
	if (empty($data['article']))
	{
		show_404();
	}
	$data['title'] = $data['article']['title'];
	$this->load->view('template/header', $data);
	$this->load->view('template/sidebar', $data);
	$this->load->view('article_view', $data);
	$this->load->view('template/footer');
	}
	//LOAD CATEGORY
	function category($slug) {
	$this->load->library('pagination');
	$this->db->order_by("id","desc");
	$this->db->where('slug', $slug);
	$data['category'] = $slug;
	$data['category'] = $this->article_model->get_categories($slug);
	if (empty($data['category']))
	{
		show_404();
	}			
	$config['base_url'] = site_url('category/'.$slug.'/');
	$config['total_rows'] = $this->db->get('articles')->num_rows();
	$config['per_page'] = 5;
	$config['num_links'] = 5;
	$config['full_tag_open'] = '<div id="pagination">';
	$config['full_tag_close'] = '</div>';
	$this->pagination->initialize($config);	
	$query = $this->db->where('category_id', $data['category']['id']);
	$query = $this->db->get('articles', $config['per_page'], $this->uri->segment(3));
	$data["articles"] = $query->result_array();
	$data['title'] = 'Categories';
	$this->load->view('template/header', $data);
	$this->load->view('template/sidebar', $data);
	$this->load->view('category_view', $data);
	$this->load->view('template/footer', $data);
	}
	
}