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
    //echo '<script>alert("'.$uid.'111")</script>';
    // echo'<script>';
	
    // echo'window.location="/conplusinvest-admin/index.php"';
    
    // echo'</script>';
    header("Location: https://rudraexpo.com/conplusinvest-admin/index.php"); 
  exit();
}
?>

