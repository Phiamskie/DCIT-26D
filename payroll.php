<?php

//personal infor entry
$employee_number="201810387";
$department='Department of Information Technology';
$firstname='Sophia Marie';
$middlename='Fernandez';
$surname='Guevarra';
$civilstat='Single';
$designation='MIS';
$qualifieddependentsstatus='ME';
$employeestat='Job Order';

//input data basic income
$rate_per_hour='';
$hours_per_cutoff='';
$incomepercutoff='';

//input data honararium
$honorariumhour='';
$honorariumcutoff='';
$totalhonorarium='';

//input data other icome
$incomehour='';
$incomecutoff='';
$totalotherincome='';

//for formula formulation (income Summary)
$gross_income='';
$net_income='';

//regular deductions
$sss_contri=0.00;
$philhealth_contri=0.00;
$pagibig_contri=200;
$incometax_contri=0.00;

//other deductions
$sss_loan='';
$pagibig_loan='';
$faculty_savings_deposit='';
$faculty_savings_loan='';
$salary_loan='';


//deduction Summary
$totaldeductions='';


if($_SERVER['REQUEST_METHOD']=='POST'){
$employee_number=$_POST['employee_number'];
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$surname=$_POST['surname'];
$civilstat=$_POST['civilstat'];
$designation=$_POST['designation'];
$qualifieddependentsstatus=$_POST['qualifieddependentsstatus'];
$paydate=$_POST['paydate'];
$employeestat=$_POST['employeestat'];

$rate_per_hour=$_POST['rate_per_hour'];
$hours_per_cutoff=$_POST['hours_per_cutoff'];
$incomepercutoff=$_POST['incomepercutoff'];

$honorariumhour=$_POST['honorariumhour'];
$honorariumcutoff=$_POST['honorariumcutoff'];
$totalhonorarium=$_POST['totalhonorarium'];

$incomehour=$_POST['incomehour'];
$incomecutoff=$_POST['incomecutoff'];
$totalotherincome=$_POST['totalotherincome'];

$gross_income=$_POST['gross_income'];
$net_income=$_POST['net_income'];
$sss_contri=$_POST['sss_contri'];
$philhealth_contri=$_POST['philhealth_contri'];
$pagibig_contri=$_POST['pagibig_contri'];
$incometax_contri=$_POST['incometax_contri'];
$sss_loan=$_POST['sss_loan'];
$pagibig_loan=$_POST['pagibig_loan'];
$faculty_savings_deposit=$_POST['faculty_savings_deposit'];
$faculty_savings_loan=$_POST['faculty_savings_loan'];
$salary_loan=$_POST['salary_loan'];
$totaldeductions=$_POST['totaldeductions'];

if(isset($_POST['grossincome_calculate'])){
	
	//basic pay
	$rate_per_hour = $_POST['rate_per_hour'];
	$hours_per_cutoff = $_POST['hours_per_cutoff'];
	$incomepercutoff = $rate_per_hour * $hours_per_cutoff;

	//honararium
	$honorariumhour=$_POST['honorariumhour'];
	$honorariumcutoff=$_POST['honorariumcutoff'];
	$totalhonorarium= $honorariumhour * $honorariumcutoff;

	//otherincome
	$incomehour=$_POST['incomehour'];
	$incomecutoff=$_POST['incomecutoff'];
	$totalotherincome= $incomehour * $incomecutoff;

	//other deductions
	$sss_loan= $_POST['sss_loan'];
	$pagibig_loan= $_POST['pagibig_loan'];
	$faculty_savings_deposit= $_POST['faculty_savings_deposit'];
	$faculty_savings_loan= $_POST['faculty_savings_loan'];
	$salary_loan= $_POST['salary_loan'];

	//gross income
	$gross_income= $incomepercutoff + $totalhonorarium + $totalotherincome;

	///pagibig
	$pagibig_contri = 200;

	//sss
	if($gross_income >= 1000 && $gross_income <= 1249){
		$sss_contri= 110;}
	else if($gross_income >= 1250){
		$sss_contri = 160;}
	else {
			$sss_contri =0;}
	 
	//philhealth
	if($gross_income >= 1 && $gross_income <=8999 ){
			$philhealth_contri= 200;}
	else if($gross_income >= 9000 && $gross_income <= 9999.99){
			$philhealth_contri = 275;}
	else {
			$philhealth_contri = 870;}
	


	if ($gross_income<=8999.99 && $gross_income>=0){
				$incometax_contri="500.00";} 
	else {
				$incometax_contri="20.00";}
	
	$totaldeductions = $sss_contri + $philhealth_contri + $pagibig_contri +$incometax_contri;
	
}
 
if(isset($_POST['netincome_calculate'])){
	$net_income = $gross_income - $totaldeductions;
}

if(isset($_POST['new'])){
	$employee_number='';
	$department='';
	$firstname='';
	$middlename='';
	$surname='';
	$civilstat='';
	$designation='';
	$qualifieddependentsstatus='';
	$paydate='';
	$employeestat='';
	$rate_per_hour='';
	$hours_per_cutoff='';
	$incomepercutoff='';
	//input data honararium
	$honorariumhour='';
	$honorariumcutoff='';
	$totalhonorarium='';
	//input data other icome
	$incomehour='';
	$incomecutoff='';
	$totalotherincome='';
	//for formula formulation (income Summary)
	$gross_income='';
	$net_income='';
	//regular deductions
	$sss_contri='';
	$philhealth_contri='';
	$incometax_contri='';
	//other deductions
	$sss_loan='';
	$pagibig_loan='';
	$faculty_savings_deposit='';
	$faculty_savings_loan='';
	$salary_loan='';
	//deduction Summary
	$totaldeductions='';

}

}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="styles/style.css" rel="stylesheet" type="text/css">

<style>

	h1{
		color:#D4F1F4;
		text-align: center;
		font-size: 50px;
	}
	p{
		color:aliceblue;
		text-align: center;
		font-size: 30px;
	}
	.main-wrapper{
	position: relative;
	background-color: #75E6DA;
	color: #189AB4;
	left: 120px;
	border-width: 0;
	border-radius: 5px;
	border: solid 10px;
	width: 80%;
	height: 1400px;
	border-radius: 2px;
	background: white;
	margin: 5px 2px 2px 2px;

}
	.btn-calculate{
		position: relative;
		width: 800px;
		top: -1000px;
		left: 630px;
		padding: 15px;
		font-size:30px;
}
	.btn{
		background-color: #05445E;
		color: #D4F1F4;
		height:50px;
		font-size:30px;
		padding: 5px 5px 5px 5px;
	}
</style>
</head>
<body>
	<center>
  <h1> HXH Payroll Application</h1>
  <p>Employee Basic info: </p> </center>
    <form action="payroll.php" method="POST">
	<div class="main-wrapper">
      <div class="basic-info">
		<img src="images/profile.png" id="profile" style="cursor:pointer" /> <br>
		<input id="files-upload" type="file" multiple>
		<input type="file" id="file1" name="image" accept="image/*" capture style="display:none" />
        <table>
          <tr>
            <td>Employee Number:</td>
			      <td><input type="text" style="width:250px" name="employee_number" value="<?php echo $employee_number;?>"></td>
          </tr>
          <tr>
          <td>Department:</td>
			        <td><select name="dept" id="dept" style="width:250px; height:30px; background-color:#D4F1F4; padding: 3px 3px 3px 3px; margin: 10px;" >
  				      <option value="it">Information Technology</option>
  				      <option value="cs">Computer Science</option>
  				      <option value="psyc">Psychology</option>
				        <option value="hrm">Hotel Management and Restaurant</option>
			        	<option value="bm">Business Management</option>
			        </select></td>
          </tr>
        </table>
		<!-- Start of Personal Info  -->
    	<div class="info">
        <table>
			    <tr>
			      <td>Firstname:</td>
			      <td><input type="text" name = "firstname" style="width:250px" value="<?php echo $firstname;?>"></td>
				  <td>Designation</td>
			      <td><input type="text" name="designation" style="width:250px" value="<?php echo $designation;?>"></td>
			    </tr>
			    <tr>
			      <td>Middle Name:</td>
			      <td><input type="text" name="middlename" style="width:250px" value="<?php echo $middlename;?>"></td>
				  <td>Qualified Dependants Status:</td>
			      <td><input type="text" name="qualifieddependentsstatus" style="width:250px" value="<?php echo $qualifieddependentsstatus;?>"></td>
		      </tr>
			    <tr>
			      <td>Surname</td>
			      <td><input type="text" name="surname" style="width:250px" value="<?php echo $surname;?>"></td>
				  <td>Paydate:</td>
				  <td><input type="date" id="start" style="width:250px; height:28px; background-color:#D4F1F4; padding: 3px 3px 3px 3px; margin: 10px;" 
				  name="trip-start" min="1990-01-01" max="2022-12-31" value="<?php echo $paydate;?>"> </td>
			    </tr>
          <tr>
			      <td>Civil Status: </td>
			      <td><input type="text" name="civilstat" style="width:250px" value="<?php echo $civilstat;?>"></td>
				  <td>Employee Status:</td>
			      <td><input type="text" name="employeestat" style="width:250px" value="<?php echo $employeestat;?>"></td>
			    </tr>
		</table>
		</div>
	  <!-- End of Personal info --> 

		<!-- Basic Income -->
		<fieldset class="basic-income">
		<legend style="background: #DCEDC2"> Basic Income: </legend>
     	 <div>
		    <table>
			    <tr>
			      <td>Rate per Hour:</td>
           <td> <input type="text" name = "rate_per_hour" style="width: 250px" value="<?php echo $rate_per_hour;?>"></td>
			   </tr>
		     <tr>
		      <td>No. of Hours/Cut Off:</td>
			    <td><input type="text" name="hours_per_cutoff" style="width:250px" value="<?php echo $hours_per_cutoff;?>"></td>
			  </tr>
			  <tr>
		    	<td>Income Per Cut Off:</td>
			    <td><input type="text" name="incomepercutoff" style="width:250px" value="<?php echo $incomepercutoff;?>"></td>
			  </tr>
		</table>
		</div>
	</fieldset>
 	<!-- Basic Income -->


	<!-- Honararium -->
	<fieldset class="honararium">
		<legend style="background: #DCEDC2"> Honorarium Income: </legend>
		<div>
		<table>
			<tr>
			<td>Rate per Hour:</td>
			<td><input type="text" name="honorariumhour" style="width:250px" value="<?php echo $honorariumhour;?>"></td>
			</tr>
			<tr>
			<td>No. of Hours/Cut Off:</td>
			<td><input type="text" name="honorariumcutoff" style="width:250px" value="<?php echo $honorariumcutoff;?>"></td>
			</tr>
			<tr>
			<td>Income/ Cut Off:</td>
			<td><input type="text" name="totalhonorarium" style="width:250px" value="<?php echo $totalhonorarium;?>"></td>
			</tr>
		</table>
	</div>
</fieldset>
<!-- End of Honararium -->

	<!-- Start of Other Income -->	
	<fieldset class="otherincome">
	<legend style="background: #DCEDC2"> Other Income </legend>
	<div>
		<table>
			<tr>
			<td>Rate per Hour:</td>
			<td><input type="text" name="incomehour" style="width:250px"  value="<?php echo $incomehour;?>"></td>
			</tr>
			<tr>
			<td>No. of Hours/Cut Off:</td>
			<td><input type="text" name="incomecutoff" style="width:250px"  value="<?php echo $incomecutoff;?>"></td>
			</tr>
			<tr>
			<td>Total Other Income Pay:</td>
			<td><input type="text" name="totalotherincome" style="width:250px" value="<?php echo $totalotherincome;?>"></td>
			</tr>
		</table>
	</div>
</fieldset>
<!-- End of Other Income -->
	
<!-- Start of Income Summary -->	
<fieldset class="sumincome">
		<legend style="background: #DCEDC2"> Summary Income </legend>	
	<div class>
		<table>
			<tr>
			<td>Gross Income: </td>
			<td><input type="text" name="gross_income" style="width:250px"  value="<?php echo $gross_income;?>"></td>
			</tr>
			<tr>
			<td>Net Income:</td>
			<td><input type="text" name="net_income" style="width:250px" value="<?php echo $net_income;?>"></td>
			</tr>
		</table>
	</div>
</fieldset>
<!-- End of Income Summary -->

<!-- Start of Regular Deductions -->
<fieldset class="regdeduc">
		<legend style="background: #DCEDC2"> Regular Deductions: </legend>		
	  <div>
		<table>
			<tr>
			<td>SSS Contributions:</td>
			<td><input type="text" name="sss_contri" style="width:250px"  value="<?php echo $sss_contri;?>"></td>
			<td>PhilHealth Contribution: </td>
			<td><input type="text" name="philhealth_contri" style="width:250px" value="<?php echo $philhealth_contri;?>"></td>
			</tr>
			<tr>
			<td>PagIbig Contribution:</td>
			<td><input type="text" name="pagibig_contri" style="width:250px" value="<?php echo $pagibig_contri;?>"></td>
			<td>Income Tax Contributions:</td>
			<td><input type="text" name="incometax_contri" style="width:250px" value="<?php echo $incometax_contri;?>"></td>
			</tr>
		</table>
    </div>
</fieldset>
<!-- End of Regular Deductions -->

<!-- Start of Other Deductions -->	
<fieldset class="otherdeduc">
		<legend style="background: #DCEDC2"> Other Deductions </legend>		
	<div>
		<table>
			<tr>
			<td>SSS Loan</td>
			<td><input type="text" name="sss_loan" style="width:250px" value="<?php echo $sss_loan;?>"></td>
			</tr>
			<tr>
			<td>Pag-Ibig Loan: </td>
			<td><input type="text" name="pagibig_loan" style="width:250px" value="<?php echo $pagibig_loan;?>"></td>
			</tr>
			<tr>
			<td>Faculty Savings Deposit:</td>
			<td><input type="text" name="faculty_savings_deposit" style="width:250px" value="<?php echo $faculty_savings_deposit;?>"></td>
			</tr>
			<tr>
			<td>Faculty Savings Loan:</td>
			<td><input type="text" name="faculty_savings_loan" style="width:250px" value="<?php echo $faculty_savings_loan;?>"></td>
			</tr>
			<tr>
			<td>Salary Loan:</td>
			<td><input type="text" name="salary_loan" style="width:250px" value="<?php echo $salary_loan;?>"></td>
			</tr>
			<tr><td>Other Deductions</td>
			<td><select name="othdd" id="othdd" style="width:257px; height:28px; background-color:#D4F1F4; padding: 3px 3px 3px 3px; margin: 10px;" >
  				<option value="it">SELECT OTHER DEDUCTION</option>
  				<option value="cs">BANK LOAN</option>
  				<option value="psyc">GSIS</option>
				<option value="hrm">CAR LOAN</option>
				<option value="bm">HOUSE LOAN</option>
			</select></td>
			</tr>
		</table>
	</div>
</fieldset>
<!-- End of Other Deductions -->	
	
<!-- Start of Deduction Summary -->	
<fieldset class="deducsum">
		<legend style="background: #DCEDC2"> Deduction Summary </legend>		
	<div>
		<table>
			<tr>
				<td>Total Deductions:</td>
				<td><input type="text" name="totaldeductions" style="height:50px" value="<?php echo $totaldeductions;?>"></td>
				
			</tr>
		</table>
	</div>
</fieldset>
<!-- End of Deduction Summary-->

	<div class="btn-calculate">
		<tr>
				<td><button class="btn" name="grossincome_calculate"> Calculate Gross Income </button></td>
				<td><button class="btn" name="netincome_calculate"> Calculate New Income </button></td>
				<td><button class="btn" name="new"> New</button></td>
				<td><button class="btn"> Print Preview Payslip </button></td>
				<td><button class="btn"> Print Payslip </button></td>
				<td><button class="btn"> Cancel </button></td>
        <td><button class="btn"> Close </button></td>
		</tr>
	</div>

</div>
</form>
</body>
</html>