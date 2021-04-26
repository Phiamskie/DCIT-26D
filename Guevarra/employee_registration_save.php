<?php
	$target ="";

	if($_SERVER['REQUEST_METHOD']== "POST"){

		// TO PRESS SAVE BUTTON
		if(isset($_POST['savebtn'])){

			//e$emp_id_no = 4

			$employee_number = $_POST['employee_number'];
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$lname = $_POST['lname'];
			$suffix = $_POST['suffix'];
			$birth_date = $_POST['birth_date'];
			$gender = $_POST['gender'];
			$nationality = $_POST['nationality'];
			$civil_status = $_POST['civil_status'];
			$department = $_POST['department'];
			$designation = $_POST['designation'];
			$qualified_dependent_status = $_POST['qualified_dependent_status'];
			$employee_status = $_POST['employee_status'];
			$pay_date = $_POST['paydate'];
			$contact_no = $_POST['contact_number'];
			$email_address = $_POST['email_address'];
			$other_social_medica_account = $_POST['social_media'];
			$social_medica_account_id = $_POST['social_media_account_id'];
			$address_line1 = $_POST['address_line1'];
			$address_line2 = $_POST['address_line2'];
			$municipality = $_POST['municipality'];
			$state_province = $_POST['state_province'];
			$country = $_POST['country'];
			$zip_code = $_POST['zip_code'];
			$picpath = $_POST['picpath'];

			//move uploaded pic from temp folder to permanent folder

			if(file_exists($picpath)){
				$pic filename = explode('temp/', $picpath)[1];
				rename($picpath, 'uploads/' .$pic_filename);
				$picpath = 'uploads/' .$pic_filename;
			}

			//database connection
			include 'db_connection.php';
			$conn = OpenCon();

			//save employee record to database
			$sql = "INSERT INTO personal_infotbl (employee_no, fname, mname, lname, suffix, birth_date, gender, nationality, civil_status, department, designation, qualified_dependent_status, employee_status, pay_date, contact_no, email_address, other_social_medica_account, social_media_account_id, address_line1, address_line2, municipality, state_province, country, zip_code, picpath) VALUES ('$employee_number', '$fname', '$mname', '$lname', '$suffix', '$birth_date', '$gender', '$nationality', '$contact_no', '$email_address', '$other_social_medica_account', '$social_media_account_id', '$address_line1', '$address_line2', '$municipality', '$state_province', '$country', '$country', '$country', '$zip_code', '$pic_path')";

			if($conn-> query($sql)== TRUE){
				echo "New record created successfully";
			}
			else{
				echo "Error: " .$sql . "<br>" . $conn->error;
			}

			//close 
			$conn -> close ();

			}
			else if (isset($_POST["cancelbtn"])){
				$employee_number ="";
				$fname ="";
				$mname ="";
				$lname ="";
				$suffix ="";
				$birth_date = "";
				$gender ="";
				$nationality ="";
				$civil_status ="";
				$department ="";
				$designation ="";
				$qualified_dependent_status ="";
				$employee_status = "";
				$pay_date ="";
				$contact_no ="";
				$email_address ="";
				$other_social_medica_account ="";
				$social_media_account_id ="";
				$address_line1 = "";
				$address_line2 = "";
				$municipality ="";
				$state_province = "";
				$zip_code ="";
				$picpath = "";
			}
	}
?>