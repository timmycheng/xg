<?php

/**
* Entry model
*/
class Entry_model extends CI_Model
{
	
	function __construct()
	{
		// parent::__construct();
		$this->load->database();
	}

	public function get_entries($cate,$num=20)
	{
		# code...
		$query=$this->db->get_where('entries',array('cate'=>$cate),$num);
		return $query->result_array();
	}

	public function get_detail($id)
	{
		# code...
		$query=$this->db->get_where('details',array('e_id'=>$id));
		return $query->result_array();
	}


}

?>