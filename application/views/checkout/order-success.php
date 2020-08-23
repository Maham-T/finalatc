<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../assets/frontend/img/favicon1.png" type="image/png">
    <title>Travia Travel</title>
    <!-- Bootstrap CSS -->
    
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body style="background-image: url('../assets/frontend/img/banner/common-banner.jpg');"  >



<h3 style="margin-left: 100px ">Order Status</h3>
<?php if(!empty($order)){ ?>
    <div class="col-md-12">
        <div  style="margin-left: 100px" class="alert alert-success">Your order has been placed successfully.</div>
    </div>
	
    <!-- Order status & shipping info -->
    <div style="margin-left: 100px" class="row col-lg-12 ord-addr-info">
        <div class="hdr">Order Info</div>
        <p><b>Reference ID:</b> #<?php echo $order['id']; ?></p>
        <p><b>Total:</b> <?php echo '$'.$order['grand_total'].' USD'; ?></p>
        <p><b>Placed On:</b> <?php echo $order['created']; ?></p>
        <p><b>Customer:</b> <?php echo $order['name']; ?></p>
        <p><b>Email:</b> <?php echo $order['email']; ?></p>
        <p><b>Phone:</b> <?php echo $order['phone']; ?></p>
    </div>
	
    <!-- Order items -->
    <div style="margin-left: 100px" class="row col-lg-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th>Tours</th>
                    <th>Price</th>
                    <th>Person</th>
                    <th>Sub Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(!empty($order['items'])){  
                    foreach($order['items'] as $item){ 
                ?>
                <tr>
                    <td>
                        <?php $imageURL = !empty($item["image"])?base_url('public/uploads/tours/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                        <img src="<?php echo $imageURL; ?>" width="75"/>
                    </td>
                    <td><?php echo $item["title"]; ?></td>
                    <td><?php echo 'Rs'.$item["price"]; ?></td>
                    <td><?php echo $item["quantity"]; ?></td>
                    <td><?php echo 'Rs'.$item["sub_total"]; ?></td>
                </tr>
                <?php } 
                } ?>
            </tbody>
        </table>
    </div>
<?php } else{ ?>
<div class="col-md-12">
    <div class="alert alert-danger">Your order submission failed.</div>
</div>
<?php } ?>
  <div style="margin-left: 900px" class="col-md-2 ">
  <a href="<?php echo base_url('home/'); ?>" class="btn btn-success">Go Back</a>
  

        </div>
        
       



</body>
</html>
