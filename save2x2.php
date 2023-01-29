 <?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("reservation") or die(mysql_error());
$buyer=$_POST['buyer'];
$date=$_POST['date'];
$email=$_POST['email'];

 //upload image
 $file=$_FILES['image']['tmp_name'];


	if (!isset($file)) {
	echo "";
	}else{
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);
		}
		if ($image_size=="") {
		
			echo "Select an Image!";
			
		}
		else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"requirements/2x2picture/" . $_FILES["image"]["name"]);
			$picture="requirements/2x2picture/" . $_FILES["image"]["name"];
	//Create query
	$sql="INSERT INTO picture (email,buyer,filename, dateuploaded) VALUES ('$email','$buyer','$picture','$date')";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
header("location:upload.success.php");
exit();
}

?>