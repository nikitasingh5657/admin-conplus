<?php 

include '../connect.php';
//print_r($_POST);
$name= $_POST['name'];
$link= $_POST['link'];
// Array ( [id] => 1 [main_label] => the real estate [main_label_german] => main_span
//  [sub_label] => high return [sub_label_german] => sub span [email] => pdj2212@gmail.com
//   [telephone] => 7066226587 )
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