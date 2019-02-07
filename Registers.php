
<?php
$debug=1;
if($debug){
	session_start();

	// initializing variables
	$username = "";
	$email    = "";
	$errors = array(); 

	// connect to the database
	$db = mysql_connect('localhost', 'root', '');
	$currDB = mysql_select_db('sampledb1',$db);
	// REGISTER USER
	if (isset($_POST['reg_user'])) {
	  // receive all input values from the form
	  $username = $_POST['username'];
	  $email = $_POST['email'];
	  $password_1 = $_POST['psw'];
	  $password_2 = $_POST['psw-repeat'];
		echo "in if loop";
	  // form validation: ensure that the form is correctly filled ...
	  // by adding (array_push()) corresponding error unto $errors array
	  if (empty($username)) { array_push($errors, "Username is required"); }
	  if (empty($email)) { array_push($errors, "Email is required"); }
	  if (empty($password_1)) { array_push($errors, "Password is required"); }
	  if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	  }
		echo "checked if loops";
		echo $username;echo $email;
	  // first check the database to make sure 
	  // a user does not already exist with the same username and/or email
	  $user_check_query = "SELECT * FROM Register WHERE username='$username' OR email='$email' LIMIT 1";
	  $result = mysql_query( $user_check_query);
	  echo $result;
	  
	  $user = mysql_fetch_array($result);
	  echo $user;
	  if ($user) { // if user exists
		if ($user['username'] === $username) {
		  array_push($errors, "Username already exists");
		}

		if ($user['email'] === $email) {
		  array_push($errors, "email already exists");
		}
	  }
	  echo "array size".count($user);
	echo "errors ".count($errors);
	echo "first element".$user[0];
	  // Finally, register user if there are no errors in the form
	  if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database
		
		$query = "INSERT INTO Register(username, email, password) 
				  VALUES('$username', '$email', '$password')";
		echo mysql_query($query);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		
	  }
	 }
}

// ...
?>