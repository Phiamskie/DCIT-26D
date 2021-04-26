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
 	 var price, quantity, amount_to_pay, discount_amount, discounted_amount, amount_from_customer, change;
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;

 discount_amount = (price * quantity) * .25;
 discounted_amount = (price * quantity) - discount_amount;

 total_discounted_amount += discounted_amount;
 total_discount_amount += discount_amount;
 total_quantity += quantity;

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
 	var price, quantity, discount_amount, discounted_amount;
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;

 discount_amount = (price * quantity) * .20;
 discounted_amount = (price * quantity) - discount_amount;

 total_discounted_amount += discounted_amount;
 total_discount_amount += discount_amount;
 total_quantity += quantity;


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
 	var price, quantity, discount_amount, discounted_amount;
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;
 discount_amount = (price * quantity) * .15;
 discounted_amount = (price * quantity) - discount_amount;

 total_discounted_amount += discounted_amount;
 total_discount_amount += discount_amount;
 total_quantity += quantity;


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
 	var price, quantity, discount_amount, discounted_amount;

 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;
 discount_amount = (price * quantity);
 discounted_amount = (price * quantity) - discount_amount;

 total_discounted_amount += discounted_amount;
 total_discount_amount += discount_amount;
 total_quantity += quantity;


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
 // e.preventDefault();
 if($(this).prop("checked") == true){
 	var price, quantity, discount_amount, discounted_amount, discount_amount, change, cashgiven;

 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;
 cashgiven = $("#cashgiven").val() - 0;

//formula
 discount_amount = (price * quantity)* 0.25;
 discounted_amount = (price * quantity) - discount_amount;

 total_discounted_amount += discounted_amount;
 total_quantity += quantity;
 change = cashgiven - discounted_amount;

 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("discount_amount").value = discount_amount;
 document.getElementById("discounted_amount").value = discounted_amount;
 document.getElementById("total_discounted_amount").value = total_discounted_amount; 
  document.getElementById("total_quantity").value = total_quantity;
 document.getElementById("change").value = change;
 document.getElementById("cashgiven").value = cashgiven;

 $("#seniordiscount").prop( "checked", false );
 $("#withdiscount").prop( "checked", false );
$("#employeecard").prop( "checked", false );
 }
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






});