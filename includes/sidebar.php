  <div class="col-md-4">

                <div class="well">
                    <h4>Search Fuel</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" name="submit" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                </div>
                <?php
                    
                    $query= "select * from categories";
                    $select_categories_sidebar= mysqli_query($connection,$query);
                    
                ?>
               
                <div class="well">
                    <h4>Fuel Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                           <div class="aa">
                               <ul class="list-unstyled">
                                   <?php
                                     while($row=mysqli_fetch_assoc($select_categories_sidebar)){
                                         $cat_id=$row['cat_id'];
                                         $cat_title=$row['cat_title'];
                                         echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include "widget.php" ?>

            </div>
