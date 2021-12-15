<?php 

if(isset($_POST['checkboxarray'])) {
    
    foreach($_POST['checkboxarray'] as $checkboxvalues) {
        
        $bulkoption =  $_POST['bulkoption'];
        switch($bulkoption) {
            case 'published':
                $query = "UPDATE fuel SET fuel_status = '{$bulkoption}' WHERE fuel_id = {$checkboxvalues} ";

                $update_to_publish_status = mysqli_query($connection,$query);
                break;
                
            case 'draft':
                $query = "UPDATE fuel SET fuel_status = '{$bulkoption}' WHERE fuel_id = {$checkboxvalues} ";

                $update_to_draft_status = mysqli_query($connection,$query);
                break;
                
            case 'delete': 
                $query="DELETE FROM fuel WHERE fuel_id = {$checkboxvalues} ";
                $delete_fuel_query= mysqli_query($connection,$query);
                
                break;    
        }   
    }
}

?>
  
  <form action="" method="post">
   <table class="table table-bordered table-hover">
       
       <div id="bulkOptionsContainerfuel" class="col-xs-4" style="padding: 0px;">
            <select name="bulkoption" id="" class="form-control" >
                <option value="">Select Options</option>
                <option value="draft">Draft</option>
                <option value="published">Publish</option>
                <option value="delete">Delete</option>
            </select>
       </div>
       <div class="col-xs-4">

           <input type="submit" name="submit" value="Apply" class="btn btn-success">
           <a href="fuels.php?source=add_fuel" class="btn btn-primary">Add New Fuel</a>
       </div>
        <thead class="thead-dark">
            <tr>
                <th>Select</th>
                <th>Fuel ID</th>
                <th>Fuel Name</th>
                <th>Fuel Company</th>
                <th>Fuel Category</th>
                <th>Fuel Image</th>
                <th>Fuel Details</th>
                <th>Fuel Tags</th>
                <th>Fuel Unit Price</th>
                <th>Fuel Order</th>
                <th>Fuel Status</th>
                <th>Edit Post</th>
                <th>Delete Post</th>
            </tr>
        </thead>
        <tbody>                                    
<?php
                               
    $query= "SELECT * FROM fuel";
    $select_fuel= mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_assoc($select_fuel)){
        
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
        
        echo "<tr>";
        ?>
        
        <td><input type="checkbox" class="checkboxes" name="checkboxarray[]" value="<?php echo $fuel_id; ?>"></td>
        
        <?php
        echo "<td>$fuel_id</td>";
        echo "<td>$fuel_name</td>";
        echo "<td>$fuel_company</td>";
        
        $query= "SELECT * FROM categories WHERE cat_id={$fuel_category_id}";
        $select_categories_id= mysqli_query($connection,$query);
                                        
        while($row=mysqli_fetch_assoc($select_categories_id)){
            $cat_id=$row['cat_id'];
            $cat_title=$row['cat_title'];
                                        
            echo "<td>$cat_title</td>";
        }
        
        echo "<td><img width=100 src='../img/$fuel_image' alt='images'></td>";
        echo "<td>$fuel_details</td>";
        echo "<td>$fuel_tags</td>";
        echo "<td>$fuel_unit_price</td>";
        echo "<td>$fuel_order_count</td>";
        echo "<td>$fuel_status</td>";
        echo "<td><a href='fuels.php?source=edit_fuel&f_id={$fuel_id}'>Edit</a> </td>";
        echo "<td><a href='fuels.php?delete={$fuel_id}'>Delete</a> </td>";
        echo "</tr>";
    }
?>                        
        </tbody>
    </table>
</form>
<?php
if(isset($_GET['delete'])){
    $the_fuel_id=$_GET['delete'];
    
    $query="DELETE FROM fuel WHERE fuel_id= {$the_fuel_id}";
    $delete_query= mysqli_query($connection,$query);
    header("Location: fuels.php");
}
                         
?>