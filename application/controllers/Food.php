<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation');
        $this->load->model('Answer_model');
        if ($this->session->userdata('USER_ID') == '') {
        
            redirect('login');

        }
    	$user = 1;
   
    }

    public function index() {
    	$data['title'] = 'Food';
    	if ($this->session->userdata('USER_ID') == '') {
        
            redirect('login');

        }
        else
        {
       
            $argPost['userid'] = $this->session->userdata('USER_ID');
            $argPost['type'] = 4 ;
            $data['data'] = $this->Answer_model->getAnswers($argPost);
            $data['other'] = $this->Answer_model->getAllAnswers($argPost);

            
            
            $this->load->view('food',$data);
        }
    }
    public function set()
    {
    
    	$argPost['userid'] = $this->session->userdata('USER_ID');
	    $argPost['type'] = 4 ;
	    $data['data'] = $this->Answer_model->getAnswers($argPost);
	    
	    $this->load->view('food',$data);
	
    	
        $argPost['userid'] = $this->session->userdata('USER_ID');
    	$argPost['type'] = 1 ;
    	$data = $this->Answer_model->getAnswers($argPost);
    	
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post,4);
        //print_r($post);
        redirect(base_url("Land"));
    }
	
}
