<?php

//orderdetails
$name_of_an_item='';
$quantity='';
$price ='';
$discount_amount='';
 $discounted_amount='';
 $totalquantity='';
 $totaldiscgiven='';
 $totaldiscamount=''; 

 //cash
 $cashgiven='';
 $change='';

 //radiobutton
 	$seniorcitizen = '';
	$withdiscount = '';
	$employeecard = '';
	$nodiscount = '';

 if($_SERVER['REQUEST_METHOD']=='POST'){
	$name_of_an_item=$_POST['name_of_an_item'];
	$quantity=$_POST['quantity'];
	$price=$_POST['price'];
	$discount_amount=$_POST['discount_amount'];
	$discounted_amount=$_POST['discounted_amount'];
	$totalquantity=$_POST['totalquantity'];
	$totaldiscgiven=$_POST['totaldiscgiven'];
	$totaldiscamount=$_POST['totaldiscamount'];
	$cashgiven=$_POST['cashgiven'];
	$change=$_POST['change'];

	$seniorcitizen = 'unchecked';
	$withdiscount = 'unchecked';
	$employeecard = 'unchecked';
	$nodiscount = 'unchecked';
	

	if(isset($_POST['calculation'])){

	//discount amount
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$discount_amount = ($quantity * $price) * 0.25;
	
	//discounted amount
	$quantity =$_POST['quantity'];
	$price = $_POST['price'];
	$discounted_amount = ($quantity * $price ) - $discount_amount;
	
	
	//total quantity
	$totalquantity=$_POST['quantity'];

	//totaldiscountgiven
	$totaldiscgiven=$_POST['discount_amount'];

	//totaldiscounted amount
	$totaldiscamount=$_POST['discounted_amount'];

 }
 
 	if(isset($_POST['sukli'])){
	$change = $cashgiven - $discounted_amount;

}

 if(isset($_POST['new'])){
	$name_of_an_item='';
 	$quantity='';
 	$price ='';
 	$discount_amount='';
 	$discounted_amount='';
 	$totalquantity='';
	$totaldiscgiven='';
 	$totaldiscamount='';

 	//cash
 	$cashgiven='';
 	$change='';
}


}
?>
<!doctype html>
<html>
<head>
<script src="computation.js"></script>
<script src="scripting/function.js"></script>
<link rel="stylesheet" href="styles/styleforpos.css">
<style>
		body{
	background-color:  #189AB4;
	font-weight:100;
	color: burlywood;
	font-size: 20px;
	}
	.btn {
  	position: relative;
  	width: 150px;
  	top: -400px;
  	left: 900px;
 	height: 50px;
  	padding: 5px 5px 5px 5px;
  	font-size:20px;
	background-color: #05445E;
    color: #D4F1F4;
 
	}
	.calculator{
	position:relative;
	border-radius: 5px;
	border: solid gray 1px;
	width: 18%;
	border-radius: 3px;
	background: white;
	padding: 10px;
	margin: 15px 2px 2px 2px;
	top: -200px;
	left: 1230px;
	}
	input[type="button"] 
		{ 
		background-color:#05445E; 
		color: #D4F1F4;
		border: solid black 2px; 
		width:90px;
		height: 30px;
		} 

		input[type="text"] 
		{ 
		background-color:white; 
		border: solid black 2px; 
		width:98%;
		height: 40px; 
		} 
</style>
</head>
<body>

<form action="pos.php" method="POST">
	<div class="main_wrapper">
	<img src="images/header.jpg"  style="width: 2000px; height:300px;" class="container" alt="banner">
	</div>
	
<fieldset class="orderdetails">
		<legend class="legend"> Order Details: </legend> 
	<div><!--1st Table-->
		<table>
			<tr>
			<td>Name of an Item:</td>
			<td><input type="text" name="name_of_an_item"  id="name_of_an_item" style="width:250px" value="<?php echo $name_of_an_item;?>"></td>
			</tr>
			<tr>
			<td>Quantity:</td>
			<td><input type="text" name="quantity" style="width:250px" value="<?php echo $quantity;?>"></td>
			</tr>
			<tr>
			<td>Price:</td>
			<td><input type="text" name="price" id="price" style="width:250px" value="<?php echo $price;?>"></td>
			</tr>
			<tr>
			<td>Discount Amount:</td>
			<td><input type="text" name="discount_amount" style="width:250px" value="<?php echo $discount_amount;?>"></td>
			</tr>
			<tr>
			<td>Discounted Amount:</td>
			<td><input type="text" name="discounted_amount" style="width:250px" value="<?php echo $discounted_amount;?>"></td>
			</tr>
			<tr>
			<td>Total Quantity:</td>
			<td><input type="text" name="totalquantity" style="width:250px" value="<?php echo $totalquantity;?>"></td>
			</tr>
			<tr>
			<td>Total Discount Given</td>
			<td><input type="text" name="totaldiscgiven" style="width:250px" value="<?php echo $totaldiscgiven;?>"></td>
			</tr>
			<tr>
			<td>Total Discounted Amount:</td>
			<td><input type="text" name="totaldiscamount" style="width:250px" value="<?php echo $totaldiscamount;?>"></td>
			</tr>
		</table>
	</div>
</fieldset>

<fieldset class="orderdiscount">
		<legend class="legend"> Order Discount Options</legend>
	<div>
				<input type="radio" name="discount" value='seniordiscount' <?php echo $seniorcitizen;?>>Senior Citizen
				<input type="radio" name="discount" value='withdiscount' <?php echo $withdiscount;?>>With Disc Card
				<input type="radio" name="discount" value='employeecard' <?php echo $employeecard;?>>Employee Card
				<input type="radio" name="discount" value='nodiscount' <?php echo $nodiscount;?>> No Discount
	</div>
 </fieldset>
	
<div class="style3">
		<table>
			<tr>
				<td> Cash Given </td>
				<td><input type="text" name="cashgiven" style="width:250px" value="<?php echo $cashgiven;?>"></td>
			</tr>
			<tr>
				<td> Change </td>
				<td><input type="text" name="change" style="width:250px" value="<?php echo $change;?>"></td>
			</tr>
		</table>
</div>
	
<!-- gallery -->	
<div class="gallery">
<figure>
        <img src="images/buffalo.jpg" alt="buffalo">
        <input type="checkbox" id="checkbox1" name="buffalo" onclick="cb1()" value="Buffalo Wings" >
		<label>Buffalo Wings</label>
      </figure>
      <figure>
        <img src="images/teriyaki.jpg" alt="terriyaki">
        <input type="checkbox" id="checkbox2"  name="terriyaki" onclick="cb2()" value="Terriyaki Wings">
		<label>Teriyaki Wings</label>
      </figure>
      <figure>
        <img src="images/soygarlic.jpg" alt="soygarlic">
        <input type="checkbox" id="checkbox3" name="soygarlic" onclick="cb3()" value="Soy Garlic Wings">
		<label>Soy Garlic</label>
      </figure>
      <figure>
        <img src="images/honeyglazed.jpg" alt="honeyglazed">
        <input type="checkbox" id="checkbox4" name="honeyglazed" onclick="cb4()" value="Honey Glazed">
		<label>Honey Glazed</label>
      </figure>
      <figure>
        <img src="images/mango.jpg" alt="mango">
        <input type="checkbox" id="checkbox5" name="mango" onclick="cb5()" value="Mango Habanero">
		<label>Mango Habanero</label>
      </figure>
      <figure>
        <img src="images/sriracha.jpg" alt="sriracha">
        <input type="checkbox" id="checkbox6" name="sriracha" onclick="cb6()" value="Sriracha Wings">
		<label>Sriracha Wings</label>
      </figure>
      <figure>
        <img src="images/gravy.jpg" alt="gravy">
		<input type="checkbox" id="checkbox7" name="gravy" onclick="cb7()" value="Gravy">
		<label >Gravy</label>
      </figure>
      <figure>
        <img src="images/pineapple.jpg" alt="carpine">
        <input type="checkbox" id="checkbox8" name="carpine" onclick="cb8()" value="Carribean Pineapple">
		<label>Carribean Pineapple</label>
      </figure>
	<figure>
        <img src="images/fries.jpg" alt="fries">
        <input type="checkbox" id="checkbox9" name="fries" onclick="cb9()" value="French Fries">
		<label >French Fries</label>
      </figure>
	<figure>
        <img src="images/brownsugar.jpg" alt="bsmilktea">
        <input type="checkbox" id="checkbox10" name="bsmilktea" onclick="cb10()" value="Brown Sugar Milktea">
		<label>Brown Sugar</label>
      </figure>
	<figure>
        <img src="images/bobatea.jpg" alt="bobatea">
        <input type="checkbox" id="checkbox11" name="bobatea" onclick="cb11()" value="BobaTea">
		<label>BobaTea</label>
      </figure>
		<figure>
        <img src="images/classic.jpg" alt="classic">
        <input type="checkbox" id="checkbox12" name="classic" onclick="cb12()" value="Classic Milktea">
		<label>Classic Milktea</label>
      </figure>
	  <figure>
        <img src="images/hawaiianpizza.jpg" alt="hawaiian">
        <input type="checkbox" id="checkbox13" name="hawaiian" onclick="cb13()" value="Hawaiian Pizza">
		<label >Hawaiian Pizza</label>
      </figure>
	<figure>
        <img src="images/pesto.jpg" alt="pesto">
        <input type="checkbox" id="checkbox14" name="pesto" onclick="cb14()" value="Pesto Pizza">
		<label>Pesto Pizza</label>
      </figure>
	  <figure>
        <img src="images/meatpizza.jpg" alt="meatpizza">
        <input type="checkbox" id="checkbox15" name="meatpizza" onclick="cb15()" value="Meat Pizza">
		<label>Meat Pizza</label>
      </figure>
	<figure>
        <img src="images/veganpizza.jpg" alt="veganpizza">
        <input type="checkbox" id="checkbox16" name="veganpizza" onclick="cb16()" value="Vegan Pizza">
		<label>Vegan Pizza</label>
      </figure>
	<figure>
        <img src="images/cheesepizza.jpg" alt="cheese">
        <input type="checkbox" id="checkbox17" name="cheese" onclick="cb17()" value="Cheese Pizza">
		<label>Cheese Pizza</label>
      </figure>
		<figure>
        <img src="images/tunapizaa.jpg" alt="tunnapizza">
        <input type="checkbox" id="checkbox18" name="tunnapizza" onclick="cb18()" value="Tunna Pizza">
		<label>Tuna Pizza</label>
      </figure>
</div>

<!-- gallery -->


	<!-- Calculator-->
<div class="calculator">
	<table border="3"> 
		<tr> 
			<td colspan="3"><input type="text" id="result"/></td> 
			<!-- clr() function will call clr to clear all value -->
			<td><input type="button" value="c" onclick="clr()"/> </td> 
		</tr> 
		<tr> 
			<!-- create button and assign value to each button -->
			<!-- dis("1") will call function dis to display value -->
			<td><input type="button" value="1" onclick="dis('1')" style="width:75px"/> </td> 
			<td><input type="button" value="2" onclick="dis('2')" style="width:75px"/> </td> 
			<td><input type="button" value="3" onclick="dis('3')" style="width:75px"/> </td> 
			<td><input type="button" value="/" onclick="dis('/')" style="width:75px"/> </td> 
		</tr> 
		<tr> 
			<td><input type="button" value="4" onclick="dis('4')" style="width:75px"/> </td> 
			<td><input type="button" value="5" onclick="dis('5')" style="width:75px"/> </td> 
			<td><input type="button" value="6" onclick="dis('6')" style="width:75px"/> </td> 
			<td><input type="button" value="-" onclick="dis('-')" style="width:75px"/> </td> 
		</tr> 
		<tr> 
			<td><input type="button" value="7" onclick="dis('7')" style="width:75px"/> </td> 
			<td><input type="button" value="8" onclick="dis('8')" style="width:75px"/> </td> 
			<td><input type="button" value="9" onclick="dis('9')" style="width:75px"/> </td> 
			<td><input type="button" value="+" onclick="dis('+')" style="width:75px"/> </td> 
		</tr> 
		<tr> 
			<td><input type="button" value="." onclick="dis('.')" style="width:75px"/> </td> 
			<td><input type="button" value="0" onclick="dis('0')" style="width:75px"/> </td> 
			<!-- solve function call function solve to evaluate value -->
			<td><input type="button" value="=" onclick="solve()" style="width:75px"/> </td> 
			<td><input type="button" value="*" onclick="dis('*')" style="width:75px"/> </td> 
		</tr> 
	</table> 
</div>
	<div class="computation">
		<table>
			<tr>
				<td><button class="btn" name="calculation"> Calculate </button></td>
				<td><button class="btn" name="sukli"> Change </button></td>	
			<tr>
			<tr>
			<td><button class="btn" name="new"> New </button> </td>
			<td><button class="btn" name="cancel"> Cancel </button><br> </td>
			</tr>
		</table>
		<table>
		<tr>	
			<td><button class="btn" name="exit" style="width:300px"> Exit</button></td>
			</tr>
		</table>
	</div>
</form>
</body>
</html>

