<?php 
if(is_user_logged_in())
{	
		wp_nav_menu(array('menu'=>'MyProfile','container'=>false));
}
		else
		{
			wp_nav_menu(array('menu'=>'Home','container'=>false));
		}
		
?>

<html>
<head>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
<script>
</script>
</head>
<body>


		<div id="logo1">
		<div id="left-nav">
		<img src="<?php echo get_template_directory_uri()?>/images/logo.jpg" alt="gkb">
		</div>
		</div>
		<br><br>
		<div>
		<?php get_sidebar();?></div>
</body>
		</html>

	
