<?php include "includes/db.php"?>
<?php include "includes/header.php"?>
   
   <!-- Navigation -->
<?php include "includes/navigation.php"?>
    
    
<?php 
    
    if(isset($_POST['contact'])) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $query = "INSERT INTO message(name, email, message, msg_date) VALUES ('$name', '$email', '$message', now())";
        
        $contact_query  = mysqli_query($connection,$query);
        
        if(!$contact_query){
            die("Query Failed". mysqli_error($connection));
        }
        
    }


?>

    <section id="contact-form" class="py-3">
    <div class="container">
      <h1 class="l-heading"><span class="text-primary">Contact</span> Us</h1>
      <p>Please fill out the form below to contact us</p>
      <form action="" method="post" role="form">
       
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" id="message"></textarea>
        </div>
        <button type="submit" name="contact" class="but">Submit</button>
      </form>
    </div>
  </section>
  <section id="contact-info" class="bg-dark">
    <div class="container" style="padding: 32px;">
        <div class="col-lg-4" style="text-align: center;">
            <i class="fa fa-home fa-5x"></i>
            <h3>Location</h3>
            <p>South Khulshi, Chattagram</p>
          </div>
          <div class="col-lg-4" style="text-align: center;">
              <i class="fa fa-phone fa-5x"></i>
              <h3>Phone Number</h3>
              <p>(555) 555-5555</p>
          </div>
          <div class="col-lg-4" style="text-align: center;">
              <i class="fa fa-envelope fa-5x"></i>
              <h3>Email Address</h3>
              <p>frs@frs.com</p>
          </div>
    </div>
  </section>

       
        <!-- Footer -->

<?php include "includes/footer.php"?>