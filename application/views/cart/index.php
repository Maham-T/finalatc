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



<script src="<?php echo base_url('assets/frontend/js/jquery-3.2.1.min.js'); ?>"></script>


<script>
// Update item quantity
function updateCartItem(obj, rowid){
    $.get("<?php echo base_url('cart/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
        if(resp == 'ok'){
            location.reload();
        }else{
            alert('Cart update failed, please try again.');
        }
    });
}
</script>


<body style="background-image: url('../assets/frontend/img/banner/common-banner.jpg');">
   <h3 style="margin-top: 30px ; margin-left: 60px"><strong>Your Current Bookings    </strong> </h3>

<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12" style="margin-top: 30px ; margin-left: 20px">


           
                 
            <div class="card"> 
              <div class="card-body">
                <table class="table"  >
                  <tr>
                    
                    <th width="100" >Image</th> 
                     <th width="150">Title</th>
                       <th width="200">Price</th>
                      <th width="150">Per Person</th>
                      <th width="150">Per Person</th>
                       <th width="300" class="text-ceter">Action</th>
                  </tr>
                  <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>
                       
                    <tr>
                    
                    
                    <td>
                         
                   <?php $imageURL = !empty($item["image"])?base_url('public/uploads/tours/'.$item["image"]):base_url('assets/imag/pro-demo-img.jpeg'); ?>
            <img src="<?php echo $imageURL; ?>" width="50"/>
                         
                     
                   </td>
                    
                    <td><?php echo $item["name"]?></td>
                    <td><?php echo 'Rs '.$item["price"];?></td>
                    <td>
                     <input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')">
                    </td>
                    <td>
                    <?php echo 'Rs '.$item["subtotal"]; ?>
                    </td>
                    <td>
                        <a class="btn btn-primary btn sm" onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('cart/removeItem/'.$item["rowid"]); ?>':false;">Delete</a>

                    </td>
                  </tr>

                        <?php } }else{ ?>
    <tr><td colspan="6"><p>No Tour Package Selected.....</p></td>
    <?php } ?>
    <?php if($this->cart->total_items() > 0){ ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td><strong>Cart Total</strong></td>
        <td ><strong><?php echo 'Rs'.$this->cart->total(); ?></strong></td>
        <td></td>
                </tr>
                   <?php } ?>

           </table>
            </tr>
</div>

<div class="col mb-4">
    <div class=row>
        <div class="col-sm-12 col-md-6">
            <a href="<?php echo base_url('packages') ;?>" class="btn btn-success btn-light">Back</a>
    </div>

     <div class="col-sm-12 col-md-6 text right">
    <?php if ($this->cart->total_items()>0) {?>
       <a href="<?php echo base_url('checkout/') ;?>" class="btn btn-danger btn sm">Checkout</a>
   <?php }
    ?>
           
    </div>
    





</div>
                 
               


                </table>

               
               
              </div>
              </div>
            </div>

           
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>





































</body>

</html>
