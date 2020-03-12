


<?php
include("connection.php");
include("header.php");
	echo $name=$_GET['enquiry_full_name'];
	echo $email=$_GET['enquiry_email_id'];
	echo $mobile=$_GET['enquiry_mobile_no'];
	 
	
	$query= "insert into enquiry_details (e_name,e_email,e_mobile) 
	values('$name','$email','$mobile')";
	if(mysqli_query($conn,$query))
	{
		echo "record inserted succesfully";
		
	}
	else
	{
		echo "error";
	}
	
	
	
	include("footer.php");
?>