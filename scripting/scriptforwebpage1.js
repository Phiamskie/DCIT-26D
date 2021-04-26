$(document).ready(function(){

	var totalbills = 0.00;
	var totalquantity = 0.00;
	var totaldiscountedamount = 0.00;
	var totaldiscountamount = 0.00;

 //for clicking the checkboxes
 $("#checkbox1").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 199.00;
 document.getElementById("order_summary").value = "Buffalo Wings";
 $("#price").focus();
 } else {
 document.getElementById("price").value = "";
 document.getElementById("order_summary").value = "";
 }
 });
 $("#checkbox2").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 199.00;
 document.getElementById("order_summary").value = "Honey Garlic Glazed";
 $("#price").focus();
 } else {
 document.getElementById("price").value = "";
 document.getElementById("order_summary").value = "";
 }
 });
 $("#checkbox3").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 199.00;
 document.getElementById("order_summary").value = "Terriyaki Wings";
 $("#price").focus();
 } else {
 document.getElementById("price").value = "";
 document.getElementById("order_summary").value = "";
 }
 });
 $("#checkbox4").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 199.00;
 document.getElementById("order_summary").value = "Soy Garlic";
 $("#price").focus();
 } else {
 document.getElementById("price").value = "";
 document.getElementById("order_summary").value = "";
 }
 });
 $("#checkbox5").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 199.00;
 document.getElementById("order_summary").value = "Sriracha";
 $("#price").focus();
 } else {
 document.getElementById("price").value = "";
 document.getElementById("order_summary").value = "";
 }
 });
 $("#checkbox6").click(function(e){
 if($(this).prop("checked") == true){
 document.getElementById("price").value = 199.00;
 document.getElementById("order_summary").value = "Mango Habanero";
 $("#price").focus();
 } else {
 document.getElementById("price").value = "";
 document.getElementById("order_summary").value = "";
 }
 });

 // scripts or codes to be executed when clicking the CALCULATE BILLS button
 $("#btn_calculate_bills").click(function(e){
 e.preventDefault(); //to refresh the process of the portion of the codes instead of the whole page
 //declaration of variables
 var price, quantity, discountamount, discountedamount;
 
 //to convert string value from input box into numeric value use for computation
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;

 //discount
discountamount = (price * quantity )* .25;
discountedamount = (price * quantity) - discountamount;

totaldiscountedamount += discountedamount;
totaldiscountamount += discountamount;

 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("discountamount").value = discountamount;
 document.getElementById("discountedamount").value = discountedamount;
 });

 // scripts or codes to be executed when clicking the CHANGE button
 $("#btn_change").click(function(e){
 e.preventDefault();
 var price, quantity, discountamount, discountedamount, cashgiven, change;
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;
 cashgiven = $("#cashgiven").val() - 0;

 discountamount = (price * quantity )* .25;
 discountedamount = (price * quantity) - discountamount;

 totalbills += discountedamount;
 totalquantity += quantity;

 change = cashgiven - discountedamount; 

 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("discountamount").value = discountamount;
 document.getElementById("discountedamount").value = discountedamount;
 document.getElementById("totalbills").value = totalbills;
 document.getElementById("totalquantity").value = totalquantity; 
 document.getElementById("change").value = change;
 });
 

 // scripts or codes to be executed when clicking the NEW button
 $("#btn_new").click(function(e){
 e.preventDefault();
 document.getElementById("price").value ="";
 document.getElementById("quantity").value = "";
 document.getElementById("discountamount").value = "";
 document.getElementById("discountedamount").value = "";
 document.getElementById("cashgiven").value = "";
 document.getElementById("change").value = ""; 
 document.getElementById("order_summary").value = "";
 $("#checkbox1").prop( "checked", false );
 $("#checkbox2").prop( "checked", false );
 $("#checkbox3").prop( "checked", false );
 $("#checkbox4").prop( "checked", false );
 $("#checkbox5").prop( "checked", false );
 $("#checkbox6").prop( "checked", false );
 $("#checkbox6").prop( "checked", false );
 $("#optradio_A").prop( "checked", false );
 $("#optradio_B").prop( "checked", false );
 $("#chickenB").prop( "checked", false);
 $("#fries3").prop( "checked", false );
 $("#icetea2").prop( "checked", false );
 $("#carbonara").prop( "checked", false );
 $("#pizzaB").prop( "checked", false );
 $("#chicken").prop( "checked", false );
 $("#fries5").prop( "checked", false );
 $("#icetea1").prop( "checked", false );
 $("#milktea3").prop( "checked", false );
 $("#pizza2").prop( "checked", false );
 });
 
 $("#btn_exit").click(function(e){
 	e.preventDefault();
 });

 // scripts or codes to be executed when clicking the FOOD BUNDLE A radiobutton
 
 $("#optradio_A").click(function(e){
 if($(this).prop("checked") == true){
 $("#chicken").prop( "checked", true );
 $("#fries5").prop( "checked", true );
 $("#icetea1").prop( "checked", true );
 $("#milktea3").prop( "checked", true );
 $("#pizza2").prop( "checked", true );
 $("#chickenB").prop( "checked", false);
 $("#fries3").prop( "checked", false );
 $("#icetea2").prop( "checked", false );
 $("#carbonara").prop( "checked", false );
 $("#pizzaB").prop( "checked", false );
 document.getElementById("price").value = 1990.00;
 document.getElementById("order_summary").value = "Food Bundle A";
 } else {
 document.getElementById("price").value = "";
 }
 });

 $("#optradio_B").click(function(e){
 if($(this).prop("checked") == true){
 $("#chickenB").prop( "checked", true );
 $("#fries3").prop( "checked", true );
 $("#icetea2").prop( "checked", true );
 $("#carbonara").prop( "checked", true );
 $("#pizzaB").prop( "checked", true );
 $("#chicken").prop( "checked", false );
 $("#fries5").prop( "checked", false );
 $("#icetea1").prop( "checked", false );
 $("#milktea3").prop( "checked", false );
 $("#pizza2").prop( "checked", false );
 document.getElementById("price").value = 1990.00;
 document.getElementById("order_summary").value = "Food Bundle B";

 } else {
 document.getElementById("price").value = "";
 }
 });
 });
