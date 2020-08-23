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
              <li class="breadcrumb-item active">Edit</li>
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
             Update Tour    "<?php echo $tour['title']?>"
             </div>
           </div>
           <div class="card-body">
             <form enctype="multipart/form-data" name="createForm" id="createForm" method="post" action="<?php echo base_url().'admin/tours/edit/'.$tour['id']?>">
              

               <div class="form-group">
                 <label>Title</label>
                 <input type="text" value="<?php echo set_value('title',$tour['title']); ?>" name="title" id="title"  class="form-control <?php echo (form_error('title') != "" ) ? 'is-invalid' : ''; ?>  ">
                  <?php echo form_error('title')?>
               </div>
              
                <div class="form-group">
                 <label>Description</label>
                 <textarea name="description" id="description"
                  class="textarea"    ><?php echo set_value('description',$tour['description']); ?></textarea> 
                
                    <?php echo form_error('description')?>


               </div>
                <div class="form-group">
                 <label>Image</label><br>
                 <input type="file" name="image" id="image" value='upload' class="<?php echo (!empty($error))  ? 'is-invalid' : ''; ?>" >
                  <?php if($tour['image']) { ?>
                    
                   <br><br>
                  <img src="<?php echo base_url('public/uploads/tours/'.$tour['image']);?> " width="150" >

                  
                  <?php }
                  ?>


                 <?php echo form_error('image')?>
                <?php 
                   if(!empty($error))
                    echo $error;
                 ?> 

               </div>


                <div class="form-group">
                 <label>Price</label>
                 <input type="text" value="<?php echo set_value('price',$tour['price']); ?>" name="price" id="price"  class="form-control <?php echo (form_error('price') != "" ) ? 'is-invalid' : ''; ?>  ">
                  <?php echo form_error('price')?>
               </div>

                <div class="custom-control custom-radio float-left" >
                <input class="custom-control-input" type="radio" value="1" id="statusActive" name="status" 
                <?php echo ($tour['status'] == 1) ? 'checked' : '' ;?>>
                <label for="statusActive" class="custom-control-label">Active</label>
                  
                </div>
                 
                  <div class="custom-control custom-radio float-left ml-3"
                >
                <input class="custom-control-input" type="radio" value="0" id="statusBlock" name="status"  <?php
                echo ($tour['status'] == 0) ? 'checked' : '' ; ?>> 
                <label for="statusBlock" class="custom-control-label">Block</label>
                  
                </div>



               <br>
               <br>
               


                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-primary"> Update</button>
                   <a href="<?php echo base_url().'admin/tours/'?>" class="btn btn-secondary"> Back</a>
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