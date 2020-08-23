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
             Create New Tour
             </div>
           </div>
           <div class="card-body">
             <form enctype="multipart/form-data" name="createForm" id="createForm" method="post" action="<?php echo base_url().'admin/tours/create'?>">
              

               <div class="form-group">
                 <label>Title</label>
                 <input type="text" value="<?php echo set_value('title'); ?>" name="title" id="title"  class="form-control <?php echo (form_error('title') != "" ) ? 'is-invalid' : ''; ?>  ">
                  <?php echo form_error('title')?>
               </div>
              
                <div class="form-group">
                 <label>Description</label>
                 <textarea name="description" id="description"
                  class="textarea"    ><?php echo set_value('description'); ?></textarea> 
                
                    <?php echo form_error('description')?>


               </div>
                <div class="form-group">
                 <label>Image</label><br>
                 <input type="file" name="image" id="image" value='upload' class="<?php echo (!empty($error))  ? 'is-invalid' : ''; ?>" >
                 <?php echo form_error('image')?>
                <?php 
                   if(!empty($error))
                    echo $error;
                 ?> 

               </div>

               <div class="form-group">
                 <label>Days and Nights</label>
                 <input type="text" value="<?php echo set_value('day_nights'); ?>" name="day_nights" id="day_nights"  class="form-control <?php echo (form_error('day_nights') != "" ) ? 'is-invalid' : ''; ?>  ">
                  <?php echo form_error('day_nights')?>
               </div>

               <div class="form-group">
                 <label>Day</label>
                 <input type="text" value="<?php echo set_value('date'); ?>" name="date" id="date"  class="form-control <?php echo (form_error('date') != "" ) ? 'is-invalid' : ''; ?>  ">
                  <?php echo form_error('date')?>
               </div>

               <div class="form-group">
                 <label>Month</label>
                 <input type="text" value="<?php echo set_value('month'); ?>" name="month" id="month"  class="form-control <?php echo (form_error('month') != "" ) ? 'is-invalid' : ''; ?>  ">
                  <?php echo form_error('month')?>
               </div>

               <div class="form-group">
                 <label>Price</label>
                 <input type="text" value="<?php echo set_value('price'); ?>" name="price" id="price"  class="form-control <?php echo (form_error('price') != "" ) ? 'is-invalid' : ''; ?>  ">
                  <?php echo form_error('price')?>
               </div>

                <div class="custom-control custom-radio float-left"
                >
                <input class="custom-control-input" type="radio" value="1" id="statusActive" name="status" checked="">
                <label for="statusActive" class="custom-control-label">Active</label>
                  
                </div>
                 
                  <div class="custom-control custom-radio float-left ml-3"
                >
                <input class="custom-control-input" type="radio" value="0" id="statusBlock" name="status" >
                <label for="statusBlock" class="custom-control-label">Block</label>
                  
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