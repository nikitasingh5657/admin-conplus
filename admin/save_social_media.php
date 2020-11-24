<?php 

include '../connect.php';
//print_r($_POST);
$name= $_POST['name'];
$link= $_POST['link'];

$res = "update  social_media set  name='$name',link='$link'  where id='".$_POST['id']."'";
//echo $res;
if(mysqli_query($conn,$res) == TRUE)
{
echo'<script>';
echo'alert("Social Media  Updated....!!!");';
echo'window.location="social_media.php";';
echo'</script>';
}
?>