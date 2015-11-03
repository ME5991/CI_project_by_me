<?php
/**
* Login
*/
class Login_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function check(){
		//setcookie('mucooki324e','user');

		$username=$this->input->post('username',true);
		$password=$this->input->post('password',true);
		$remember=$this->input->post('remember',true);
		$this->db->select('username','password');
		$this->db->where('username',"$username");
		$this->db->where('password',$password);
		$this->db->from('user');
		$this->db->limit(1);
		$is=$this->db->count_all_results();
		if($is > 0 ){

			$dsession = array(
				'username' =>$_POST['username'] ,
				 'login'=> true
				 );
			$this->session->set_userdata($dsession); 

			if($remember==1){
				$cookie = array(
					'name'   => 'home_set',
					'value'  => 'home page Change',
					'expire' => time()+86500,
					'domain' => 'localhost',
					'path'   => '/',
					'prefix' => 'arjun_',	
				);
 
			$this->input->set_cookie($cookie);
			//redirect('login/loadAdmin');
			//coockie 
			
			}
		}
		else{
			
			redirect('login/loadlogin');
		}
	}
}


?>