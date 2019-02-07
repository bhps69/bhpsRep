<?php /**Template Name:Login*/?>
<?php get_header();?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/Login.css">
</head>
<body>

<h2> Login Form</h2>



  
  <form class="modal-content animate" action="<?php echo get_template_directory_uri()?>/wp_Login.php" method="POST">

    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" style="width:300px" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" style="width:300px" placeholder="Enter Password" name="password" required>
        <br>
      <button type="submit" style="width:300px" name="btnname">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1"  style="width:300px">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>


</body>
</html>
<?php get_footer()?>