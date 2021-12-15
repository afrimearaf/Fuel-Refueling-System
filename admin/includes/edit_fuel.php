<?php

if(isset($_GET['f_id'])){
    $the_fuel_id = $_GET['f_id'];
    
}
    $query= "SELECT * FROM fuel WHERE fuel_id=$the_fuel_id";
    $select_fuels_by_id= mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_assoc($select_fuels_by_id)){
        
        $fuel_id=$row['fuel_id'];
        $fuel_name=$row['fuel_name'];
        $fuel_company=$row['fuel_company'];
        $fuel_category_id=$row['fuel_category_id'];
        $fuel_image=$row['fuel_image'];
        $fuel_details=$row['fuel_details']; 
        $fuel_unit_price=$row['fuel_unit_price'];
        $fuel_tags=$row['fuel_tags'];
        $fuel_order_count=$row['fuel_order_count'];
        $fuel_status=$row['fuel_status'];
    }
if(isset($_POST['update_fuel'])){
    
    $fuel_name=$_POST['fuel_name'];
    $fuel_company=$_POST['fuel_company'];
    $fuel_category_id=$_POST['fuel_category_id'];
    $fuel_status=$_POST['fuel_status'];
    
    $fuel_image=$_FILES['fuel_image']['name'];
    $fuel_image_temp=$_FILES['fuel_image']['tmp_name'];
        
    $fuel_tags=$_POST['fuel_tags'];
    $fuel_details=$_POST['fuel_details'];
    $fuel_unit_price=$_POST['fuel_unit_price'];
    $fuel_order_count=$_POST['fuel_order_count'];
    
    
    move_uploaded_file($fuel_image_temp, "../img/$fuel_image");
    
    if(empty($fuel_image)){
        $query= "SELECT * FROM fuel WHERE fuel_id=$the_fuel_id";
        $select_image= mysqli_query($connection,$query);
        
        
        while($row= mysqli_fetch_array($select_image)){
            $fuel_image= $row['fuel_image'];
        }
        
    }
    
    $query= "UPDATE fuel SET fuel_name = '{$fuel_name}', fuel_category_id = '{$fuel_category_id}',  fuel_company = '{$fuel_company}', fuel_status =  '{$fuel_status}', fuel_tags = '{$fuel_tags}', fuel_details = '{$fuel_details}', fuel_unit_price = '{$fuel_unit_price}', fuel_image = '{$fuel_image}' WHERE fuel_id = {$fuel_id}";
    
    $update_fuel= mysqli_query($connection,$query);
    
    query_failed($update_fuel);
    
     echo " <p class='bg-success'>Fuel Edited: " . " " . " <a href='fuels.php'>View Fuels</a></p>";
}
        
?>

<form action=""  method="post" enctype="multipart/form-data">
    <div class="from-group">
       <label for="fuel_name">Fuel Name</label>
       <input value="<?php echo $fuel_name; ?>" type="text" class="form-control" name="fuel_name">
    </div>
    <div class="from-group">
       <label for="fuel_category_id">Fuel Category </label><br>
           <select name="fuel_category_id" id="" class="form-control">
             <option>Select Options</option>
              <?php
               $query= "select * from categories";
               $select_categories= mysqli_query($connection,$query);
            
               query_failed($select_categories);
                
               while($row=mysqli_fetch_assoc($select_categories)){
                   $cat_id=$row['cat_id'];
                   $cat_title=$row['cat_title'];
                
                   echo "<option value='$cat_id'>{$cat_title}</option>";
               }
           ?>
           </select>
        
    </div> 
    <div class="from-group">
        <label for="fuel_company">Fuel Company</label>
        <input value="<?php echo $fuel_company; ?>" type="text" class="form-control" name="fuel_company">
    </div>
    <div class="from-group">
        <label for="fuel_status">Fuel Status</label>
        <select name="fuel_status" id="" class="form-control" >
            <option >Select Options</option>
            <option value="draft">Draft</option>
            <option value="published">Publish</option>
        </select>
    </div>
    <div class="from-group">
        <label for="fuel_image" >Fuel Image</label>
        <input type="file" name="fuel_image" class="form-control">
    </div>
    <div class="form-group">
        <img width="100" src="../img/<?php echo $fuel_image; ?>" alt="">
    </div>
    <br>
    <div class="from-group">
        <label for="fuel_tags">Fuel Tags</label>
        <input value="<?php echo $fuel_tags; ?>" type="text" class="form-control" name="fuel_tags">
    </div>
    <div class="from-group">
        <label for="fuel_details">Fuel Details</label>
        <textarea  name="fuel_details" class="form-control" id="" cols="30" rows="10"><?php echo $fuel_details; ?></textarea>
    </div>
    <div class="from-group">
        <label for="fuel_unit_price">Fuel Unit Price</label>
        <input value="<?php echo $fuel_unit_price; ?>" type="text" class="form-control" name="fuel_unit_price">
    </div>
    <div class="from-group">
        <input class="btn btn-primary" type="submit" name="update_fuel" value="Update Fuel">
    </div>
</form>