<?php/**Template Name:Profile*/


if($_SESSION["loggedin"])
{
	echo "Hello".$_SESSION["username"];
	echo "Your id is ".$_SESSION["id"];
}
?>
