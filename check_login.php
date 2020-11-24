<?php
include 'connect.php';
session_start();
//print_r($_POST);
$username = $_POST['username'];
$password = $_POST['pass'];
$_SESSION['id']='';
if($result = mysqli_query($conn, "SELECT * FROM login"))
{
	if($result->num_rows > 0)
	{
		while($rows = $result->fetch_object())
		{
			 $username1 = $rows->username;
			 $password1 = $rows->password;
			if($username == $username1 && $password==$password1)
			{
				$_SESSION['conplus_id']= $rows->id;
		       echo $result;
				header('location: admin/user_section.php');
			   
			}
			else
			{
	//alert("password is incorrect");
	echo "password is incorrect";
			//header('location:index.php');
			}
		}
	}
}
mysqli_close($conn);
?>
			
			
