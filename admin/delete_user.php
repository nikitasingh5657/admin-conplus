<?php 

include '../connect.php';
//print_r($_POST);
$id= $_GET['id'];
$res = "update  login set is_del='yes' where id='$id'";
echo $res;
if(mysqli_query($conn,$res) == TRUE)
{
echo'<script>';
echo'alert(" Section deleted from home page....!!!");';
echo'window.location="user_section.php";';
echo'</script>';
}
?>