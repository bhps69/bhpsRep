<?php 
require('../../../wp-load.php');

if (isset($_POST['btnname'])) {
    $creds = array();
			
            $creds['user_login'] = $_POST['username'];
            $creds['user_password'] = $_POST['password'];
            $_SESSION["loggedin"]=true;
			
            $user = wp_signon($creds, false);
			
			
            if (!is_wp_error($user)) {
               wp_redirect(site_url('/index.php'));
			exit;
			}
             
}?> 
