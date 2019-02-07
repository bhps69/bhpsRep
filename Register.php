<?php


// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$errorMsg="";
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'sampledb1');
	if(! $db){
		
	$_SESSION["error"]="cannot create db";
	header('location:WordPress/wordpress/wp-content/themes/site/registration.php');
	}

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");

  }
	
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM clientsusers WHERE user_login='$username' OR user_email='$email' LIMIT 1";
echo $user_check_query;
  $result = mysqli_query($db, $user_check_query);
  if(!$result){header('location:registration3.php');
  }
print_r($result);
  $user = mysqli_fetch_assoc($result);
	print_r($user);
  if ($user) { // if user exists
    if ($user['user_login'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['user_email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  // Finally, register user if there are no errors in the form
	echo "errors size".count($errors);
  if (count($errors) == 0) {
  //l	$password = md5($password_1);encrypt the password before saving in the database
	$time=gmdate(DATE_ISO8601);
	$t=explode('+',$time);
  	$query = "INSERT INTO clientsusers (user_login, user_pass, user_nicename, user_email,user_url,user_registered, user_activation_key, user_status, display_name) VALUES('$username',  '$password_1','$username','$email','','$time','',0,'$username')";
	echo $query;
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
 ## 	header('location: errors.php');
  }
}
