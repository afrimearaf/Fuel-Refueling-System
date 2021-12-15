<?php 

if(isset($_POST['checkboxarray'])) {
    
    foreach($_POST['checkboxarray'] as $ordervalueid) {
        
        $bulkoption =  $_POST['bulkoption'];
        
        switch ($bulkoption) {
            case 'delivered': 
                $query = "UPDATE orders SET order_status = '{$bulkoption}' WHERE order_id = {$ordervalueid} ";
                $approve_order_query = mysqli_query($connection, $query);
                
                break;
                
            case 'undelivered': 
                $query = "UPDATE orders SET order_status = '{$bulkoption}' WHERE order_id = {$ordervalueid} ";
                $unapprove_order_query = mysqli_query($connection, $query);
                
                break;   
                
            case 'delete': 
                $query="DELETE FROM orders WHERE order_id = {$ordervalueid} ";
                $delete_order_query= mysqli_query($connection,$query);
                
                break;       
        }
    }
}


?>
 

 <form action="" method="post">
  <table class="table table-bordered">
   
         <div id="bulkOptionsContainerorder" class="col-xs-4"  style="padding: 0px;">
           
            <select name="bulkoption" id="" class="form-control" >
                <option value="">Select Options</option>
                <option value="undelivered">Unapprove</option>
                <option value="delivered">Approve</option>
                <option value="delete">Delete</option>
            </select>
      
       </div>
       <div class="col-xs-4">

           <input type="submit" name="submit" value="Apply" class="btn btn-success">
       </div>
    <thead class="thead-dark">
        <tr>
            <th>Select</th>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>In Response to</th>
            <th>Quantity</th>
            <th>Address</th>
            <th>Delivery Date</th>
            <th>Name on Card</th>
            <th>Credit card number</th>
            <th>Exp Date</th>
            <th>Order Status</th>
            <th>Approve</th>
            <th>Unapprove</th>
            <th>Delete Order</th>
        </tr>
    </thead>
    <tbody>
                           
                           
                            
<?php
                               
                            
    $query= "SELECT * FROM orders";
    $select_orders= mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_assoc($select_orders)){
        
        $order_id=$row['order_id'];  
        $customer_name=$row['customer_name'];
        $customer_email=$row['customer_email'];
        $order_fuel_id=$row['order_fuel_id'];
        $quantity=$row['quantity'];
        $address=$row['address'];
        $card_name= $row['card_name'];
        $card_number= $row['card_number'];
        $exp_date= $row['exp_date'];
        $order_status=$row['order_status'];
        $delivery_date=$row['delivery_date'];
        
        
        echo "<tr>";
        
         ?>
        
        <td><input type="checkbox" class="checkboxes" name="checkboxarray[]" value="<?php echo $order_id ?>"></td>
        
        <?php
        
        echo "<td>$order_id</td>";
        echo "<td>$customer_name</td>";
        echo "<td>$customer_email</td>";
        
        
//        $query= "select * from category WHERE cat_id={$post_category_id}";
//        $select_categories_id= mysqli_query($connection,$query);
//                                        
//        while($row=mysqli_fetch_assoc($select_categories_id)){
//            $cat_id=$row['cat_id'];
//            $cat_title=$row['cat_title'];
//                                        
//            echo "<td>$cat_title</td>";
//        }
        
        
        
        
        
        $query="SELECT * FROM  fuel WHERE fuel_id= $order_fuel_id";
        $select_fuel_order_id= mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($select_fuel_order_id)){
            $fuel_id=$row['fuel_id'];
            $fuel_name=$row['fuel_name'];
            
            echo "<td><a href='../fuel.php?f_id=$fuel_id'>$fuel_name</a></td>";
        }
        
        
        
        echo "<td>$quantity</td>";
        echo "<td>$address</td>";
        echo "<td>$delivery_date</td>";
        echo "<td>$card_name</td>";
        echo "<td>$card_number</td>";
        echo "<td>$exp_date</td>";
        echo "<td>$order_status</td>";
        echo "<td><a href='orders.php?approve=$order_id'>Approve</a> </td>";
        echo "<td><a href='orders.php?unapprove=$order_id'>Unapprove</a> </td>";
        echo "<td><a href='orders.php?delete=$order_id'>Delete</a> </td>";
        echo "</tr>";
    }
 ?>
                               
                              
                               
                               
                               
    </tbody>
</table>
</form>
<?php


if(isset($_GET['approve'])){
    $the_order_id=$_GET['approve'];
    
    $query="UPDATE orders SET order_status='delivered' WHERE order_id= {$the_order_id} ";
    $approve_order_query= mysqli_query($connection,$query);
    header("Location:  orders.php");
}

if(isset($_GET['unapprove'])){
    $the_order_id=$_GET['unapprove'];
    
    $query="UPDATE orders SET order_status='undelivered' WHERE order_id= {$the_order_id} ";
    $unapprove_order_query= mysqli_query($connection,$query);
    header("Location:  orders.php");
}



if(isset($_GET['delete'])){
    $the_order_id=$_GET['delete'];
    
    $query="DELETE FROM orders WHERE order_id= {$the_order_id}";
    $delete_query= mysqli_query($connection,$query);
    header("Location:  orders.php");
}
                                                        
                            
                            
                           
?>