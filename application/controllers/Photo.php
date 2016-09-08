<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Entry_model','photo');
	}
	public function index()
	{
		$offset=$this->uri->segment(3,0);
		// $this->load->view('main_page');
		// 加载模型
		// $this->load->model('Entry_model','photo');
		// 分页
		$this->load->library('pagination');
		$config['base_url']='/xg/photo/index';
		$config['total_rows']=$this->photo->get_len('2');
		$config['per_page']=20;
		$config['uri_segment']=3;
		$config['full_tag_open']='<div class="col-md-12 navi">';
		$config['full_tag_close']='</div>';
		$this->pagination->initialize($config);
		// 分页结束
		// 查询
		$data['query']=$this->photo->get_entries('2',$offset);
		$data['cate']='photo';
		$data['len']=$this->photo->get_len('2');
		// $data['next']=1;
		// $data['links']=$this->pagination->create_links();
		// $this->load->view('list',$data);
		$this->load->view('list-head',$data);
		$this->load->view('list',$data);
		$this->load->view('list-footer');
	}

	// public function next($next)
	// {
	// 	# code...
	// 	// $this->load->model('Entry_model','photo');
	// 	$data['query']=$this->photo->get_entries('2',$next);
	// 	$data['cate']='photo';
	// 	$data['len']=$this->photo->get_len('2');
	// 	$data['next']=$next+1;
	//
	// 	$this->load->view('list-head');
	// 	$this->load->view('list',$data);
	// 	$this->load->view('list-footer');
	//
	// }



	public function detail($id)
	{
		# code...
		// $this->load->model('Entry_model','photo');
		$data['query']=$this->photo->get_detail($id);
		$data['cate']='photo';
		$data['title']=$this->photo->get_title($id);
		$this->load->view('detail-head',$data);
		$this->load->view('detail',$data);
		$this->load->view('detail-footer',$data);
	}

	// public function page_missing()
	// {
	// 	show_error("Can't find your page",404,"Oops!404!");
	// 	// $this->load->view('missing_page');
	// }

	// public function get_designs()
	// {
	// 	# code...
	// 	$this->load->model('Entry_model','design');
	// 	$data['query']=$this->design->get_entries('1');
	// 	$data['cate']='design';
	// 	$this->load->view('list',$data);
	// }

	// public function get_photos()
	// {
	// 	# code...
	// 	$this->load->model('Entry_model','photo');
	// 	$data['query']=$this->photo->get_entries('2');
	// 	$data['cate']='photo';
	// 	$this->load->view('list',$data);
	// }

	// public function get_articles()
	// {
	// 	# code...
	// 	$this->load->model('Entry_model','article');
	// 	$data['query']=$this->article->get_entries('3');
	// 	$data['cate']='article';
	// 	$this->load->view('list',$data);
	// }
}
