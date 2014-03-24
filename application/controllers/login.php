<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   $this->load->helper(array('form'));
   $navquery = $this->db->order_by("position","asc");
   $navquery = $this->db->get('nav');
   $data["nav"] = $navquery->result_array();
   $this->load->view('template/'.$this->config->item('theme').'/header', $data);
   $this->load->view('login_view', $data);
   $this->load->view('template/'.$this->config->item('theme').'/footer', $data);
 }

}

?>