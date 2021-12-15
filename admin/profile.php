<?php include "includes/admin_header.php" ?>
    
<?php
    if(isset($_SESSION['user_name'])){
        $username = $_SESSION['user_name'];
        
        $query= "SELECT * FROM users WHERE user_name = '{$username}' ";
        $select_profile= mysqli_query($connection,$query);
        
        while($row=mysqli_fetch_array($select_profile)){
        
            $user_id=$row['user_id'];  
            $user_name=$row['user_name'];
            $user_password=$row['user_password'];
            $user_firstname=$row['user_firstname'];
            $user_lastname=$row['user_lastname'];
            $user_email=$row['user_email'];
            $user_image=$row['user_image'];
            $user_role=$row['user_role'];
        }
    }
?>
   
<?php

if(isset($_POST['edit_user'])){
    
    $user_firstname=$_POST['user_firstname'];
    $user_lastname=$_POST['user_lastname'];
    $user_role=$_POST['user_role'];
    $user_name=$_POST['user_name'];
    
    $user_image=$_FILES['user_image']['name'];
    $user_image_temp=$_FILES['user_image']['tmp_name'];
        
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
//    $post_date=date('d-m-y');
//    $post_comment_count=$_POST['post_comment_count'];
    
    
    
    move_uploaded_file($user_image_temp, "../img/$user_image");
    
    
    $query= "UPDATE users SET user_firstname = '{$user_firstname}', user_lastname = '{$user_lastname}', user_role= '{$user_role}', user_name = '{$user_name}', user_email =  '{$user_email}', user_password = '{$user_password}', user_image = '{$user_image}' WHERE user_name = '{$username}'";
    
    $update_users= mysqli_query($connection,$query);
    
    query_failed($update_users);
}

?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php" ?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome
                            <small><?php echo $_SESSION['user_name']; ?></small>
                        </h1>
                        
                        <form action=""  method="post" enctype="multipart/form-data">
                           
                            <div class="from-group">
                                <label for="user_firstname">First Name</label>
                                <input value="<?php echo $user_firstname; ?> " type="text" class="form-control" name="user_firstname">
                            </div>
                            <div class="from-group">
                                <label for="user_lastname">Last Name</label>
                                <input value="<?php echo $user_lastname; ?> " type="text" class="form-control" name="user_lastname">
                            </div>
                            <div class="from-group">
                               <label for="user_role">Role: </label><br>
                               <input  type="radio" name="user_role" id="" value="Admin">Admin
                               <input  type="radio" name="user_role" id="" value="subscriber">Subscriber


                            </div>
                            <div class="from-group">
                                <label for="user_name">Username</label>
                                <input value="<?php echo $user_name; ?> " type="text" class="form-control" name="user_name">
                            </div>
                            <div class="from-group">
                                <label for="user_email">Email</label>
                                <input value="<?php echo $user_email; ?> "  type="email" class="form-control" name="user_email">
                            </div>
                            <div class="from-group">
                                <label for="user_password">Password</label>
                                <input value="<?php echo $user_password; ?> " type="password" class="form-control" name="user_password">
                            </div>
                            <div class="from-group">
                                <label for="user_image">User Image</label>
                                <input type="file" name="user_image">
                            </div>
                            <br>
                            <div class="form-group">
                                <img width="100" src="../img/<?php echo $user_image; ?>" alt="">
                            </div>
                            <br>
                            <div class="from-group">
                                <input class="btn btn-primary" type="submit" name="edit_user" value="Update Profile">
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/admin_footer.php" ?>