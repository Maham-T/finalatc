<?php 
class Packagedetail extends CI_Controller
{
	 public function __construct()
     {
         parent::__construct();
         $this->load->model('Product');

           // Load cart library
        $this->load->library('cart');
        
        
         }


   
   public function details($tid){
    $tour=$this->Product->getRows($tid);
   	

    $data['tours']=$tour;

   	$this->load->view('frontend/packagedetail',$data);

   	

}
}