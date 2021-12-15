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
                            View All messages
                        </h1>
                        
<?php
    
    if(isset($_GET['source'])){
        
        $source=$_GET['source'];
        
    }
else {
    $source='';
}
switch($source){
        
        case 'add_message';
        include "includes/add_order.php";
        break;
        
        case 'edit_message';
        include "includes/edit_message.php";
        break;

    default:
        
        include "includes/view_all_message.php";
            
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