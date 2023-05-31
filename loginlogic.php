
<?php
$insert = false;
if(isset($_POST['Username'])){
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
    echo "Success connecting to the db";

    // Collect post variables
	$Username = $_POST['Username'];
 $password = $_POST['password'];
 $showalert= false;
	
	    $sql = "Select * from signup where Username ='$username' and password= '$password'";

	  $showalert=true;
			// if($con->query($sql)==true){ // echo "succesfully insterted"; } echo
			// $con->error; $con->close();
			//  }
		  
		  
			
		  
 
}
 ?>