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

    <!-- Page Heading/Breadcrumbs -->
    

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Sign Up</li>
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
        <h3>Sign Up Here...</h3>
		<?php
	if(isset($_REQUEST['submit']))
	{
		extract($_REQUEST);
		 $at="INSERT into CUSTOMER(fullname,username,email,contact,address,password) VALUES('$fullname','$username',' $email ','$contact ','$address','$password')";
		
		$query = iud($at);
		if($query==1)
		{
			echo"<div class='alert alert-success'>Successful</div>";
		}
		else
		{
			echo"<div class='alert alert-danger'>Alredy Exist Username</div>";
		}
	}

		?>
        <form method="post" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" class="form-control" name="fullname"  id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div> <div class="control-group form-group">
            <div class="controls">
              <label>Username:</label>
              <input type="text" class="form-control" name="username" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Phone Number:</label>
              <input type="tel" class="form-control" id="phone" name="contact"  required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
		  <div class="control-group form-group">
            <div class="controls">
              <label> Address:</label>
              <input type="text" class="form-control" name="address" id="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email</label>
              <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
		  
		  <div class="control-group form-group">
            <div class="controls">
              <label>Password:</label>
              <input type="password" class="form-control" name="password" id="password" required data-validation-required-message="Please enter your password.">
            </div>
          </div>
         
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
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
