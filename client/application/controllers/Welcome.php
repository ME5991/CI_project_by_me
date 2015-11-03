<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function index() {
        // Set the title
        
        
        // Dynamically add a css stylesheet
        $data=array('stylecss'=>'http://twitter.github.com/bootstrap/assets/css/bootstrap.css');
 		$this->template->set_template('index');
        $this->template->title = 'My weblog';
        // Load a view in the content partial
        //$this->template->content->view('hero', array('title' => 'Hello, world!'));

        //$news = array(); // load from model (but using a dummy array here)
        //$this->template->content->view('news', $news);
        
        // Set a partial's content
        //$this->template->footer = 'Made with Twitter Bootstrap';
        
        // Publish the template
        //$this->template->content->view('post/index');
        $this->template->publish();
    }
}