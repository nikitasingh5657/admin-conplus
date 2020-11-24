<?php 

include '../connect.php';
//print_r($_POST);
$id= $_GET['id'];

$res = "update  property_info set is_del='yes' where id='$id'";
echo $res;
if(mysqli_query($conn,$res) == TRUE)
{
echo'<script>';
echo'alert(" Section deleted from home page....!!!");';
echo'window.location="home_section.php";';
echo'</script>';
}
?>