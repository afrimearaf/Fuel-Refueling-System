<?php
if(isset($_POST['add_fuel'])){
    
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
    
    
    $query= "INSERT INTO fuel(fuel_category_id, fuel_name, fuel_company, fuel_unit_price, fuel_image, fuel_details, fuel_tags, fuel_order_count, fuel_status) VALUES ( {$fuel_category_id}, '{$fuel_name}',  '{$fuel_company}', '{$fuel_unit_price}', '{$fuel_image}', '{$fuel_details}', '{$fuel_tags}', '{$fuel_order_count}', '{$fuel_status}')";
    
    $add_fuel_query= mysqli_query($connection,$query);
    
    if(!$add_fuel_query){
                        die("Query Failed". mysqli_error($connection));
                    }
    
     echo " <p class='bg-success'>Fuel Created: " . " " . " <a href='fuels.php'>View Fuels</a></p>";
}

     

?>
<form action=""  method="post" enctype="multipart/form-data">
    <div class="from-group">
        <label for="fuel_name">Fuel Name</label>
        <input type="text" class="form-control" name="fuel_name">
    </div>
    <div class="from-group">
       <label for="fuel_category_id">Fuel Category </label><br>
        <select name="fuel_category_id" id=""  class="form-control"> 
           <option value="">Select Options</option>
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
        <input type="text" class="form-control" name="fuel_company">
    </div>
    <div class="from-group">
        <label for="fuel_status">Fuel Status</label>
        <select name="fuel_status" id="" class="form-control" >
            <option value="draft">Select Options</option>
            <option value="draft">Draft</option>
            <option value="published">Publish</option>
        </select>
    </div>
    <div class="from-group">
        <label for="fuel_image">Fuel Image</label>
        <input type="file" name="fuel_image" class="form-control" >
    </div>
    <div class="from-group">
        <label for="fuel_tags">Fuel Tags</label>
        <input type="text" class="form-control" name="fuel_tags">
    </div>
    <div class="from-group">
        <label for="fuel_details">Fuel Details</label>
        <textarea name="fuel_details" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="from-group">
        <label for="fuel_unit_price">Fuel Unit Price</label>
        <input type="text" class="form-control" name="fuel_unit_price">
    </div>
    <div class="from-group">
        <input class="btn btn-primary" type="submit" name="add_fuel" value="Publish Fuel">
    </div>
</form>