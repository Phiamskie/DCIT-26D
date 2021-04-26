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
	$change= $cashgiven - $discounted_amount;

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