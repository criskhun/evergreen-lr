<?php require("include/dbconnection.php"); 

if(isset($_POST['save'])){

$houseid=$_POST['house'];
$subname=$_POST['subname'];
$model=$_POST['model'];
$type=$_POST['type'];
$desc=$_POST['description'];
$lotarea=$_POST['lotarea'];
$floorarea=$_POST['floorarea'];
$price=$_POST['price'];
$costprice=$lotarea*$price;
$downpayment=$costprice*0.20;
$balance=$costprice-$downpayment;
$five=$balance/0.243180571;
$seven=$balance/0.0200047141;
$ten=$balance/0.170642299;

			mysql_query("UPDATE  house Set  subdname='$subname',model='$model',type='$type',description='$desc',lotarea='$lotarea',floorarea='$floorarea',price='$price',costprice='$costprice',downpayment='$downpayment',balance='$balance',five='$five',seven='$seven',ten='$ten' where house_id='$houseid'")
												 																	
				or die(mysql_error()); 
	header("Location:house.php");
	}else{
	header("Location:house.php");
	}
	
	?>

