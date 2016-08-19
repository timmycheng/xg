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

	public function get_entries($cate,$num=0)
	{
		# code...
		// $query=$this->db->get_where('entries',array('cate'=>$cate),$num);
		// $this->db->order_by('id','DESC');
		$query=$this->db->select('*')->from('entries')
			->where('cate',$cate)
			->limit(20,$num)
			->order_by('id','ASC')
			->get();

		return $query->result_array();
	}

	public function get_len($cate)
	{
		# code...
		$this->db->where('cate',$cate);
		$query=$this->db->count_all_results('entries');
		return $query;
	}

	public function get_detail($id)
	{
		# code...
		$query=$this->db->get_where('details',array('e_id'=>$id));
		return $query->result_array();
	}


}

?>
