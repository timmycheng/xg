<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	public function index()
	{
		$this->load->view('main_page');
	}
	public function example()
	{
		$this->load->view('example');
	}

	public function page_missing()
	{
		show_error("Can't find your page",404,"Oops!404!");
		// $this->load->view('missing_page');
	}

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
