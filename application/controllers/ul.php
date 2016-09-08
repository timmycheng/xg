<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Ul extends CI_Controller
{

  public function index()
  {
    # code...
    $pass=$this->uri->segment(3,0);
    // $is_identify=0;
    if($pass=='123456'){
      // $this->load->view("identify");
      $this->list();
    }else{
      show_error("Can't find your page",404,"Oops!404!");
    }

  }

  public function list()
  {
    $this->load->model('Entry_model','list');

    $data['list']=$this->list->get_all_entries();

    $this->load->view("identify",$data);
  }
}

?>
