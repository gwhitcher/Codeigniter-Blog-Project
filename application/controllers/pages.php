<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller {	
	//CONTACT
	function contact()
	{
	 $this->load->helper('captcha');
	 $this->load->library('form_validation');
	 $this->form_validation->set_rules('email','email','required');
	 $this->form_validation->set_rules('name','name','required');
	 $this->form_validation->set_rules('subject','subject','required');
	 $this->form_validation->set_rules('message','message','required');
	 $vals = array(
	 //'word'	 => 'test',
     'img_path'	 => './captcha/',
     'img_url'	 => './captcha/'
     );
	 $cap = create_captcha($vals);
	 $data = array(
	 'captcha_time'	=> $cap['time'],
	 'ip_address'	=> $this->input->ip_address(),
	 'word'	 => $cap['word']
	 );
	 $query = $this->db->insert_string('captcha', $data);
	 $this->db->query($query);
	 $data['captcha'] = $cap['image'];
	 if ($this->form_validation->run() === TRUE && !empty($_POST['submit'])) {
	 // First, delete old captchas
	 $expiration = time()-7200; // Two hour limit
	 $this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);	
	 // Then see if a captcha exists:
	 $sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
	 $binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
	 $query = $this->db->query($sql, $binds);
	 $row = $query->row();
	 if ($row->count == 0)
	 {
     $data['captchaincorrect'] = "You must submit the word that appears in the image";
	 }
	 else {
	 $this->load->library('email');
	 $config['protocol'] = 'sendmail';
	 $config['mailpath'] = '/usr/sbin/sendmail';
	 $config['charset'] = 'iso-8859-1';
	 $config['wordwrap'] = TRUE;
	 $this->email->initialize($config);
	 $this->email->from($this->input->post('email'), $this->input->post('name'));
	 $this->email->to($this->config->item('adminemail'));  
	 $this->email->subject($this->input->post('subject'));
	 $this->email->message($this->input->post('message'));	
	 $this->email->send();
	 $data['success'] = 'Email successfully submitted.  You will be contacted as soon as possible.  Thank you!';
	 }}
	 $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
	 $data['user_id'] = $session_data['id'];
	 $data['title'] = 'Contact';
	 $navquery = $this->db->order_by("position","asc");
	 $navquery = $this->db->get('nav');
	 $data["nav"] = $navquery->result_array();
	 $sidebarquery = $this->db->order_by("position","asc");
	 $sidebarquery = $this->db->get('sidebar');
	 $data["sidebar"] = $sidebarquery->result_array();
	 $this->load->view('/template/'.$this->config->item('theme').'/header', $data);
	 $this->load->view('/template/'.$this->config->item('theme').'/sidebar', $data);
     $this->load->view('contact_view', $data);
	 $this->load->view('/template/'.$this->config->item('theme').'/footer');
   }
   
   	//GOOGLE
	function google() {
	$this->load->helper('xml');  
    $this->load->helper('text');
	$this->db->order_by("id","desc");
	$pagesquery = $this->db->get('pages');
	$data["pages"] = $pagesquery->result_array();
	$categoriesquery = $this->db->get('categories');
	$this->db->order_by("id","desc");
	$articlesquery = $this->db->get('articles');
	$data["articles"] = $articlesquery->result_array();
	$categoriesquery = $this->db->get('categories');
	$data["categories"] = $categoriesquery->result_array();
	$data['title'] = 'Google Sitemap';
	$this->load->view('google_view', $data);	
	}
	
	//PAGE VIEW
	public function page_view($slug)
	{
	$this->load->model('article_model');
	$data['page'] = $slug;
	$data['page'] = $this->article_model->get_pages($slug);
	if (empty($data['page']))
	{
		show_404();
	}
	$data['title'] = ucfirst($data['page']['title']); // Capitalize the first letter
	$data['metadescription'] = $data['page']['metadescription'];
	$data['metakeywords'] = $data['page']['metakeywords'];
	$navquery = $this->db->order_by("position","asc");
	$navquery = $this->db->get('nav');
	$data["nav"] = $navquery->result_array();
	$sidebarquery = $this->db->order_by("position","asc");
	$sidebarquery = $this->db->get('sidebar');
	$data["sidebar"] = $sidebarquery->result_array();
	$this->load->view('/template/'.$this->config->item('theme').'/header', $data);
	$this->load->view('/template/'.$this->config->item('theme').'/sidebar', $data);
	$this->load->view('page_view', $data);
	$this->load->view('/template/'.$this->config->item('theme').'/footer');
	}
}