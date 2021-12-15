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
                            View All Orders
                        </h1>
                        
<?php
    
    if(isset($_GET['source'])){
        
        $source=$_GET['source'];
        
    }
else {
    $source='';
}
switch($source){
        
        case 'add_order';
        include "includes/add_order.php";
        break;
        
        case 'edit_order';
        include "includes/edit_order.php";
        break;

    default:
        
        include "includes/view_all_orders.php";
            
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