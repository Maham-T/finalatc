<?php 
class Login extends CI_Controller
{
     public function index()
     

     	{  //echo password_hash('admin',PASSWORD_DEFAULT);
         $this->load->view('admin/login');
     	}



       public function authenticate()
    
     	{
           $this->load->model('Admin_model');
            $this->form_validation->set_error_delimiters('<p class="invalid-feedback"','</p>');
           $this->form_validation->set_rules('username','Username','trim|required');
          $this->form_validation->set_rules('password','Password','trim|required');
         

          if ($this->form_validation->run() == true) 
            	{
            	# codee$c...
                $username=$this->input->post('username');
                $admin=$this->Admin_model->getByUsername($username);
                if (!empty($admin)) {
                  # code...
                   $password=$this->input->post('password');
                   if (password_verify($password, $admin['password']) == true) {
                     # code...

                    $adminArray['admin_id']= $admin['id'];
                     $adminArray['username']= $admin['username'];
                     $this->session->set_userdata('admin',$adminArray);
                     redirect(base_url().'admin/home');
                   }
                    else  {
                       $this->session->set_flashdata('msg','Either username or password is incorrect');
                  redirect(base_url().'admin/login');
                    }
                }
                else{
                  $this->session->set_flashdata('msg','Either username or password is incorrect');
                  redirect(base_url().'admin/login');
                  $this->session->set_userdata('admin',$adminArray);
                  redirect(base_url().'admin/home');
                }
            	}
        else
            	{
                    
                  $this->load->view('admin/login');
           }
    
     }
   public function logout()
   {
    $this->session->unset_userdata('admin');
    redirect(base_url().'admin/login');
   }
}
 