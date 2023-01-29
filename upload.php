<?php
$activity=$_POST['directory'];
$date=$_POST['date'];
$id=$_POST['id'];

  $success = 0;
  $fail = 0;
  $uploaddir = "uploads/".$activity."/";
  for ($i=0;$i<4;$i++)
  {
   if($_FILES['userfile']['name'][$i])
   {
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name'][$i]);
    $ext = strtolower(substr($uploadfile,strlen($uploadfile)-3,3));
    if (preg_match("/(jpg|gif|png|bmp)/",$ext))
    {
     if (move_uploaded_file($_FILES['userfile']['tmp_name'][$i], $uploadfile))	
     {
	 	$sql="INSERT INTO activitylist (activity_id,activity_name,filename, dateuploaded) VALUES ('$id','$activity','$uploadfile','$date')";

      $success++;
     }
     else
     {
     echo "Error Uploading the file. Retry after sometime.\n";
     $fail++;
     }
    }
    else
    {
     $fail++;
    }
   }
  }
  echo "<br> Number of files Uploaded:".$success;
  echo "<br> Number of files Failed:".$fail;
?>