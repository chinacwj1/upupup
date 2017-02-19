<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function check($username)
	{
		$data=$this->db->get_where('admin',array('username'=>$username))->result_array();
		return $data;
	}
	public function u_check($username)
	{
		$data=$this->db->get_where('user',array('username'=>$username))->result_array();
		return $data;
	}
}