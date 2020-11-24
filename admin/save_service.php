<?php 

include '../connect.php';
print_r($_POST);



$ser_id=$_POST['id'];
$serData= $_POST['serData'];
$contact_person= $_POST['contact_person'];
$contact_email= $_POST['contact_email'];
$contact_no= $_POST['contact_no'];
$position= $_POST['position'];

$filename = $_FILES["serImage"]["name"]; 
$tempname = $_FILES["serImage"]["tmp_name"];     
$folder = "../images/".$filename; 




if(!empty($_FILES['serImage']['name']))	
{
    move_uploaded_file($tempname, $folder);
    
    $filename = 'https://rudraexpo.com/conplus/images/'.$_FILES["serImage"]["name"]; 
    // move_uploaded_file($_FILES['serImage']['tmp_name'] , $target_file);
 echo   $res="UPDATE services set serviceData='$serData', 
  serviceImage='$filename',contact_person='$contact_person',contact_email='$contact_email'
  ,contact_no='$contact_no' ,position='$position' where id='$ser_id'";   

}else
{
 echo   $res="UPDATE services set serviceData='$serData' , contact_person='$contact_person',contact_email='$contact_email'
 ,contact_no='$contact_no' ,position='$position' where id='$ser_id'";
}
 

if(mysqli_query($conn,$res) == TRUE)
{
echo'<script>';
echo'alert("Service Updated....!!!");';
echo'window.location="services.php";';
echo'</script>';
}
?>