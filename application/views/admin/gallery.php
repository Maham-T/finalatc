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
              <li class="breadcrumb-item active">Create</li>
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
            <div class="card card-primary">
           <div class="card-header">
             <div class="card-title">
             Add Images
             </div>
           </div>
           <div class="card-body">
             <form enctype="multipart/form-data" name="createForm" id="createForm" method="post" action="<?php echo base_url().'packages/uploadimages'?>">
              

               
                <div class="form-group">
                 <label>Image</label><br>
                 <input type="file" name="image" id="image" value='upload' class="<?php echo (!empty($error))  ? 'is-invalid' : ''; ?>" >
                 <?php echo form_error('image')?>
                <?php 
                   if(!empty($error))
                    echo $error;
                 ?> 

               </div>

             

               <br>
               <br>
               


                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-primary"> Add</button>
                   <a href="<?php echo base_url().'admin/tours'?>" class="btn btn-secondary"> Back</a>
                </div>
             </form>
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