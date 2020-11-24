<?php 

include '../connect.php';
//print_r($_POST);
$mainlabel= $_POST['main_label'];

$res = "update  property_info set  main_label='$mainlabel',main_label_german='".$_POST['main_label_german']."'  where id='".$_POST['id']."'";
echo $res;
if(mysqli_query($conn,$res) == TRUE)
{
echo'<script>';
echo'alert("Home Section Updated....!!!");';
echo'window.location="home_section.php";';
echo'</script>';
}
?>