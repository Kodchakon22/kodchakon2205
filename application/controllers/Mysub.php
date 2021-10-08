<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mysub extends CI_Controller {
	
	public function index()
	{
		$this->load->view('myprofile_view');
	}
	public function link2()
	{
		$this->load->view('perfromance');
	}
	public function link3()
	{
		$this->load->view('travel');
	}
	public function link4()
	{
		$this->load->view('MyDreamJob');
	}
	public function link5()
	{
		$this->load->view('activity');
	}
}