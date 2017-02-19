<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller{

	public function add_cate()
	{
		//echo site_url('home/add');
		//die;
		$this->load->helper('form');
		$this->load->view('home');
	} 
	public function add()
	{
		$this->load->library('form_validation');
		$flag = $this->form_validation->run('cate');
		if($flag)
		{
			//echo "数据库操作";
			$data = array(
				'cname' => $_POST['cname']
				);
			$this->load->model('cate');
			$this->cate->add($data);
			success('home/index','添加成功');
		}
		else
		{
			$this->load->helper('form');
			$this->load->view('home');
		}
	}
	public function index()
	{
		$this->load->model('cate');
		$data['cate'] = $this->cate->check();
		$this->load->view('check_cate',$data);
	}
	public function edit_cate()
	{
		$id=$this->uri->segment(3);
		$this->load->model('cate');
		/*echo $id;
		die;*/
		$data['cate'] = $this->cate->check_cate($id);
		$this->load->helper('form');
		$this->load->view('edit_cate',$data);
	}
	public function edit()
	{
		$this->load->library('form_validation');
		$flag = $this->form_validation->run('cate');
		if($flag)
		{
			//echo "数据库操作";
			$this->load->model('cate');
			$id = $this->input->post('id');
			$cname = $this->input->post('cname');
			$data = array(
				'cname' => $cname
			);
			$data['cate'] = $this->cate->update($id,$data);
			success('home/index','修改成功');
		}
		else
		{
			success('home/index','修改失败');
		}
	}
	public function del()
	{
		$this->load->model('cate');
		$id = $this->uri->segment(3);
		/*echo $id;
		die;*/
		$this->cate->del($id);
		success('home/index','删除成功');
	}
	public function look()
	{
		$this->load->view('admin');
	}
	public function u_look()
	{
		$this->load->model('user_model');
		$data['hot_bolgs']=$this->user_model->hot_bolgs();
		/*p($data);
		die;*/
		$this->load->view('user_index',$data);
	}
}