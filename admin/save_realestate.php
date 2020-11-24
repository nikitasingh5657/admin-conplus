<?php 

include '../connect.php';
//print_r($_POST);



$id=$_POST['id'];
$heading= $_POST['heading'];
$content= $_POST['description'];
$old= $_POST['old'];


if(!empty($_FILES['rimage']['name']))	
{
    $filename = $_FILES["rimage"]["name"]; 
    $tempname = $_FILES["rimage"]["tmp_name"];    
    
}else{
    $filename= $_POST['old'];
}


$folder = "../images/estate/".$filename; 

if(!empty($_FILES['rimage']['name']))	
{
    move_uploaded_file($tempname, $folder);   
     $filename = 'https://rudraexpo.com/conplus/images/estate/'.$filename;
}
 
 
if(isset($_REQUEST['add'])) 
	{ 
	    
         mysqli_query($conn, "INSERT into realestate (heading, content, reimage)values('$heading','$content','$filename')");		
        	}
	else if(isset($_REQUEST['update']))
	{
		  $user_id=$_REQUEST['id'];
	    mysqli_query($conn, "update realestate set heading='$heading', content='$content', reimage='$filename' where id=$id");		
	  	}
	else if($_REQUEST['val']=='delete')
	{
		  $id=$_REQUEST['id'];
	     mysqli_query($conn, "update realestate set is_del='yes' where id='$id'"); 
		 
		 
	}


	header("Location:realestate.php");

?>