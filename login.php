<?php
require_once"dbconfig.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include"nav.php";?>
</br>
  <!-- Page Content -->
  <div class="container">

    

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Sign In</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      
      <!-- Contact Details Column -->
     
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
	<div class="col-lg-4 "></div>
      <div class="col-lg-4 ">
        <h3>Sign In Here...</h3>
		<?php
		  
		  if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
echo '<div class="alert  alert-danger">Username or Password is invalid</div>';
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter


// SQL query to fetch information of registerd users and finds user match.
$res = select("SELECT username, password FROM CUSTOMER WHERE username='$username' AND password='$password' LIMIT 1");

// To protect MySQL injection for Security purpose
$r=mysqli_num_rows($res);
if($r==1)
{
while ($s=mysqli_fetch_array($res))  
{
	extract($s);
	$_SESSION['login_user2']=$username; // Initializing Session
	echo"<script>window.location='index.php'</script>"; // Redirecting To Other Page
} 
}
else
{
	echo'<div class="alert  alert-danger">Something Went Wrong</div>';
}
}
}
		  
		  ?>
        <form method="post">
          
          
          <div class="control-group form-group">
            <div class="controls">
              <label>Username:</label>
              <input type="text" class="form-control" name="username" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
		  <div class="control-group form-group">
            <div class="controls">
              <label>Password:</label>
              <input type="password" class="form-control" name="password" required data-validation-required-message="Please enter your password.">
            </div>
          </div>
         
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" name="submit">Sign In</button>
        </form>
      </div>

    </div>
	<br>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include"footer.php";?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>

</html>
