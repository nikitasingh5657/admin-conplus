<?php 

include '../connect.php';
//print_r($_POST);
$name = $_POST['name'];
$password = $_POST['password'];
$color = $_POST['color'];
$res = "update  login set  username='$name',password='$password',user_color='$color' where id='".$_POST['id']."'";
echo $res;

if(mysqli_query($conn,$res) == TRUE)
{
echo'<script>';
echo'alert("User Updated....!!!");';
echo'window.location="user_section.php";';
echo'</script>';
}
?>