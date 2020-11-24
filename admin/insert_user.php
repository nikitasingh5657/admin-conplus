<?php 

include'../connect.php';

$name = $_POST['name'];
$password = $_POST['password'];
$color = $_POST['color'];

print_r($_POST);
 $res = "insert into login(id,username,password,user_color,is_del) 
 values ('','$name','$password','$color','no')";

if(mysqli_query($conn,$res) == TRUE)
{
	echo'<script>';
	
	echo'window.location="user_section.php"';
	echo'</script>';
}
?>