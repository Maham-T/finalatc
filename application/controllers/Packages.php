<?php 
class Packages extends CI_Controller
{



       public function __construct()
     {
         parent::__construct();
         $this->load->model('Product');

           // Load cart library
        $this->load->library('cart');
        
        
         }


     




   public function index(){

     
   	$tours=$this->Product->getRows();
   	$data['tours']=$tours;

   	$this->load->view('frontend/packagesview',$data);

}    

       public function add($proID){

           print_r($proID);
          $product = $this->Product->getRows($proID);
           print_r($product);

            $data = array(
            'id'    => $product['id'],
            'qty'    => 1,
            'price'    => $product['price'],
            'name'    => $product['title'],
            'image' => $product['image']
        );

            print_r($data);

             $this->cart->insert($data);
              redirect('cart/');

       }
       

     /*   public function addToCart($proID){

          print_r($proID);
        
        
        // Fetch specific product by ID
        $product = $this->Product->getRows($proID);
        print_r($product);
        
        // Add product to the cart
        $data = array(
            'id'    => $tours['id'],
            'qty'    => 1,
            'price'    => $tours['price'],
            'name'    => $tours['name'],
            'image' => $tours['image']
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        redirect('cart/');
    }*/

        public function bookings()
        {

           // print_r($_GET);
                

         $order=$this->Product->getBookings();
        // print_r($tours);
         $data['orders']=$order;
   
          
         $this->load->view('admin/booking',$data);
        }


          public function delete($id)
        {
        $this->Product->deleteTours($id);
        $this->session->set_flashdata('success','Booking Removed successfully');
        redirect('packages/bookings');
        }

        public function uploadimages()
        {
        
          $this->load->view('admin/gallery');
        }



}