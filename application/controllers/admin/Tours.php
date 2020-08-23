<?php 
class Tours extends CI_Controller
{


     public function __construct()
     {
         parent::__construct();
         $this->load->model('Tours_model');
         $admin=$this->session->userdata('admin');
         if (empty($admin)) {
            # code...
            $this->session->set_flashdata('msg','Please Sign In To get access');
            redirect(base_url().'admin/login');
         }

        
     }
     

     public function index($offset=0)
        {

           // print_r($_GET);
             $this->load->library('pagination');


                $config['first_link'] ='First';
                $config['last_link'] = 'Last';
                $config['full_tag_open'] = "<ul class='pagination'>";
                $config['full_tag_close'] = "</ul>";
                $config['num_tag_open'] = '<li class="page-item">';
                $config['num_tag_close'] = '</li>';
                $config['cur_tag_open'] = "<li class='disabled page-item'><li class='active page-item'>
                <a href='#'  class=\"page-link\">";
                $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
                $config['prev_tag_open'] = '<li class="\page-item\">';
                $config['prev_tag_close'] = '</li>';
                $config['first_tag_open'] = '<li class="\page-item\">';
                $config['first_tag1_close'] = '</li>';
                $config['last_tag_open'] = '<li class="\page-item\">';
                $config['last_tag1_close'] = '</li>';

                $config['next_link'] = 'Next';
                $config['next_tag_open'] = '<li class="\page-item\">';
                $config['next_tag1_close'] = '</li>';

                $config['prev_link'] = 'Prev';
                $config['prev_tag_open'] = '<li class="\page-item\">';
                $config['prev_tag1_close'] = '</li>';
                $config['attributes'] = array('class' => 'page-link');




             $config['base_url'] = base_url('admin/tours/index');
             $config['total_rows'] = $this->Tours_model->getToursCount();
             $config['per_page'] = 3;
              $config['reuse_query_string'] = TRUE;
             $this->pagination->initialize($config);
           
           

         $tours=$this->Tours_model->getTours($config['per_page'],$offset);
        // print_r($tours);
         $data['tours']=$tours;
   
          
         $this->load->view('admin/tours/list',$data);
        }


        public function create()
        {
             

        // $this->load->helper('common_helper');
    
         $this->form_validation->set_rules('title', 'Title', 'trim|required');
          $this->form_validation->set_rules('day_nights', 'Days Nights', 'trim|required');
           $this->form_validation->set_rules('date', 'Date', 'trim|required');
            $this->form_validation->set_rules('month', 'Month', 'trim|required');
         $this->form_validation->set_rules('price', 'Price', 'trim|required');
         $this->form_validation->set_rules('description', 'Description', 'required');
        if (empty($_FILES['image']['name']))
         {
            $this->form_validation->set_rules('image', 'Image', 'required');
         }
         
                $config['upload_path']    = APPPATH.'../public/uploads/tours/';
                $config['allowed_types']  = 'gif|jpg|png';
                $config['encrypt_name']   = true;
              
                $this->upload->initialize($config);

         if ($this->form_validation->run() == true) {
             # code...
             if ( ! $this->upload->do_upload('image'))
                {   

                   
                    
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/tours/create', $error);
                }
                else
                {
                       

                       $data=$this->upload->data();
                      // print_r($data);


                    //   resizeImage( $config['upload_path']. $data['file_name'],$config['upload_path'].'thumb_front/'. $data['file_name'],1120,800);
                    //   resizeImage( $config['upload_path']. $data['file_name'],$config['upload_path'].'thumb_admin/'. $data['file_name'],300,250);
                    
                       // $data = array('image' => $this->upload->data());

                       // $this->load->view('admin/tours/create', $data);
                        $formArray['image'] = $data['file_name'];
                        $formArray['title'] = $this->input->post('title');
                         $formArray['day_nights'] = $this->input->post('day_nights');
                          $formArray['date'] = $this->input->post('date');
                           $formArray['month'] = $this->input->post('month');
                        $formArray['price'] = $this->input->post('price');
                        $formArray['description'] = $this->input->post('description');
                        $formArray['status'] = $this->input->post('status');
                        $formArray['created_at'] = date('Y-m-d H-i-s');
                 # code...
                        $this->Tours_model->addTours($formArray);
                       $this->session->set_flashdata('success', 'Tour Added Successfully');
                        redirect(base_url().'admin/tours/index');
                }
         }
          else
          {
         $this->load->view('admin/tours/create');
          }

}

        // $this->load->view('admin/tours/create');
         /* $this->load->model('Tours_model');

        $config['upload_path']='./public/uploads/tours/';
        $config['allowed_types']='gif|png|jpg|jpeg';
        $config['encrypt_name']=true;
        $this->load->library('upload',$config);


        $this->form_validation->set_error_delimiters('<p class="invalid-feedback"','</p>');
         $this->form_validation->set_rules('title','Title','trim|required');
      $this->form_validation->set_rules('image','Image','required');

        if ($this->form_validation->run() == true) {
             # code...
             if (!empty($_FILES['image']['name'])) {
                 if ($this->upload->do_upload('image')) {
                     # code...
                 } 

                 else
                 {
                    $errors = $this->upload->display_errors();
                    $data['imageError']=$errors;
                    $this->load->view('admin/tours/create',$data);
                 }




                $formArray['title'] = $this->input->post('title');
                $formArray['description'] = $this->input->post('description');
                  $formArray['status'] = $this->input->post('status');
                $formArray['created_at'] = date('Y-m-d H-i-s');
                 # code...
                $this->Tours_model->addTours($formArray);
             }


         }
         else
         {
             $this->load->view('admin/tours/create');
         }
         



        }*/
      
           




         

        public function edit($id)
        {
           
         
         $tour=$this->Tours_model->getTour($id);
         if(empty($tour))
         {
            $this->session->set_flashdata('error','Article not found');
            redirect('admin/tours/index');    
         }
          $data['tour']=$tour;


       //  $this->load->helper('common_helper');
    
         $this->form_validation->set_rules('title', 'Title', 'trim|required');
         $this->form_validation->set_rules('price', 'Price', 'trim|required');
         $this->form_validation->set_rules('description', 'Description', 'required');
        if (empty($_FILES['image']['name']))
         {
            $this->form_validation->set_rules('image', 'Image', 'required');
         }
         
                $config['upload_path']    = APPPATH.'../public/uploads/tours/';
                $config['allowed_types']  = 'gif|jpg|png';
                $config['encrypt_name']   = true;
              
                $this->upload->initialize($config);

         if ($this->form_validation->run() == true) {
             # code...
             if ( $this->upload->do_upload('image'))
                
                {
                       

                       $data=$this->upload->data();
                      // print_r($data);


                     //  resizeImage( $config['upload_path']. $data['file_name'],$config['upload_path'].'thumb_front/'. $data['file_name'],1120,800);
                     //  resizeImage( $config['upload_path']. $data['file_name'],$config['upload_path'].'thumb_admin/'. $data['file_name'],300,250);
                    
                       // $data = array('image' => $this->upload->data());

                       // $this->load->view('admin/tours/create', $data);
                        $formArray['image'] = $data['file_name'];
                        $formArray['title'] = $this->input->post('title');
                         $formArray['price'] = $this->input->post('price');
                        $formArray['description'] = $this->input->post('description');
                        $formArray['status'] = $this->input->post('status');
                        $formArray['updated_at'] = date('Y-m-d H-i-s');
                 # code...
                        $this->Tours_model->updateTours($id,$formArray);
                       $this->session->set_flashdata('success', 'Tour updated Successfully');
                        redirect(base_url().'admin/tours/index');
                }
         }
          else
          {
        $this->load->view('admin/tours/edit',$data);
          }
            }
      public function delete($id)
        {
        $this->Tours_model->deleteTours($id);
        $this->session->set_flashdata('success','Tour deleted successfully');
        redirect('admin/tours');
        }



   }