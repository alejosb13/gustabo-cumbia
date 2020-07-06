<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_eng extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function about_me()
	{
		$data = array();
		$data["css"] = array(
			base_url("lib/css/about.css")
		);
 
		$data["js"] = array(
			base_url("lib/js/about.js")
		); 

		$this->load->view('about_view',$data);
	}
  
}
