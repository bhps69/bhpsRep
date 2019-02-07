<?php /**Template Name:Profiling*/


if(is_user_logged_in()){
    $current_user=wp_get_current_user();

	
}


get_header();
?>
<html>
    <head>
        <style>
            
        </style>
    </head>
    <body>
        <div height="200px">
        <center>
<?php 	echo "Hello ".$current_user->user_login.", update your details here...";?><br><br><br>
        <form method="post" enctype="multipart/form-data" action="<?php echo get_template_directory_uri()?>/index.php">
            <table border="0">
                <tr>
                    <th>
                        <label for="username">User Name</label>
                    </th>
                    <td>
                        <input type="text" value="<?php $current_user->user_login?>">
                    </td>
                </tr>
                <tr>
                    <th cellspacing="15" cellpadding="15">
                        <label for="first_name">First Name</label>
                    </th>
                    <td cellspacing="15" cellpadding="15">
                        <input type="text" id="first_name" name="first_name">
                    </td>
                </tr>
                <tr>
                    <th cellspacing="15" cellpadding="15">
                        <label for="last_name">Last Name</label>
                    </th>
                    <td cellspacing="15" cellpadding="15">
                        <input type="text" id="last_name" name="last_name">
                    </td>
                </tr>
                <tr>
                    <th cellspacing="15" cellpadding="15">
                        <label for="gender">Gender :</label>
                    </th>
                    <td cellspacing="15" cellpadding="15">
                        <input type="checkbox" name="gender" value="M">
                        <input type="checkbox" name="gender" value="F">

                    </td>
                </tr>
                <tr>
                    <th cellspacing="15" cellpadding="15">
                        <label for="hobbies">Hobbies</label>
                    </th>
                    <td cellspacing="15" cellpadding="15">
                        <input type="checkbox" name="hobbies" value="1">Eating<br>
                        <input type="checkbox" name="hobbies" value="1">Reading<br>
                        <input type="checkbox" name="hobbies" value="1">Gardening<br>
                        <input type="checkbox" name="hobbies" value="1">Cycling<br>
                        <input type="checkbox" name="hobbies" value="1">IT<br>
                        <input type="checkbox" name="hobbies" value="1">Pharma<br>
                        <input type="checkbox" name="hobbies" value="1">Pschycology<br>
                        <input type="checkbox" name="hobbies" value="1">Electronics<br>
                    </td>
                </tr>
                <tr>
                    <th cellspacing="15" cellpadding="15">
                        Profile Picture :
                    </th>
                    <td cellspacing="15" cellpadding="15">
                        <input type="file" name="fileUpload">
                    </td>
                </tr>
                <tr>
                    <td cellspacing="15" cellpadding="15">
                        <input type="submit" value="Submit">
                    </td>
                    <td cellspacing="15" cellpadding="15">
                        <input type="reset" value'Reset">
                    </td>
                </tr>
            </table>
            </center>
            </div>
        </form>
    </body>
</html>
<?php get_footer();?>