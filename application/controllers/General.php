<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {
  
  public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'security'));
        $this->load->library('form_validation');
        $this->load->model('Answer_model');
        $this->load->model('School_model');
        
        $this->load->model('User_model');
       
        if ($this->session->userdata('USER_ID') == '') {
        
            redirect('login');

        }
      
    }

    public function index() {
      	   $data['title'] = 'General';
            if ($this->session->userdata('USER_ID') == '') {
        
            redirect('login');

           }
            else
           {
            $argPost['userid'] = $this->session->userdata('USER_ID');
            $argPost['type'] = 1 ;
            $current = $this->Answer_model->getAnswers($argPost);
            $data['states'] = $this->User_model->getStates();
            $school = $this->School_model->getSchool($this->session->userdata('USER_ID'));
      	   if(empty($current['Q3G2']))
             $current['Q3G2'] = $school['state'];
            
            $data['data'] = $current;
            $data['other'] = $this->Answer_model->getAllAnswers($argPost);
            
       
            
            $this->load->view('general',$data);
            }
    }
    
    public function set()
    {
    
        $argPost['userid'] = $this->session->userdata('USER_ID');
        $argPost['type'] = 1 ;
        $data['data'] = $this->Answer_model->getAnswers($argPost);
        $this->load->view('general',$data);
      
      
        $argPost1['userid'] = $this->session->userdata('USER_ID');
        $argPost1['type'] = 4;
        $post = $this->input->post();
        $data = $this->Answer_model->getAnswers($argPost1);
        $argPost1['type'] = 2;
        $air = $this->Answer_model->getAnswers($argPost1);
        
        //Cross Linking
        /*if($post['Q4G4S3'] != $air['Q7A12S4'])
        {
            echo $post['Q4G4S3'];
            echo "<script>
            alert('Total School members does not match In General Section and Air Section does not match');
            window.location.href='/GSP/general';
            </script>";       
        }*/
    

        // Cross Validation

        /*if($post['Q2G1'] == 1 && isset($post['Q4G1S2']))
        {
          echo "<script>
    alert('You have selected Only Boys School.');
    window.location.href='/GSP/general';
    </script>";
        }
        else if($post['Q2G1'] == 2 && isset($post['Q4G1S1']))
        {
          echo "<script>
    alert('You have selected Only Girls School.');
    window.location.href='/GSP/general';
    </script>";

        }
        else if(
          $post['Q8G1'] == 2 && 
            (isset($data['Q6F1S1']) || 
             isset($data['Q6F2S1']) || 
             isset($data['Q6F3S1']) || 
             isset($data['Q6F4S1']) || 
             isset($data['Q6F5S1']) || 
             isset($data['Q6F6S1']) || 
             isset($data['Q6F6S1']) || 
             isset($data['Q6F7S1']) || 
             isset($data['Q6F8S1']) || 
             isset($data['Q6F9S1']) || 
             isset($data['Q6F10S1']) || 
             isset($data['Q6F11S1'])
            )
          )
        {
          echo "<script>
    alert('Rural Area Selected');
    window.location.href='/GSP/general';
    </script>";
          
  
        }
        else
        {*/
      $this->Answer_model->submitAnswers($post,1);
      redirect(base_url("air"));
        //print_r($post);
        //}
    }
  
}
