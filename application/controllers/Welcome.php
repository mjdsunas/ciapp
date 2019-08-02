<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	
	public function index()
	{
		echo $this->config->site_url();
		echo '<br/>';
		echo $this->config->base_url();


		//$this->config->load('myconfig');
		//$this->config->set_item('name','New Name');
		//echo $this->config->item('name');

		//$this->load->view('welcome_message');

	}



	


}
