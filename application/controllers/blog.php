<?php
class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
		$this->load->config('config', true);
	}

	//HOME
	public function index()
	{
	$this->load->library('pagination');
			
	$config['base_url'] = site_url('articles/index/');
	$config['total_rows'] = $this->db->get('articles')->num_rows();
	$config['per_page'] = 4;
	$config['num_links'] = 5;
	$config['full_tag_open'] = '<div id="pagination">';
	$config['full_tag_close'] = '</div>';
	$config['cur_tag_open'] = '<a class="current" href="#">';
	$config['cur_tag_close'] = '</a>';
	$this->pagination->initialize($config);
	$this->db->order_by("id","desc");
	$query = $this->db->get('articles', $config['per_page'], $this->uri->segment(3));
	$data["articles"] = $query->result_array();
	$data['title'] = 'Home';
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$sidebarquery = $this->db->order_by("position","asc");
	$sidebarquery = $this->db->get('sidebar');
	$sliderquery = $this->db->order_by("id","desc");
	$sliderquery = $this->db->get_where('articles', array('slider' => 1), 5);
	$data["slider"] = $sliderquery->result_array();
	$data["sidebar"] = $sidebarquery->result_array();
	$this->load->view('/template/'.$this->config->item('theme').'/header', $data);
	$this->load->view('/template/'.$this->config->item('theme').'/sidebar', $data);
	$this->load->view('index_view', $data);
	$this->load->view('/template/'.$this->config->item('theme').'/footer');
	}

	//LOAD ARTICLE
	function blog_view($id, $slug)
	{
	$data['article'] = $slug;
	$data['article'] = $this->article_model->get_articles($slug);
	if (empty($data['article']))
	{
		show_404();
	}
	$data['metadescription'] = $data['article']['metadescription'];
	$data['metakeywords'] = $data['article']['metakeywords'];
	$data['title'] = $data['article']['title'];
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$sidebarquery = $this->db->order_by("position","asc");
	$sidebarquery = $this->db->get('sidebar');
	$data["sidebar"] = $sidebarquery->result_array();
	$this->load->view('/template/'.$this->config->item('theme').'/header', $data);
	$this->load->view('/template/'.$this->config->item('theme').'/sidebar', $data);
	$this->load->view('article_view', $data);
	$this->load->view('/template/'.$this->config->item('theme').'/footer');
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
	$this->db->where('category_id', $data['category']['id']);
	$config['total_rows'] = $this->db->get('articles')->num_rows();
	$config['per_page'] = 4;
	$config['num_links'] = 5;
	$config['full_tag_open'] = '<div id="pagination">';
	$config['full_tag_close'] = '</div>';
	$config['cur_tag_open'] = '<a class="current" href="#">';
	$config['cur_tag_close'] = '</a>';
	$this->pagination->initialize($config);	
	$this->db->order_by("id","desc");
	$query = $this->db->where('category_id', $data['category']['id']);
	$query = $this->db->get('articles', $config['per_page'], $this->uri->segment(3));
	$data["articles"] = $query->result_array();
	$data['metadescription'] = $data['category']['metadescription'];
	$data['metakeywords'] = $data['category']['metakeywords'];
	$data['title'] = $data['category']['title'];
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$sidebarquery = $this->db->order_by("position","asc");
	$sidebarquery = $this->db->get('sidebar');
	$data["sidebar"] = $sidebarquery->result_array();
	$this->load->view('/template/'.$this->config->item('theme').'/header', $data);
	$this->load->view('/template/'.$this->config->item('theme').'/sidebar', $data);
	$this->load->view('category_view', $data);
	$this->load->view('/template/'.$this->config->item('theme').'/footer');
	}
	
	//RSS
	function rss() {
	$this->load->helper('xml');  
    $this->load->helper('text');
	$this->db->order_by("id","asc");
	$query = $this->db->get('articles');
	$data["articles"] = $query->result_array();
	$data['title'] = 'RSS';
	$this->load->view('rss_view', $data);	
	}
	
	//SEARCH
	function search() {
	$data['title'] = 'Search';
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$sidebarquery = $this->db->order_by("position","asc");
	$sidebarquery = $this->db->get('sidebar');
	$data["sidebar"] = $sidebarquery->result_array();
	$this->load->view('/template/'.$this->config->item('theme').'/header', $data);
	$this->load->view('/template/'.$this->config->item('theme').'/sidebar', $data);
	$this->load->view('search_view', $data);
	$this->load->view('/template/'.$this->config->item('theme').'/footer');	
	}
	
}