<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Post Controller
*/
class Post extends CI_Controller
{
	function index(){
		//$this->template->load_view("_layout");
		$this->template->load('post/index');
	}
}
?>