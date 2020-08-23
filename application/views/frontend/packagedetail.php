<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tour Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

  </head>

  <body style="background-image: url('../assets/frontend/img/banner/common-banner.jpg');">
    
    <div class="container" style="margin-top: 30px">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        
                        <div class="preview-pic tab-content">
                          <div class="tab-pane active" id="pic-1"><img style="width:450px;height: 200px" src="<?php echo base_url('public/uploads/tours/'.$tours['image'])?>" /></div>
                          
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                         
                        </ul>
                        
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title"><strong><?php echo $tours["title"]?></strong></h3>
                       
                        <p class="product-description"><?php echo $tours["description"]?></p>
                         <p class="product-description"><?php echo $tours["date"]?></p>
                          <p class="product-description"><?php echo $tours["month"]?></p>
                          <p class="product-description"><?php echo $tours["day_nights"]?></p>
                        <h4 class="price">Price: <span><?php echo $tours["price"]?></span></h4>
                       
                        
                        <div class="action">
                           <a href="<?php echo base_url('packages/add/'.$tours['id']); ?>"><button  class="add-to-cart btn btn-default" type="button">Book now</button></a> 
                            <button class="btn btn-primary" type="button"><span class="fa fa-heart"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
