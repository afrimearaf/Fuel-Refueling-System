<?php include "includes/admin_header.php" ?>

    <div id="wrapper">

        <?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome
                            <small>
                            <?php echo $_SESSION['user_name']; ?>
                            </small>
                        </h1>
                        
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    
                                    <?php
                                        $query= "SELECT * FROM fuel";
                                        $select_all_fuel= mysqli_query($connection,$query);
                                        $fuel_count = mysqli_num_rows($select_all_fuel);
                                        
                                        echo "<div class='huge'>$fuel_count</div>";
                                    ?>
                                    
                                        <div>Fuels</div>
                                    </div>
                                </div>
                            </div>
                            <a href="fuels.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    
                                    <?php
                                        $query= "SELECT * FROM orders";
                                        $select_all_order= mysqli_query($connection,$query);
                                        $order_count = mysqli_num_rows($select_all_order);
                                        
                                        echo "<div class='huge'>$order_count</div>";
                                    ?>
                                    
                                      <div>Orders</div>
                                    </div>
                                </div>
                            </div>
                            <a href="orders.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    
                                    <?php
                                        $query= "SELECT * FROM users";
                                        $select_all_user= mysqli_query($connection,$query);
                                        $user_count = mysqli_num_rows($select_all_user);
                                        
                                        echo "<div class='huge'>$user_count</div>";
                                    ?>
                                       
                                        <div> Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        
                                    <?php
                                        $query= "SELECT * FROM message";
                                        $select_all_message= mysqli_query($connection,$query);
                                        $message_count = mysqli_num_rows($select_all_message);
                                        
                                        echo "<div class='huge'>$message_count</div>";
                                    ?>
                                       
                                         <div>Messages</div>
                                    </div>
                                </div>
                            </div>
                            <a href="message.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <?php
                    $query= "SELECT * FROM fuel WHERE fuel_status= 'Draft'";
                    $draft_fuel= mysqli_query($connection,$query);
                    $draft_fuel_count = mysqli_num_rows($draft_fuel);
                
                    $query= "SELECT * FROM orders WHERE order_status= 'undelivered'";
                    $pending_order= mysqli_query($connection,$query);
                    $pending_order_count = mysqli_num_rows($pending_order);
                
//                    $query= "SELECT * FROM fuel WHERE fuel_status= 'Draft'";
//                    $draft_fuel= mysqli_query($connection,$query);
//                    $$draft_fuel_count = mysqli_num_rows($draft_fuel);

                ?>
                
                <div class="row">
                   
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['Graphs', 'Count'],
                                
                                <?php
                                
                                $element_text=['All Fuel', 'Draft Fuel', 'Orders', 'Pending Orders',  'Messages', 'Users'];
                                $element_count=[$fuel_count, $draft_fuel_count, $order_count, $pending_order_count, $message_count, $user_count];
                                
                                for($i=0; $i<6; $i++){
                                    echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
                                }
                                
                                
                                ?>
                                
                            ]);

                            var options = {
                              chart: {
                                title: 'Dashboard',
                                subtitle: '',
                              }
                            };

                            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                            chart.draw(data, google.charts.Bar.convertOptions(options));
                        }
                    </script>
                    
                    <div id="columnchart_material" style="width: 'auto' ; height: 500px;"></div>
                    
                </div>
                
                
                
                
                
            </div>

        </div>

<?php include "includes/admin_footer.php" ?>
