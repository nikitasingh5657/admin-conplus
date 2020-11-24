<?php
  session_start();
$uid=$_SESSION['conplus_id'];
echo $uid;
 
if($uid!='' || $uid!=0)
{
    //echo '<script>alert("Already Login")</script>'; 

}
else
{
   
    header("Location: https://rudraexpo.com/conplusinvest-admin/index.php"); 
  exit();
}
?>

