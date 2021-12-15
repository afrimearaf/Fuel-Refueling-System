<?php include "includes/db.php"?>
<?php include "includes/header.php"?>

    <!-- Navigation -->
<?php include "includes/navigation.php"?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-8">
                <h1 class="bt">
                Fuel
                <small>and </small>Lubricants
                </h1>
                <?php
                    if(isset($_POST['submit'])){
                        $search= $_POST['search'];
                        
                        $query= "select * from fuel where fuel_tags LIKE '%$search%'";
                        $search_query= mysqli_query($connection,$query);
        
                        if (!$search_query){
                            die("query failed!!".mysqli_error($connection));
                        }
                        $count = mysqli_num_rows($search_query);
                        if($count == 0){
                            echo "<h1>No item found</h1>";
                        }
                        else{    
                            while($row=mysqli_fetch_assoc($search_query)){
                                $fuel_id=$row['fuel_id'];
                                $fuel_name=$row['fuel_name'];
                                $fuel_company=$row['fuel_company'];
                                $fuel_image=$row['fuel_image'];
                                $fuel_unit_price=$row['fuel_unit_price'];
                                $fuel_image=$row['fuel_image'];
                                $fuel_details=substr($row['fuel_details'],0,100);            
                ?>
               
               
                        <div class="fuels">

<!--                    <h1>Fuels</h1>-->
                    <div class="card">
                        <header>
                            <img src="img/<?php echo $fuel_image; ?>" width="1000" height="400" alt="">
                            <div class="text-wrap">
                                <a href="fuel.php?f_id=<?php echo $fuel_id; ?>" ><h2><?php echo $fuel_name ?></h2></a>
                                <h3>By: <?php echo $fuel_company ?></h3>
                            </div>
                        </header>
                        <main>
                            <a href="fuel.php?f_id=<?php echo $fuel_id; ?>" class="cta-wrap">Details</a>
                            <div class="info-wrap">
                            <h4><strong>Price: <span class="glyphicon glyphicon-usd"></span><?php echo $fuel_unit_price ?></strong></h4>
                            <p><?php echo $fuel_details ?></p>
                            </div>
                        </main>
                    </div>
                </div>

                <hr>
                <?php } } }?>
            </div>

           <?php include "includes/sidebar.php"?>
        </div>

        <hr>
      

    </div>
     
    <?php include "includes/footer.php"?>