<?php include "includes/db.php"?>
<?php include "includes/header.php"?>
      
     <!-- Navigation -->
<?php include "includes/navigation.php"?>
      <div id="showcase2"   style="height:90vh;">
      <form action="includes/login.php" class="login-form" method="post" >
        <h1>Login</h1>

        <div class="txtb">
          <input type="text" name="username">
          <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
          <input type="password" name="password">
          <span data-placeholder="Password"></span>
        </div>

        <input type="submit" class="logbtn" name="login" value="Login">

        <div class="bottom-text">
          Don't have account? <a href="#">Sign up</a>
        </div>

      </form>
      </div>
     

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>

<?php include "includes/footer.php"?>