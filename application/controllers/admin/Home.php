<?php 
class Home extends CI_Controller
{
     
     public function __construct()
     {
     	 parent::__construct();
     	 $admin=$this->session->userdata('admin');
     	 if (empty($admin)) {
     	 	# code...
     	 	$this->session->set_flashdata('msg','Please Sign In To get access');
     	 	redirect(base_url().'admin/login');
     	 }

     	
     }



     public function index()
     

     	{
     	
     	$admin=$this->session->userdata('admin');
        // print_r($admin);
         $this->load->view('admin/dashboard');
     	}



   }