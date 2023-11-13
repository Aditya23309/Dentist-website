
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
<link rel="stylesheet"  href="admin_style.css">
</head>

<body>
<?php include 'admin_header.php'; ?>



 <h2>Appointment</h2>
<table class="table">
<tr>
  <th>id</th>
<th>Name</th>
<th>Email</th>
<th>Number</th>
<th>Services</th>
<th>Date and Time</th>
</tr>
<?php
include 'config-2.php';

session_start();
$admin_email = $_SESSION['admin_email'];



error_reporting(0);
$query = "select * from contact_form";

$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total!=0)

{
while($result=mysqli_fetch_assoc($data))
 {
echo"
<tr>

<td>".$result['id']."</td>
<td>".$result['name']."</td>
<td>".$result['email']."</td>
<td>".$result['number']."</td>
<td>".$result['services']."</td>
<td>".$result['date']."</td>

</tr>
";
   }
}

else
{
echo "No records ";
}
?>
</table>
<script src="js/admin_script.js"></script>
</body>
</html>