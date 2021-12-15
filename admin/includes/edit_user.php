<?php
if(isset($_GET['edit_user'])){
    $the_user_id= $_GET['edit_user'];
    
    $query= "select * from users WHERE user_id=$the_user_id";
    $update_users= mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_assoc($update_users)){
        
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
    
    
    $query= "UPDATE users SET user_firstname = '{$user_firstname}', user_lastname = '{$user_lastname}', user_role= '{$user_role}', user_name = '{$user_name}', user_email =  '{$user_email}', user_password = '{$user_password}', user_image = '{$user_image}' WHERE user_id = {$the_user_id}";
    
    $update_users= mysqli_query($connection,$query);
    
    query_failed($update_users);
    
     echo "User Edited: " . " " . " <a href='users.php'>View Users</a>";
}

     

?>
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
        <input type="file" name="user_image" class="form-control">
    </div>
    <div class="form-group">
        <img width="100" src="../img/<?php echo $user_image; ?>" alt="">
    </div>
    <br>
    <div class="from-group">
        <input class="btn btn-primary" type="submit" name="edit_user" value="Update User">
    </div>
</form>