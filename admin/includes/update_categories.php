<form action="" method="post">
                                <div class="form-group">
                                   <label for="cat_title">Edit Category</label>
                                   
                                   
                                   <?php
                                    if(isset($_GET['edit'])){
                                    $cat_id  = $_GET['edit'];
                                    $query= "select * from categories WHERE cat_id={$cat_id}";
                                    $update_categories= mysqli_query($connection,$query);
                                        
                                    while($row=mysqli_fetch_assoc($update_categories)){
                                     $cat_id=$row['cat_id'];
                                     $cat_title=$row['cat_title'];
                                        
                                    ?>

                                    <input value="<?php if(isset($cat_title)){echo $cat_title;} ?>" class="form-control"  type="text" name="cat_title">
                               
                              <?php  } }  ?>
                                   
                              <?php //update query
                                    if(isset($_POST['update'])){
                                    $up_cat_id  = $_POST['cat_title'];
                                    $query= "UPDATE categories SET cat_title= '{$up_cat_id }' WHERE cat_id={$cat_id}";
                                    $update_qurey= mysqli_query($connection,$query);
                                        if(!$update_qurey){
                                            die("Failed". mysqli_error($connection));
                                        }
                                    
                                    }
                              ?>
                                    
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="update" value="Update">
                                </div>
                            </form>