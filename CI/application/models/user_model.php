<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function check($username)
	{
		$data=$this->db->get_where('user',array('username'=>$username))->result_array();
		return $data;
	}
	public function add_user($data)
	{
		$this->db->insert('user',$data);
	}
	public function hot_bolgs()
	{
		$data=$this->db->get_where('article',array('type'=>'2'))->result_array();
		return $data;
	}
	public function check_article($aid)
	{
		$data = $this->db->get_where('article',array('aid'=>$aid))->result_array();
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";
		die;*/
		return $data;
	}
	public function check_article_r($username)
	{
		$data=$this->db->get_where('article',array('username'=>$username))->result_array();
		return $data;
	}
	public function update($aid,$data)
	{
		$this->db->update('article',$data,array('aid'=>$aid));
	}
	public function search($string)
	{
		$data=$this->db->like('title', $string)->get('article')->result_array();
		return $data;
	}
	public function add_photo($data)
	{
		$this->db->insert('photo',$data);
	}
	public function check_photo($username)
	{
		$data = $this->db->get_where('photo',array('username'=>$username))->result_array();
		return $data;
	}
}