<?php 

include '../connect.php';
print_r($_POST);
$id= $_GET['id'];
$section= $_GET['section'];
if($section=='user')
{
    $res = "update login set is_del='no' where id='$id'";
}
if($section=='home')
{
    $res = "update property_info set is_del='no' where id='$id'";
}
echo $res;
if(mysqli_query($conn,$res) == TRUE)
{
echo'<script>';
echo'alert("Item Restored");';
if($section=='user')
{
    echo'window.location="user_section.php";';
    echo'</script>';
}
if($section=='home')
{
    echo'window.location="home_section.php";';
    echo'</script>';
}


}
?>