<?php
session_start();

// initializing variables
$username = "";
$password   = "";
$errors = array();

// connect to the database
$acon = mysqli_connect('localhost', 'root', 'Mehmet.1997','project');


// LOGIN USER
if (isset($_POST['login_'])) {
  $username = mysqli_real_escape_string($acon, $_POST['username']);
  $password = mysqli_real_escape_string($acon, $_POST['password']);
  
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	
  	$query = "SELECT * FROM admin WHERE name='$username' AND password='$password'";
  	$results = mysqli_query($acon, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
    
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location:indexadmin.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
