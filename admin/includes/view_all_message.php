<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Message ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Message Date</th>
            <th>Delete Message</th>
        </tr>
    </thead>
    <tbody>
    
    <?php
        
        $query = "SELECT * FROM message";
        $select_message = mysqli_query($connection,$query);
        
        while($row=mysqli_fetch_assoc($select_message)){
            
            $msg_id = $row['msg_id'];
            $name = $row['name'];
            $email = $row['email'];
            $message =$row['message'];
            $msg_date=$row['msg_date'];
            
            echo "<tr>";
            echo "<td>$msg_id</td>";
            echo "<td>$name</td>";
            echo "<td>$email</td>";
            echo "<td>$message</td>";
            echo "<td>$msg_date</td>";
            echo "<td><a href='message.php?delete={$msg_id}'>Delete</a></td>";
            echo "</tr>";
        }

        
    ?>
    
    </tbody>
</table>
  
   <?php
   

    if(isset($_GET['delete'])){
        $the_msg_id=$_GET['delete'];

        $query = "DELETE FROM message WHERE msg_id= {$the_msg_id}";
        $delete_msg_query = mysqli_query($connection,$query);
        header("Location:  message.php");

    }
                              
                           
?>
    