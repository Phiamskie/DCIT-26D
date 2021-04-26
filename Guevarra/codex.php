<?php
session_start(); 

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (isset($_POST['uname']))  {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	
	   return $data;
	}

	$uname = validate($_POST['uname']);
		$_SESSION['globalcode'] = $num1 = rand(10000,999999);

	$user_data = 'uname='. $uname;
	if (empty($uname)) {
		header("Location: code.php?error=username is required&$user_data");
	    exit();}
		
       else{

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result)<=0) {
			echo("USERNAME NOT FOUND");
	      
		}
		   else {
           $sql2 = "INSERT INTO authenticatio(otp,username) VALUES('$num1','$uname')";
			 $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
			echo"<script>alert('$num1');window.location='otp.php'</script>";
			exit();
           }else {
	           	header("Location: code.php?error=unknown error occurred&$user_data");
		        exit();
           }
		
}
	   }
}
else{
	header("Location: code.php?error=Email is required");
	exit();
}
?>