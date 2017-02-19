<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$usename =$this->session->userdata('username');
		$uid =$this->session->userdata('uid');
		if(!$usename||!$uid)
		{
			redirect('user/u_index');
		}
	}
}