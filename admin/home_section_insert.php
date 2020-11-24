<?php 

include'../connect.php';

$mainlabel= $_POST['main_label'];
$main_label_german= $_POST['main_label_german'];

 $res = "insert into property_info(main_label,main_label_german,is_del) values ('$mainlabel','$main_label_german','no')";
 echo $res;
if(mysqli_query($conn,$res) == TRUE)
{
	echo'<script>';
	
	echo'window.location="home_section.php"';
	echo'</script>';
}
?>