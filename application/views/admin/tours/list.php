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
              <li class="breadcrumb-item"><a href="#">Tours</a></li>
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


           <div class="card-header">
             <div class="card-title">
              <form id="searchForm" name="searchForm" method="get" action="<?php echo base_url('admin/tours/index')?>" >
              <div class="input-group mb-0">
              <input type="text" class="form-control" placeholder="search" name="q" value="<?php if($this->input->get('q')) echo $this->input->get('q');?>">
              <div class="input-group-append">
                <button class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></button>
              </div>
              </div>
              </form>
             </div>
           <div
           class="card-tools">
             <a href="<?php echo base_url().'admin/tours/create';?>" class="btn btn-primary"><i class="fas fa-plus"></i>Create</a>
           </div>


           </div>
           <?php
           if($this->input->get('q')) { ?>


            <b>Search Result For "<?php echo $this->input->get('q');?>"</b>



            <?php
             }
            ?>
               
              <div class="card-body">
                <table class="table"  >
                  <tr>
                    <th>#</th>
                    <th width="100" >Image</th> 
                     <th width="150">Title</th>
                       <th width="200">Price</th>
                      <th>Status</th>
                      <th width="150">Created</th>
                       <th width="300" class="text-ceter">Action</th>
                  </tr>
                  <?php if (!empty($tours)) {



                     foreach ($tours as $t) {?>
                       
                             <tr>
                    <td><?php echo $t["id"]?></td>
                    
                    <td>
                    
                   
                    
                         
                    <img class="w-100" src="<?php echo base_url('public/uploads/tours/'.$t['image'])?>" alt="image">
                         
                     
                   </td>
                    
                    <td><?php echo $t["title"]?></td>
                    <td><?php echo $t["price"]?></td>
                    <td>
                      <?php 
                      if($t["status"] == 1) { ?>
                       <p class="badge badge-success">Active</p>
                     <?php }
                     else { ?>
                       <p class="badge badge-danger">Block</p>
                    <?php  }
                    ?>
                      <td><?php echo date('Y-m-d',strtotime($t["created_at"]))?></td>
                    </td>
                    <td>
                      <a class="btn btn-primary btn sm" href="<?php echo base_url('admin/tours/edit/'.$t['id']) ;?>"><i class="fas fa-edit"></i></a>
                      <a class="btn btn-danger btn sm" href="<?php echo base_url('admin/tours/delete/'.$t['id']) ;?>"><i class="far fa-trash-alt"></i></a>
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

                <?php echo $this->pagination->create_links();?>
               
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