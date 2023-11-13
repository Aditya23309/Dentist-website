<?php


include 'config-2.php';

session_start();

$admin_email = $_SESSION['admin_email'];

if(!isset($admin_email)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<!-- admin dashboard section starts  -->

<section class="dashboard">

   <h1 class="title">dashboard</h1>

   <div class="box-container">

      
   <div class="box">
         <?php 
            $select_contact_form = mysqli_query($conn, "SELECT * FROM `contact_form`") or die('query failed');
            $number_contact_form = mysqli_num_rows($select_contact_form);
         ?>
         <h3><?php echo $number_contact_form; ?></h3>
         <p>Appointment placed</p>
      </div>


      <div class="box">
         <?php 
            $select_services_ta = mysqli_query($conn, "SELECT * FROM `services_tab`") or die('query failed');
            $number_services_ta  = mysqli_num_rows($select_services_ta );
         ?>
         <h3><?php echo $number_services_ta ; ?></h3>
         <p> New Services</p>
      </div>

      <div class="box">
         <?php 
            $select_user_for = mysqli_query($conn, "SELECT * FROM `user_for`") or die('query failed');
            $number_user_for  = mysqli_num_rows($select_user_for );
         ?>
         <h3><?php echo $number_user_for ; ?></h3>
         <p>Total User</p>
      </div>

      <div class="box">
         <?php 
            $select_contact_form = mysqli_query($conn, "SELECT * FROM `contact_form`") or die('query failed');
            $number_contact_form = mysqli_num_rows($select_contact_form);
         ?>
         <h3><?php echo $number_contact_form; ?></h3>
         <p>Guest User</p>
      </div>

</section>

<!-- admin dashboard section ends -->









<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>