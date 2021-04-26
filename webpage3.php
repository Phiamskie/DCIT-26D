
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Webpage 3 Ordering Application</title>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="scripting/computation.js"></script>
  <script src="scripting/scriptforwebapge3.js"></script>
 <link rel="stylesheet" href="styles/styleforwebpage3.css">
<style>
	body{
		background-image: url(images/background.png);
	}
	.calculator{
	position:relative;
	border-radius: 5px;
	border: solid gray 1px;
	width: 20%;
	border-radius: 3px;
	background: white;
	padding: 10px;
	margin: 15px 2px 2px 2px;
	top: -730px;
	left: 1200px;
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
		.orderdetails{
	position: relative;
	border-width: 0;
	border-radius: 5px;
	border: solid gray 2px;
	width: 35%;
	border-radius: 3px;
	background: white;
	margin: 2px 2px 2px 2px;
	height: 780px;
	top: -250px;
	left: 350px;
	}
	.gallery{
 	display: flex;
  	width: 1300px;
  	margin: auto;
  	justify-content: space-between;
  	flex-wrap: wrap;
  	position: relative;
  	left: 10px;
  	top: 50px;
	}
	figure{
  	width: 200px;
  	margin: 8px 0;
  	border: 1px solid #777;
  	padding: 8px;
  	box-sizing: border-box;
  	background-color: #fff;
  	box-shadow: 5px 10px 8px #888888;
	}
	figure img{
  	width: 100%;
  	height: 100px
	}
	label  {
  	text-align:center;
  	padding: 4px 4px 4px 30px;
	}

	label:hover{
		color:red;
	}
	 input[type="text"] 
    { 
    background-color:#D4F1F4; 
    border: solid black 2px;
    } 
</style>
</head>
<body>
 <div class="main_wrapper">
 	<img src="images/header.jpg" class="pic" alt="banner">
 <!-- picture of the product -->
 	<div class="gallery">
 	<figure>
 		<img src="images/buffalo.jpg" alt="buffalo">
 			<label for="buffalo" id="buffalo" value=""> Buffalo Wings </label>
	</figure>
	<figure>
 		<img src="images/teriyaki.jpg" alt="terriyaki">
 			<label for="terriyaki" id="terriyaki" value="" > Terriyaki Wings </label>
	</figure>
	<figure>
 		 <img src="images/soygarlic.jpg" alt="soygarlic">
 			<label for="soygarlic" id="soygarlic" value="" > Soy Garlic Wings </label>
	</figure>
	<figure>
 		 <img src="images/mango.jpg" alt="mango">
 			<label for="mango" id="mango" value="" > Mango Habanero </label>
	</figure>
	<figure>
 		 <img src="images/honeyglazed.jpg" alt="honeyglazed">
 			<label for="honeyglazed" id="honeyglazed" value="" > Honey Glazed </label>
	</figure>
	<figure>
 		 <img src="images/sriracha.jpg" alt="sriracha">
 			<label for="sriracha" id="sriracha" value="" > Sriracha Wings </label>
	</figure>
	<figure>
 		 <img src="images/gravy.jpg" alt="gravy">
 			<label for="gravy" id="gravy" value="" > Gravy </label>
	</figure>
	<figure>
 		 <img src="images/pineapple.jpg" alt="carpine">
 			<label for="carpine" id="carpine" value="" style="padding-left: 10px;"> Carribean Pineapple </label>
	</figure>
	<figure>
 		 <img src="images/fries.jpg" alt="fries">
 			<label for="fries" id="fries" value="" > French Fries </label>
	</figure>
	<figure>
 		 <img src="images/brownsugar.jpg" alt="bsmilktea">
 			<label for="bsmilktea" id="bsmilktea" value="" style="padding-left: 10px;"> Brown Sugar Milktea </label>
	</figure>
	<figure>
 		 <img src="images/bobatea.jpg" alt="bobatea">
 			<label for="bobatea" id="bobatea" value="" > BobaTea </label>
	</figure>
	<figure>
 		 <img src="images/classic.jpg" alt="classic">
 			<label for="classic" id="classic" value="" > Classic Milktea </label>
	</figure>
	<figure>
 		 <img src="images/hawaiianpizza.jpg" alt="hawaiian">
 			<label for="hawaiian" id="hawaiian" value="" > Hawaiian Pizza </label>
	</figure>
	<figure>
 		 <img src="images/pesto.jpg" alt="pesto">
 			<label for="pesto" id="pesto" value="" > Pesto Pizza </label>
	</figure>
	<figure>
 		 <img src="images/meatpizza.jpg" alt="meatpizza">
 			<label for="meat" id="meat" value="" > Meat Pizza </label>
	</figure>
	<figure>
 		 <img src="images/veganpizza.jpg" alt="veganpizza">
 			<label for="vegan" id="vegan" value="" > Vegan Pizza</label>
	</figure>
	<figure>
 		 <img src="images/cheesepizza.jpg" alt="cheese">
 			<label for="cheese" id="cheese" value="" > Cheese Pizza </label>
	</figure>
	<figure>
 		 <img src="images/tunapizaa.jpg" alt="tuna">
 			<label for="tuna" id="tuna" value="" > Tuna Pizza </label>
	</figure>
	</div>

	<fieldset class="orderdiscount">
 		<legend class="legend"> Order Discount Options</legend>
			<input type="radio" name="seniordiscount" id="seniordiscount">
 				<label for="seniordiscount" >Senior Discount (25%)</label><br>
 			<input type="radio" name="withdiscount" id="withdiscount">
				 <label for="withdiscount">With Discount (20%)</label><br>
 			<input type="radio" name="employeecard" id="employeecard">
				<label for="employeecard"> Employee Card (15%)</label><br>
 			<input type="radio" name="nodiscount" id="nodiscount">
 				<label for="nodiscount"> No Discount </label>	
	</fieldset>


	 <div class="computation" id="process_button" style="margin-top:43px;">
 		<button type="submit" id="btn_change" name="change" class="btn btninfo btn_process">CHANGE</button>
 		<button type="submit" id="btn_new" name="new" class="btn btn-secondary btn_process">NEW</button>
 		<button type="submit" id="btn_print" name="print" class="btn btn-secondary btn_process" style="height: 80px;">PRINT TRANSCATION</button>
 		<button type="submit" id="btn_exit" name="exit" class="btn btn-secondary btn_process">EXIT</button>
 	</div>



 	<fieldset class="orderdetails">
		<legend class="legend"> Order Details: </legend> 
 			<span>Item Name:</span>
 			<input type="text" name="item_name" id="item_name" value="" disabled>
			<span>Quantity:</span>
			<input type="text" name="quantity" id="quantity" value="">
			<span>Price:</span>
 			<input type="text" name="price" id="price" value="" disabled>
 			<span>Discount Amount:</span>
 			<input type="text" name="discount_amount" id="discount_amount" value="" disabled>
 			<span>Discounted Amount:</span>
 			<input type="text" name="discounted_amount" id="discounted_amount" value="" disabled>
 			<span>Total Quantity:</span>
 			<input type="text" name="total_quantity" id="total_quantity" value="" disabled>
 			<span>Total Discount Given:</span>
 			<input type="text" name="total_discount_amount" id="total_discount_amount" value="" disabled>
 			<span>Total Discounted Amount:</span>
 			<input type="text" name="total_discounted_amount" id="total_discounted_amount" value="" disabled>
			<span>Cash Given:</span>
 			<input type="text" name="cashgiven" id="cashgiven" value="">
 			<span>Change:</span>
 			<input type="text" name="change" id="change" value="" disabled>
	</fieldset>

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
 
</div>
</form>
</body>



<script>

$(document).ready(function(){

	var total_quantity = 0.00;
	var total_discounted_amount = 0.00;
	var total_discount_amount = 0.00;
 //e.preventDefault();
 $("#seniordiscount").prop( "checked", false );
 $("#withdiscount").prop( "checked", false );
 $("#employeecard").prop( "checked", false );
  $("#nodiscount").prop( "checked", false );

 // scripts or codes to be executed when clicking the FOOD BUNDLE A radiobutton
 $("#seniordiscount").click(function(e){
 // e.preventDefault();
 if($(this).prop("checked") == true){
 	 var price, quantity, discountamount, discountedamount;
 
 //to convert string value from input box into numeric value use for computation
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;

 //discount
discount_amount = (price * quantity ) * .25;
discounted_amount = (price * quantity) - discount_amount;

 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("discount_amount").value = discount_amount;
 document.getElementById("discounted_amount").value = discounted_amount;

 $("withdiscount").prop( "checked", false );
 $("#employeecard").prop( "checked", false );
 $("#nodiscount").prop( "checked", false );
 }
 });

 $("#withdiscount").click(function(e){
 // e.preventDefault();
 if($(this).prop("checked") == true){
 	 var price, quantity, discountamount, discountedamount;
 
 //to convert string value from input box into numeric value use for computation
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;

 //discount
discount_amount = (price * quantity ) * .20;
discounted_amount = (price * quantity) - discount_amount;

 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("discount_amount").value = discount_amount;
 document.getElementById("discounted_amount").value = discounted_amount;

 $("#seniordiscount").prop( "checked", false );
 $("#employeecard").prop( "checked", false );
 $("#nodiscount").prop( "checked", false );
 }
 });

$("#employeecard").click(function(e){
 // e.preventDefault();
 if($(this).prop("checked") == true){
 	 var price, quantity, discountamount, discountedamount;
 
 //to convert string value from input box into numeric value use for computation
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;

 //discount
discount_amount = (price * quantity ) * .15;
discounted_amount = (price * quantity) - discount_amount;

 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("discount_amount").value = discount_amount;
 document.getElementById("discounted_amount").value = discounted_amount;

 $("#seniordiscount").prop( "checked", false );
 $("#withdiscount").prop( "checked", false );
 $("#nodiscount").prop( "checked", false );
 }
 });

$("#nodiscount").click(function(e){
 // e.preventDefault();
 if($(this).prop("checked") == true){
 	 var price, quantity, discountamount, discountedamount;
 
 //to convert string value from input box into numeric value use for computation
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;

 //discount
discount_amount = (price * quantity );
discounted_amount = (price * quantity) - discount_amount;

 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("discount_amount").value = discount_amount;
 document.getElementById("discounted_amount").value = discounted_amount;

 $("#seniordiscount").prop( "checked", false );
 $("#withdiscount").prop( "checked", false );
$("#employeecard").prop( "checked", false );
 }
 });

$("#btn_change").click(function(e){
 e.preventDefault();
 var price, quantity, discountamount, discountedamount, cashgiven, change;
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;
 cashgiven = $("#cashgiven").val() - 0;

 discountamount = (price * quantity );
 discountedamount = (price * quantity) - discountamount;

 total_discount_amount += discount_amount;
 total_discounted_amount += discounted_amount;
 total_quantity += quantity;

 change = cashgiven - discounted_amount; 

 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("discount_amount").value = discount_amount;
 document.getElementById("discounted_amount").value = discounted_amount;
 document.getElementById("total_discount_amount").value = total_discount_amount;
 document.getElementById("total_discounted_amount").value = total_discounted_amount;
 document.getElementById("total_quantity").value = total_quantity; 
 document.getElementById("change").value = change;
 });
 

 $("#btn_new").click(function(e){
 e.preventDefault();
 document.getElementById("item_name").value ="";
 document.getElementById("price").value = "";
 document.getElementById("quantity").value = "";
 document.getElementById("discount_amount").value = "";
 document.getElementById("discounted_amount").value = "";
 document.getElementById("cashgiven").value = "";
 document.getElementById("change").value = "";

 $("#seniordiscount").prop( "checked", false );
 $("#withdiscount").prop( "checked", false );
 $("#employeecard").prop( "checked", false );
 $("#nodiscount").prop( "checked", false );
 });

 $("#buffalo").click(function(e){
 e.preventDefault();
 document.getElementById("buffalo").onclick = document.getElementById("item_name").value = "Buffalo Wings";
 document.getElementById("price").value = "199.00";
 });
 $("#terriyaki").click(function(e){
 e.preventDefault();
 document.getElementById("terriyaki").onclick = document.getElementById("item_name").value = "Terriyaki Wings";
 document.getElementById("price").value = "199.00";
 });
 $("#soygarlic").click(function(e){
 e.preventDefault();
 document.getElementById("soygarlic").onclick = document.getElementById("item_name").value = "Soy Garlic Wings";
 document.getElementById("price").value = "199.00";
 });
 $("#mango").click(function(e){
 e.preventDefault();
 document.getElementById("mango").onclick = document.getElementById("item_name").value = "Mango Habanero"
;
 document.getElementById("price").value = "199.00";
 });
 $("#honeyglazed").click(function(e){
 e.preventDefault();
 document.getElementById("honeyglazed").onclick = document.getElementById("item_name").value = "Honey Glazed";
 document.getElementById("price").value = "199.00";
 });
$("#sriracha").click(function(e){
 e.preventDefault();
 document.getElementById("sriracha").onclick = document.getElementById("item_name").value = "Sriracha Wings";
 document.getElementById("price").value = "199.00";
 });
 $("#gravy").click(function(e){
 e.preventDefault();
 document.getElementById("gravy").onclick = document.getElementById("item_name").value = "Gravy"
;
 document.getElementById("price").value = "199.00";
 });
 $("#carpine").click(function(e){
 e.preventDefault();
 document.getElementById("carpine").onclick = document.getElementById("item_name").value = "Carribean Pineapple";
 document.getElementById("price").value = "199.00";
 });
$("#fries").click(function(e){
 e.preventDefault();
 document.getElementById("fries").onclick = document.getElementById("item_name").value = "French Fries";
 document.getElementById("price").value = "99.00";
 });
$("#bsmilktea").click(function(e){
 e.preventDefault();
 document.getElementById("bsmilktea").onclick = document.getElementById("item_name").value = "Brown Sugar Milktea";
 document.getElementById("price").value = "119.00";
 });
 $("#bobatea").click(function(e){
 e.preventDefault();
 document.getElementById("bobatea").onclick = document.getElementById("item_name").value = "BobaTea"
;
 document.getElementById("price").value = "129.00";
 });
 $("#classic").click(function(e){
 e.preventDefault();
 document.getElementById("classic").onclick = document.getElementById("item_name").value = "Classic Milktea";
 document.getElementById("price").value = "109.00";
 });
$("#hawaiian").click(function(e){
 e.preventDefault();
 document.getElementById("hawaiian").onclick = document.getElementById("item_name").value = "Hawaiian Pizza";
 document.getElementById("price").value = "300.00";
 });
$("#pesto").click(function(e){
 e.preventDefault();
 document.getElementById("pesto").onclick = document.getElementById("item_name").value = "Pesto Pizzaa";
 document.getElementById("price").value = "320.00";
 });
 $("#meat").click(function(e){
 e.preventDefault();
 document.getElementById("meat").onclick = document.getElementById("item_name").value = "Meat Pizza"
;
 document.getElementById("price").value = "360.00";
 });
 $("#vegan").click(function(e){
 e.preventDefault();
 document.getElementById("vegan").onclick = document.getElementById("item_name").value = "Vegan Pizza";
 document.getElementById("price").value = "330.00";
 });
 $("#cheese").click(function(e){
 e.preventDefault();
 document.getElementById("cheese").onclick = document.getElementById("item_name").value = "Cheese Pizza"
;
 document.getElementById("price").value = "400.00";
 });
 $("#tuna").click(function(e){
 e.preventDefault();
 document.getElementById("tuna").onclick = document.getElementById("item_name").value = "Tuna Pizza";
 document.getElementById("price").value = "330.00";
 });

});</script>
</html>