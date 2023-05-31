<?php

$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost:3307";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
    $showalert= false;
    $error= false;
    // Collect post variables
    $name = $_POST['name'];
    $Username = $_POST['Username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conpass = $_POST['conpass'];
   
    if(($password==$conpass )){
      $sql = "INSERT INTO `quiz`.`signup` (`Name`, `Username`, `email`, `password`, `conpass`) VALUES ('$name', '$Username', '$email', '$password', '$conpass');";
$showalert=true;
      if($con->query($sql)==true){ // echo "succesfully insterted"; } 
       $con->close();
       }
    }
    else{
      $error=true;
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login Page in HTML with CSS Code Example</title>
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />

    <link
   
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="signup.css" />
  </head>
  <body>

    <!-- <?php
if($showalert){
  echo 
  '<div class="alert alert-success" role="alert">
     your account is create.
</div>';
}

if($error){
  echo 
  '<div class="alert alert-danger" role="alert">
     yournot match.
</div>';
}
?> -->

    <!-- partial:index.partial.html -->
    <div class="box-form">
      <div class="left">
        <div class="overlay">
          <h1>Hello World.</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
            et est sed felis aliquet sollicitudin
          </p>
          <span>
            <p>login with social media</p>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"
              ><i class="fa fa-twitter" aria-hidden="true"></i> Login with
              Twitter</a
            >
          </span>
        </div>
      </div>

      <form  method="post">
        <div class="right" id="right">
          <h5>Signup</h5>
          <p>
            
          </p>
          <p></p>
          <div class="inputs">
            <input type="text" name="name" placeholder="Name" />

            <br />
            <input type="number" name="Username" placeholder="username" />
            <br />
            <input type="email" name="email" placeholder="Email" />
            <br />
            <input type="text" name="password" placeholder="Password" />
            <br />
            <input type="text" name="conpass" placeholder="Conform Password" />
          </div>

          <br /><br />

          <div class="remember-me--forget-password">
            <!-- Angular -->
            <label>
              <input type="checkbox" name="item" checked />
              <span class="text-checkbox">Remember me</span>
            </label>
            <p>forget password?</p>
          
          </div>
          <p>
            <a href="login.php">Already have an Account</a>
          </p>
          <br />
          <button>Login</button>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
