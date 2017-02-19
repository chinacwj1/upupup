<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cate extends CI_Model
{
	public function add($data)
	{
		$this->db->insert('a',$data);
	}

	public function check()
	{
		$data = $this->db->get('a')->result_array();
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";
		die;*/
		return $data;
	}
	public function check_cate($id)
	{
		$data = $this->db->where(array('id'=>$id))->get('a')->result_array();
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";
		die;*/
		return $data;
	}
	public function update($id,$data)
	{
		$this->db->update('a',$data,array('id'=>$id));
	} 
	public function del($id)
	{
		$this->db->delete('a',array('id'=>$id));
	}
}