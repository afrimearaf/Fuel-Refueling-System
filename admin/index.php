<?php include "includes/admin_header.php" ?>
       <div id="wrapper">
       <?php include "includes/admin_navigation.php" ?>
       <?php
    if(isset($_SESSION['user_name'])){
        $username = $_SESSION['user_name'];
        
        $query= "SELECT * FROM users WHERE user_name = '{$username}' ";
        $select_profile= mysqli_query($connection,$query);
        
        while($row=mysqli_fetch_array($select_profile)){
        
            $user_id=$row['user_id'];  
            $user_name=$row['user_name'];
            $user_password=$row['user_password'];
            $user_firstname=$row['user_firstname'];
            $user_lastname=$row['user_lastname'];
            $user_email=$row['user_email'];
            $user_image=$row['user_image'];
            $user_role=$row['user_role'];
        }
    }
?>

<div class="frame">
   <div class="probox">
     <div class="promain">

       <div class="picture">
         <div class="circle1"></div>
         <div class="circle2"></div>
         <img class="pic" src="../img/<?php echo $user_image; ?>" alt="">
       </div>

       <p class="name"><?php echo $user_name; ?></p>
       <p class="role"><?php echo $user_role; ?></p>
       <p class="email"><?php echo $user_email; ?></p>
      
       <a class="bt" href="profile.php">Profile</a>
      
     </div>
<?php
    $query= "SELECT * FROM fuel";
    $select_all_fuel= mysqli_query($connection,$query);
    $fuel_count = mysqli_num_rows($select_all_fuel);
       
       
    $query= "SELECT * FROM orders";
    $select_all_order= mysqli_query($connection,$query);
    $order_count = mysqli_num_rows($select_all_order);
       
       
    $query= "SELECT * FROM users";
    $select_all_user= mysqli_query($connection,$query);
    $user_count = mysqli_num_rows($select_all_user);
                                        
?>
     <div class="fuels"> <?php echo $fuel_count; ?><p class="small">Fuels</p>
     </div>

     <div class="orders"><?php echo $order_count; ?> <p class="small">Orders</p>
     </div>

     <div class="users"> <?php echo $user_count ?><p class="small">Users</p>
     </div>

   </div>
 </div>
<?php include "includes/admin_footer.php" ?>