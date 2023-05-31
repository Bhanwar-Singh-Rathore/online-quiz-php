<?php
include 'loginlogic.php';
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

      <form action="index2.php"  method="post">
        <div class="right">
          <h5>Signup</h5>
          <p>
            <a href="#">Already have an Account</a>
          </p>
          <div class="inputs">
            <input type="text" name="Username" placeholder="Name" />

            <br />
            <input type="text" name="password" placeholder="Password" />
            <br />
        
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

          <br />
          <button>Login</button>
        </div>
      </form>
    </div>
  </body>
</html>
