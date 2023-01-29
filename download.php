<?php
 include("include/dbconnection.php");
									
	$file = $_GET['file'];  				
	
		if( $file == "" ) 					
											
			{
			echo "<html><title>No file has been found</title></body></html>"; 
													
			exit;    						
			} elseif ( ! file_exists( $file ) )      
											
			{
			echo "<html><title>please choose a file to Download</title><body>";
			exit; 
			 	 						
            }
			header("Content-Type: application/force-download"); 
										
											
			header("Content-Disposition: attachment; filename=\"".basename($file)."\";" );  
								
			readfile("$file");	
			
			//header("Location: main_admin_list.php");	
							
			exit();				
			
?>