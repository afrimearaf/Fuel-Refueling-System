<?php include "includes/db.php"?>
<?php include "includes/header.php"?>

    <!-- Navigation -->
<?php include "includes/navigation.php"?>
    <div class="container">
           <div class="aa">
            <div class="col-md-8">
                <h1 class="page-header">Fuel
                <small>and </small>Lubricants
                </h1>
                
                
                
                
    <?php
    
    if(isset($_GET['f_id'])){
        $the_fuel_id=$_GET['f_id'];
    }
    
                    $query= "SELECT * FROM fuel WHERE fuel_id = $the_fuel_id";
                    $select_all_fuel_query= mysqli_query($connection,$query);
                    
                    while($row=mysqli_fetch_assoc($select_all_fuel_query)){
                        $fuel_id=$row['fuel_id'];
                        $fuel_name=$row['fuel_name'];
                        $fuel_company=$row['fuel_company'];
                        $fuel_image=$row['fuel_image'];
                        $fuel_unit_price=$row['fuel_unit_price'];
                        $fuel_image=$row['fuel_image'];
                        $fuel_details=$row['fuel_details'];            
    ?>
                  

            

                <!-- First Feul -->
                <h2>
                    <a href="fuel.php?f_id=<?php echo $fuel_id; ?>" ><?php echo $fuel_name ?></a>
                </h2>
                <p class="lead">
                    by <a href="#"><?php echo $fuel_company ?></a>
                </p>
                <p><span class="glyphicon glyphicon-usd"></span> <?php echo $fuel_unit_price ?></p>
                <hr>
                <img class="img-responsive" src="img/<?php echo $fuel_image; ?>" alt="">
                <hr>
                <p><?php echo $fuel_details ?></p>

                <hr>

                 <?php } ?>
                  <!-- Order -->
                  
              <?php
                if(isset($_POST['create_order'])){
                    
                    $the_fuel_id=$_GET['f_id'];
                    $customer_name= $_POST['customer_name'];
                    $customer_email= $_POST['customer_email'];
                    $quantity= $_POST['quantity'];
                    $address= $_POST['address'];
                    $card_name= $_POST['card_name'];
                    $card_number= $_POST['card_number'];
                    $exp_date= $_POST['exp_date'];

                    
                    $query="INSERT INTO orders(order_fuel_id, customer_name, customer_email, quantity, address, order_status, delivery_date, card_name, card_number, exp_date) VALUES ($the_fuel_id, '$customer_name', '$customer_email', '$quantity', '$address','undelivered', now(), '$card_name', $card_number, '$exp_date')";
                    $create_order_query= mysqli_query($connection,$query);
                    
                    if(!$create_order_query){
                        die("Query Failed". mysqli_error($connection));
                    }
                    
                    $query= "UPDATE fuel SET fuel_order_count = fuel_order_count+1 WHERE fuel_id = $the_fuel_id";
                    
                    $update_order_count= mysqli_query($connection,$query);
                    
                    
                }
                
                ?>

                <!-- Orders Form -->
                <div class="well">
                    <h3 style="text-align: center;">Order Fuel</h3>
                    <form action="" method="post" role="form">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 > Billing Address</h4>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" class="form-control" id="fname" name="customer_name" placeholder="John M. Doe" style="margin-bottom: 20px; width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 3px;">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" class="form-control" id="email" name="customer_email" placeholder="john@example.com" style="margin-bottom: 20px; width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 3px;">
                                <label for="adr"><i class="fas fa-address-card"></i> Address</label>
                                <input type="text" class="form-control" id="adr" name="address" placeholder="542 W. 15th Street" style="margin-bottom: 20px; width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 3px;">
                                <label for="city" style=""><i class="fa fa-filter"></i> Quanity</label>
                                <input type="text" class="form-control" id="city" name="quantity" placeholder="100 liter" style="margin-bottom: 20px; width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 3px;">

                            </div>

                            <div class="col-sm-6">
                                <h4 >Payment</h4>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container" style="margin-bottom: 4px; padding: 8px 0;  font-size: 24px;">
                                    <i class="fab fa-cc-visa" style="color:navy;"></i>
                                    <i class="fab fa-cc-amex" style="color:blue;"></i>
                                    <i class="fab fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fab fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname"><i class="fa fa-id-badge"></i> Name on Card</label>
                                <input type="text" class="form-control" id="cname" name="card_name" placeholder="John More Doe" style="margin-bottom: 20px; width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 3px;">
                                <label for="ccnum"><i class="fa fa-credit-card"></i> Credit card number</label>
                                <input type="text" class="form-control" id="ccnum" name="card_number" placeholder="1111-2222-3333-4444" style="margin-bottom: 20px; width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 3px;">
                                <label for="expmonth"><i class="fas fa-calendar-check"></i> Exp Date</label>
                                <input type="date" class="form-control" id="expmonth" name="exp_date" placeholder="September" style="margin-bottom: 20px; width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 3px;">
                            </div>
                        </div>
                        <button type="submit" name="create_order" class="btn btn-success" style="padding: 8px 32px; margin-top: 12px;">Order Now</button>
                    </form>
                </div>

                <hr>

                <!-- Delivered Orders -->
                
                <?php
                $query="SELECT * FROM orders WHERE order_fuel_id={$the_fuel_id} AND order_status='delivered' ORDER BY order_id DESC";
                $select_order_query= mysqli_query($connection,$query);
                if(!$select_order_query){
                    die("Query Failed". mysqli_error($connection));
                }
                while($row=mysqli_fetch_assoc($select_order_query)){
                    $customer_name=$row['customer_name'];
                    $delivery_date=$row['delivery_date'];
                    $address=$row['address'];
                    $quantity=$row['quantity'];
                    
                    
                ?>
                
                
                 <div class="media">
                   
                   
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placeimg.com/60/60/people" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $customer_name; ?>
                            <small><?php echo $delivery_date; ?></small>
                        </h4>
                        <?php echo $quantity . " at the location: " . $address; ?>
                    </div>
                </div>
                
                
                
                
                <?php } ?>
                
                
               
               

               </div>


            </div>

            <!--  Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"?>

        </div>
        

        <hr>

   
<?php include "includes/footer.php"?>