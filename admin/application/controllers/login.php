<?php
/**
* Login to Admin
*/
class Login extends CI_Controller
{
	function loadlogin(){
		$this->template->title = 'Login To Admin';
		$this->template->set_template('login');
		$inf = array('white' => 'Login','blue'=>'Admin');
		$this->template->publish($inf);

	}
	function loadAdmin(){
		$this->load->view('admin');

	}
	function index(){
		$this->loadlogin();
	}
	function auth(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'لطفا پر کنید: %s.')
          		);
		 if ($this->form_validation->run() == FALSE){
            $this->loadlogin();
         }
         else{
         	$this->load->model('login_model');
         	$this->login_model->check();
         }
	}
}



?>