<?php include "includes/admin_header.php" ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php" ?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            View All Fuels
                        </h1>
                        
<?php
    
    if(isset($_GET['source'])){
        
        $source=$_GET['source'];
        
    }
else {
    $source='';
}
switch($source){
        
        case 'add_fuel';
        include "includes/add_fuel.php";
        break;
        
        case 'edit_fuel';
        include "includes/edit_fuel.php";
        break;

    default:
        
        include "includes/view_all_fuel.php";
            
        break;
        
}
    
    
    
?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/admin_footer.php" ?>