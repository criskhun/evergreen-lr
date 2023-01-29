<?php 
include("include/dbconnection.php");
$activity=$_POST['directory'];
$date=$_POST['date'];
$id=$_POST['id'];

 //upload image
 $file=$_FILES['image']['tmp_name'];


	if (!isset($file)) {
	echo "";
	}else{
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}
		if ($image_size=="") {
		
			echo "Select an Image!";
			
		}
		else{
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$activity."/" . $_FILES["image"]["name"]);
			$img="uploads/".$activity."/" . $_FILES["image"]["name"];

			//move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$activity."/" . $_FILES["image"]["name"]);
			//$img="uploads/".$activity."/" . $_FILES["image"]["name"];
			
	$sql="INSERT INTO activitylist (activity_id,activity_name,filename, dateuploaded) VALUES ('$id','$activity','$img','$date')";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
header("location:events.php");
exit();
}
}
?>
