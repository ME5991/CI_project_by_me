<?php
/**
* Post Model
*/
class PostModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getAllPost(){
		$query=$this->db->get('post');
		return $query;
		//return $query->result_array();
	}
}

?>