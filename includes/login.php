<?php include "db.php"; ?>
<?php 
session_start(); 
?>
<?php
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $username=mysqli_real_escape_string($connection, $username);
        $password=mysqli_real_escape_string($connection, $password);
        
        $query="SELECT * FROM users WHERE user_name ='{$username}'";
        $select_user_query = mysqli_query($connection, $query);
        
        if(!$select_user_query){
            die("Query Failed". mysqli_error($connection));
        }
        while($row=mysqli_fetch_assoc($select_user_query)){
            $db_user_id=$row['user_id'];
            $db_user_name=$row['user_name'];
            $db_user_password=$row['user_password'];
            $db_user_firstname=$row['user_firstname'];
            $db_user_lastname=$row['user_lastname'];
            $db_user_role=$row['user_role'];
        }
        if($username !== $db_user_name && $password !==  $db_user_password){
            header("Location: ../log.php");
        }
        else if($username == $db_user_name && $password ==  $db_user_password && $db_user_role  == 'Admin'){
            $_SESSION['user_name'] = $db_user_name;
            $_SESSION['user_firstname'] = $db_user_firstname;
            $_SESSION['user_lastname'] = $db_user_lastname;
            $_SESSION['user_role'] = $db_user_role;
            
            header("Location: ../admin");
        }
        else{
            header("Location: ../index.php"); 
        }
    }
?>