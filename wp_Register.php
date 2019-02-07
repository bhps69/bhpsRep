<?php 
require('../../../wp-load.php');
$user_name = $_POST['username'];
  $user_email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if ($password_1 != $password_2) {
	error_log("The two passwords do not match",0);

  }
  $password=$password_1;
$user_id = username_exists( $user_name );
if ( !$user_id and email_exists($user_email) == false ) {

	$user_id = wp_create_user( $user_name, $password, $user_email );
	header('location: http://localhost/WordPress/wordpress');
} 

?>