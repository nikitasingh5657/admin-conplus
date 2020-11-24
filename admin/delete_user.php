<?php 

include '../connect.php';
//print_r($_POST);
$id= $_GET['id'];
// Array ( [id] => 1 [main_label] => the real estate [main_label_german] => main_span
//  [sub_label] => high return [sub_label_german] => sub span [email] => pdj2212@gmail.com
//   [telephone] => 7066226587 )
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