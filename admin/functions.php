<?php

function query_failed($result){
    global $connection;
    if(!$result){
        die("Query Failed". mysqli_error($connection));
    }
    return $result;
}
function insert_categories(){
    
    global $connection;
    
    if(isset($_POST['submit'])){
        $cat_title=$_POST['cat_title'];
        
        if($cat_title == "" || empty($cat_title)){
            echo "This field can not be empty";
        }
        else{
            $query="INSERT INTO categories(cat_title) VALUE('$cat_title')";
            $create_categories_query = mysqli_query($connection, $query);
                                    
            if(!$create_categories_query){
                die('QUERY FAILED'. mysqli_error($connection));
            }
        }
    }
}

function findAllCategories(){
    
    global $connection;
    
    $query= "select * from categories";
    $select_categories= mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_assoc($select_categories)){
        $cat_id=$row['cat_id'];
        $cat_title=$row['cat_title'];
        
        echo "<tr>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
        echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
        echo "</tr>";
    }
}



function Delete_Categories(){
    
    global $connection;
    
    if(isset($_GET['delete'])){
        $del_cat_id  = $_GET['delete'];
        $query= "DELETE from categories WHERE cat_id={$del_cat_id}";
        $delete_categories= mysqli_query($connection,$query);
        
        header("location: categories.php");
    }
}














?>