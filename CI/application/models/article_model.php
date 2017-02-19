<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model
{
	public function add($date)
	{
		$this->db->insert('article',$date);
	}
	public function article_cate()
	{
		$data=$this->db->select('aid,title,cname,time,username')->from('article')->join('a','article.cid=a.id')->order_by('time','asc')->get()->result_array();
		return $data;
	}
	public function check_art_content($aid)
	{
		$data=$this->db->select('aid,title,cname,time,content,username')->where(array('aid'=>$aid))->from('article')->join('a','article.cid=a.id')->order_by('time','asc')->get()->result_array();
		return $data;

	}
	public function del($aid)
	{
		$this->db->delete('article',array('aid'=>$aid));
	}
	public function change($aid)
	{
		$this->db->update('article',array('type'=>'2'),array('aid'=>$aid));
	}
}