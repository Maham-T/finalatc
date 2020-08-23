<?php $this->load->view('admin/header') ?>
    <!-- /.content-header -->
 <!-- Content Wrapper. Contains page content -->



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Bookings</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>

             
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <?php
              if(!empty ($this->session->flashdata('success'))) { ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success');
               ?> </div> <?php } ?>

                <?php
              if(!empty ($this->session->flashdata('error'))) { ?>
                <div class="alert alert-danger"><?php echo $this->session->flashdata('error');
               ?> </div> <?php } ?>
                
            <div class="card">


          
           
               
              <div class="card-body">
                <table class="table"  >
                  <tr>
                    <th>#</th>
                    <th width="200" >Customer_id</th> 
                     <th width="200">Grand_Total</th>
                     
                       <th width="200" class="text-ceter">Action</th>
                  </tr>
                  <?php if (!empty($orders)) {



                     foreach ($orders as $t) {?>
                       
                             <tr>
                    <td><?php echo $t["id"]?></td>
                    
                    
                    
                    <td><?php echo $t["customer_id"]?></td>
                    <td><?php echo $t["grand_total"]?></td>
                    <td>
                     
                      
                    </td>
                    <td>
                      
                      <a class="btn btn-danger btn sm" href="<?php echo base_url('packages/delete/'.$t['id']) ;?>"><i class="far fa-trash-alt"></i></a>
                    </td>
                  </tr>

                       <?php
                     }
                       }

                    else  { ?>
                 
                  
                    <tr>
                      <td colspan="4"> Records not found</td>
                    </tr>
                    <?php

                  } ?>
                 
                </table>

               
               
              </div>
              </div>
            </div>

           
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>

  <!-- /.control-sidebar -->
<?php $this->load->view('admin/footer') ?>