<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waste extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation');
        $this->load->model('Answer_model');
    	$user = 1;
    	if ($this->session->userdata('USER_ID') == '') {
        
            redirect('login');

        }
    }

    public function index() {
    	$data['title'] = 'Waste';
        if ($this->session->userdata('USER_ID') == '') {
        
            redirect('login');

        }
        else
        {
            $argPost['userid'] =$this->session->userdata('USER_ID');
            $argPost['type'] = 7  ;
            $data['data'] = $this->Answer_model->getAnswers($argPost);
            $data['other'] = $this->Answer_model->getAllAnswers($argPost);
            print_r($data['other']['Q1G1']);
            print_r($data['other']['Q1G2']);
            
            if(isset($data['other']['Q1G1']) && isset($data['other']['Q1G2']))
            {	 
            	if($data['other']['Q1G1'] < 6 && $data['other']['Q1G2'] < 6)
		 {  
			$this->load->view('PrimaryWaste',$data);
		 }
		else
		{
			$this->load->view('waste',$data);
		}
	     }	
            else
            {
	    	$this->load->view('waste',$data);//$this->load->view('waste',$data); this is where problem was, I told you that 2 views might be loaded.
	    }
	  }
    }
   public function set()
    {
        
        $post = $this->input->post();
        $this->Answer_model->submitAnswers($post,7);
        //print_r($post);
        redirect(base_url("school"));
    }
    
	
}
