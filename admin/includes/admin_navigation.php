 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fas fa-house-user"></i> Admin Home</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              <li><a href="../index.php">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $_SESSION['user_name']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
         
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"><i class="fas fa-palette"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#post_dropdown"><i class="fas fa-gas-pump"></i> Fuels<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="post_dropdown" class="collapse">
                            <li>
                                <a href="./fuels.php"><i class="fas fa-border-all"></i> View All Fuel</a>
                            </li>
                            <li>
                                <a href="fuels.php?source=add_fuel"><i class="fas fa-charging-station"></i> Add Fuel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./categories.php"><i class="fa fa-fw fa-wrench"></i> Categories</a>
                    </li>
                    <li class="">
                        <a href="./orders.php"><i class="fas fa-shopping-cart"></i> Orders</a>
                    </li>
                    <li class="">
                        <a href="./message.php"><i class="far fa-comment"></i> Message</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="far fa-address-card"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="./users.php"><i class="fas fa-border-all"></i> View All Users</a>
                            </li>
                            <li>
                                <a href="users.php?source=add_user"><i class="fas fa-user-plus"></i> Add User</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="./profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>