<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub extends CI_Controller {
	
	public function index()
	{
		$this->load->view('Sub_view');
	}
}