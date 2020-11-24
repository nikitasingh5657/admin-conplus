<?php 

include '../connect.php';
//print_r($_POST);
$mainlabel= $_POST['main_label'];
// Array ( [id] => 1 [main_label] => the real estate [main_label_german] => main_span
//  [sub_label] => high return [sub_label_german] => sub span [email] => pdj2212@gmail.com
//   [telephone] => 7066226587 )
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