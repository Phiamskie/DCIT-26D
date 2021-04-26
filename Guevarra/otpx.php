<?php
session_start(); 

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (isset($_POST['num1']))  {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	
	   return $data;
	}

	$num1 = validate($_POST['num1']);
		
	

	$user_data = 'otp='. $num1;
	if (empty($num1)) {
		header("Location: otp.php?error=OTP is required&$user_data");
	    exit();}
	

		
       else{

	    $sql = "SELECT * FROM authenticatio WHERE otp='$num1' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result)<=0) {
			header("Location: otp.php?error=Invalid otp&$user_data");
		}
		
		
          
            else {
           
	           	header("Location:home.php?Success=OTP verified&$user_data");
		        exit();
           
			}
		   }
			}
else{
	header("Location: otp.php");
	exit();
}
?>