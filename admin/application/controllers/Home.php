<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function index() {
        // Set the title
        $login=$this->session->userdata('login');
        if($login==true){
            redirect('login/loadAdmin');
        }
        else{
            redirect('login/loadlogin');
        }
    }
}