<?php include "includes/db.php"?>
<?php include "includes/header.php"?>

    <!-- Navigation -->
    
<?php include "includes/navigation.php"?>
    <!-- Page Content -->
    <div class="container">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h1 class="page-header">
                Fuel
                <small>and </small>Lubricants
                </h1>  
              
                
    <?php
    
    if(isset($_GET['category'])){
        $fuel_category_id=$_GET['category'];
    }
    $query= "SELECT * FROM fuel WHERE fuel_category_id = $fuel_category_id";
    $select_all_fuel_query= mysqli_query($connection,$query);

    $count = mysqli_num_rows($select_all_fuel_query);
                        if($count == 0){
                            echo "<h1>No item found</h1>";
                        }
                        else{ 


while($row=mysqli_fetch_assoc($select_all_fuel_query)){
    $fuel_id=$row['fuel_id'];
    $fuel_name=$row['fuel_name'];
    $fuel_company=$row['fuel_company'];
    $fuel_image=$row['fuel_image'];
    $fuel_unit_price=$row['fuel_unit_price'];
    $fuel_image=$row['fuel_image'];
    $fuel_details=substr($row['fuel_details'],0,50);               
    ?>
                  
                <!-- First Blog Post -->
                <h2>
                    <a href="fuel.php?f_id=<?php echo $fuel_id; ?>" ><?php echo $fuel_name ?></a>
                </h2>
                <p class="lead">
                    by <a href="home.php"><?php echo $fuel_company ?></a>
                </p>
                <p><span class="glyphicon glyphicon-usd"></span> <?php echo $fuel_unit_price ?></p>
                <hr>
                <img class="img-responsive" src="img/<?php echo $fuel_image; ?>" alt="">
                <hr>
                <p><?php echo $fuel_details ?></p>
                <a class="btn btn-primary" href="fuel.php?f_id=<?php echo $fuel_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                 <?php } } ?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"?>

        </div>
        <!-- /.row -->

        <hr>

   
<?php include "includes/footer.php"?>