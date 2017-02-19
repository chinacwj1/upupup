<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	public function index()
	{
		$this->load->helper('captcha');
		$vals=array
		(
			'img_path' =>'./code/',
			'img_url' => base_url().'/code/',
			'img_width' => 100,
			'img_height' =>36,
			'word_length'   => 4,
			'expiration' => 60
			);
		$cap= create_captcha($vals);
		$data['captcha']=$cap['image'];
		$data['code']=$cap['word'];
		/*p($cap);
		die;*/
		if(!isset($_SESSION))
		{
			session_start();
		}
		//$_SESSION['code']=$cap['word'];
		/*$_SESSION=array(
			'code'=>$cap['word']
			);*/
		/*p($_SESSION['code']);
		die;*/
		/*p($data);
		die;*/
		$this->load->view('admin_login',$data);
	}
	public function login_in()
	{
		$code=$this->input->post('code');
		$code1=$this->input->post('code1');
		/*p($code);
		p($code1);
		die;*/
		if(strtoupper($code)!=strtoupper($code1))
		{
			success('user/index','验证码错误');
		}
		$username= $this->input->post('username');
		$this->load->model('admin_model');
		$userdata=$this->admin_model->check($username);
		$password=$username= $this->input->post('password');
		if(!$userdata||$userdata[0]['password']!=$password)
		{
			error('用户名或者密码错误');
		}
		else
		{
			$sessiondata=array(
				'username'=>$username,
				'uid' =>$userdata[0]['uid'],
				'logintime' =>time()
				);
			$this->session->set_userdata($sessiondata);
			$data=$this->session->userdata('username');
			/*p($data);
			die;*/
			success('home/look','登录成功');
		}
		/*p($userdata);
		die;*/
		/*if(!isset($_SESSION))
		{
			session_start();
		}
		$code=$this->input->post('code');
		p($code);
		echo "<hr />";
		/*if(!isset($_SESSION['code']))
		{
			echo "1";
			p($_SESSION['code']);
		}
		$c = $this->session->userdata('code');
		p($c);
		die;*/
	}
	public function u_login_in()
	{
		$code=$this->input->post('code');
		$code1=$this->input->post('code1');
		/*p($code);
		p($code1);
		die;*/
		if(strtoupper($code)!=strtoupper($code1))
		{
			success('user/u_index','验证码错误');
		}
		$username= $this->input->post('username');
		$this->load->model('admin_model');
		$userdata=$this->admin_model->u_check($username);
		$password=$username= $this->input->post('password');
		if(!$userdata||$userdata[0]['password']!=$password)
		{
			error('用户名或者密码错误');
		}
		else
		{
			$sessiondata=array(
				'username'=>$username,
				'uid' =>$userdata[0]['uid'],
				'logintime' =>time()
				);
			$this->session->set_userdata($sessiondata);
			$data=$this->session->userdata('username');
			/*p($data);
			die;*/
			success('home/u_look','登录成功');
		}
		/*p($userdata);
		die;*/
		/*if(!isset($_SESSION))
		{
			session_start();
		}
		$code=$this->input->post('code');
		p($code);
		echo "<hr />";
		/*if(!isset($_SESSION['code']))
		{
			echo "1";
			p($_SESSION['code']);
		}
		$c = $this->session->userdata('code');
		p($c);
		die;*/
	}
	public function login_out()
	{
		$this->session->sess_destroy();
		success('user/u_index','退出成功');
	}
	public function u_index()
	{
		$this->load->helper('captcha');
		$vals=array
		(
			'img_path' =>'./code/',
			'img_url' => base_url().'/code/',
			'img_width' => 100,
			'img_height' =>36,
			'word_length'   => 4,
			'expiration' => 60
			);
		$cap= create_captcha($vals);
		$data['captcha']=$cap['image'];
		$data['code']=$cap['word'];
		if(!isset($_SESSION))
		{
			session_start();
		}
		$this->load->view('register_login',$data);
	}
	public function check_register()
	{
		$this->load->model('user_model');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$password1=$this->input->post('password1');
		$data = array(
			'username' =>$username,
			'password' =>$this->input->post('password'),
			'email' =>$this->input->post('email')
			);
		$flag = $this->user_model->check($username);
		if(!empty($flag))
		{
			success('user/u_index','用户名存在');
		}
		if($password!=$password1)
		{
			success('user/u_index','两次密码不一致');
		}
		$this->user_model->add_user($data);
		success('user/u_index','注册成功！！！');
		/*p($flag);
		die;*/
		/*p($data);
		die;*/
	}
	public function send_article()
	{
		$this->load->model('cate');
		$data['cate'] = $this->cate->check();
		/*p($data);
		die;*/
		$this->load->helper('form');
		$this->load->view('user_send_art',$data);
	}
	public function more_bolgs()
	{
		$this->load->library('pagination');
		$perpage=6;
		$config['base_url'] = site_url('user/more_bolgs');
		$config['total_rows'] = $this->db->count_all_results('article');//统计总行数
		$config['per_page'] = $perpage;//设置每页显示多少个
		$config['first_link'] = '首页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['last_link'] = '最后一页';
		$this->pagination->initialize($config);
		$data['links']=$this->pagination->create_links();
		/*p($data);
		die;*/
		$offset=$this->uri->segment(3);
		$this->db->limit($perpage,$offset);
		$this->load->model('article_model','am');
		$data['article']=$this->am->article_cate();
		/*p($data);
		die;*/
		$this->load->model('user_model','um');
		$username=$this->session->userdata('username');
		$data['article_r']=$this->um->check_article_r($username);
		/*p($data);
		die;*/
		$this->load->view('more_bolgs',$data);
	}
	public function article_content()
	{
		$aid=$this->uri->segment(3);
		/*p($url);
		die;*/
		$this->load->model('user_model','um');
		$data['article']=$this->um->check_article($aid);
		/*p($data);
		die;*/
		/*p($data);
		die;*/
		$this->load->view('user_article_content',$data);
	}
	public function change_article()
	{
		$aid=$this->uri->segment(3);
		/*p($aid);
		die;*/
		$this->load->model('user_model','um');
		$data['article']=$this->um->check_article($aid);	
		/*p($data);
		die;*/
		$this->load->view('user_change_article',$data);
	}
	public function change_art_r()
	{
		$title=$this->input->post('title');
		$content=$this->input->post('content');
		$aid=$this->input->post('aid');
		/*p($title);
		p($aid);
		p($content);
		die;*/
		if(empty($title)||empty($content))
		{
			success("user/more_bolgs","修改失败");
		}
		else
		{
			$data =  array
			(
				'title' =>$title,
				'content' =>$content
				);
			$this->load->model('user_model','um');
			$this->um->update($aid,$data);
			success("user/more_bolgs","修改成功");
		}
	}
	public function search()
	{
		$string=$this->input->post('string');
		$this->load->model('user_model','um');
		$data['article']=$this->um->search($string);
		/*p($data);
		die;*/
		$this->load->view('user_search',$data);
	}
	public function photo()
	{
		$this->load->model('user_model','um');
		$username=$this->session->userdata('username');
		$data['photo']=$this->um->check_photo($username);
		/*p($data);
		die;*/
		$this->load->view('photo',$data);
	}
	public function up_photo()
	{
		$this->load->view('up_photo');
	}
	public function up_photo_r()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['file_name'] = time() . mt_rand(1000,9999);

		$this->load->library('upload',$config);
		$this->upload->do_upload('thumb');
		$wrong=$this->upload->display_errors();
		if($wrong)
		{
			error($wrong);
		}
		$message=$this->upload->data();
		//p($message);
		//缩略图
		$config1['source_image'] = $message['full_path'];
		$config1['create_thumb'] = FALSE;
		$config1['maintain_ratio'] = TRUE;
		$config1['width'] = 180;
		$config1['height'] = 200;
		$this->load->library('image_lib',$config1);
		$flag1=$this->image_lib->resize();
		if(!$flag1)
		{
			error("缩略失败");
		}
		if($flag1)
		{
			$this->load->model('user_model','um');
			$data = array
			(
				'pname' =>  $this->input->post('pcname'),
				'thumb' => $message['file_name'],
				'username' =>$this->session->userdata('username')
			);
			/*p($data);
			die;*/
			$this->um->add_photo($data);
			success("user/photo","发表成功");
		}
		else
		{
			success("user/up_photo","发表失败");
		}
	}
	public function myself()
	{
		$this->load->view('myself');
	}
}