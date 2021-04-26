<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <title>WebPage 1 Point of Sale</title>
 <script src="scripting/scriptforwebpage1.js"></script>	
 <link href="styles/styleforwebpage1.css" rel="stylesheet" type="text/css">
 <style>
  body{
    background-image: url(images/background.png);
    color: #05445E;
  }
  </style>
</head>
<body>
    <img src="images/header.jpg" class="container" alt="banner">
 <div class="wrapper">
 		<div class="title">
 			<h4><span>Unli Wings Flavor</span>our menu</h4>
        </div>
 	<div class="menu">
            <div class="single-menu">
                	<img src="images/buffalo.jpg" alt="buffalo">
                	<div class="menu-content">
                    <h4>Buffalo Wings <input type="checkbox" id="checkbox1" name="checkbox1" value="" ></h4>
                    <p> Deep-fried chicken wing coated with a spicy sauce and served with a blue cheese dressing</p>
				</div>
            </div>

    		<div class="single-menu">
                	<img src="images/honeyglazed.jpg" alt="honeyglazed">
                	<div class="menu-content">
                    <h4>Honey Garlic Glazed <input type="checkbox" id="checkbox2" name="checkbox2" value=""></h4>
                    <p>This sauce not only tastes amazing, it’s incredible satisfying watching it bubble and morph into a perfectly balanced savoury, sweet and garlicky syrup.</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="images/teriyaki.jpg" alt="terriyaki">
                <div class="menu-content">
                    <h4>Teriyaki<input type="checkbox" id="checkbox3" name="checkbox3" value=""></h4>
                     <p>These crispy teriyaki chicken wings are baked to perfection and coated in a simple homemade teriyaki sauce. Perfect as a flavorful snack or tasty party food!</p>
                </div>
            </div>

             <div class="single-menu">  
             <img src="images/soygarlic.jpg" alt="soygarlic"> 
                <div class="menu-content">
                    <h4>Soy Garlic<input type="checkbox" id="checkbox4" name="checkbox4" value=""></h4>
                    <p>Like most glazed Korean fried chicken recipes, there are three key parts to these soy garlic chicken wings: double-frying the chicken, making the sauce, then tossing everything together.</p>
                </div>
            </div>

       		<div class="single-menu">
                <img src="images/sriracha.jpg" alt="">
                <div class="menu-content">
                    <h4>Sriracha <input type="checkbox" id="checkbox5" name="checkbox5" value=""></h4>
                    <p>Spicy Buffalo wings get a little twist with some Sriracha sauce. </p>
                </div>
            	</div>

       		<div class="single-menu">
                <img src="images/mango.jpg" alt="">
                <div class="menu-content">
                    <h4>Mango Habanero <input type="checkbox" id="checkbox6" name="checkbox6" value="" ></h4>
                    <p>Marinated chicken wings deep fried and then coated with spicy mango sauce and again baked in the oven till crispy from outside and juicy inside.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="orderchoices">
      <legend class="legend"> Wings Choices </legend>
      <input type="radio" name="optradio" id="optradio_A">
      <label for="optradio_A">Food Bundle A </label><br>
      <input type="radio" name="optradio" id="optradio_B">
    <label for="optradio_B">Food Bundle B</label>
  </div>


<div class="bundlesA">
   <legend class="legend">Food Bundle A</legend>
        <input type="checkbox" name="chicken" id="chicken" value="" disabled> 4 Flavors of Your Choice <br>
        <input type="checkbox" name="fries5" id="fries5" value="" disabled> 5 Large Fries <br>
        <input type="checkbox" name="icetea1" id="icetea1" value="" disabled> 1 Liter Ice Tea  <br>
        <input type="checkbox" name="milktea3" id="milktea3" value="" disabled> 3 Milktea  <br>
        <input type="checkbox" name="pizza2" id="pizza2" value="" disabled> 2 Pizza Delights
</div>

 <div class="bundlesB">
    <legend class="legend">Food Bundle B</legend>
       <input type="checkbox" name="chickenB" id="chickenB" value="" disabled> 3 Flavors of Your Choice <br>
       <input type="checkbox" name="fries3" id="fries3" value="" disabled> 3 Large Fries <br>
       <input type="checkbox" name="icetea2" id="icetea2" value="" disabled> 2 Liters Ice Tea  <br>
       <input type="checkbox" name="carbonara" id="carbonara" value="" disabled> 1 Family Pack Carbonara <br>
       <input type="checkbox" name="pizzaB" id="pizzaB" value="" disabled> 1 Pizza Delights
 </div>

 <div class="orderdetails">
    <legend class="legend"> Order Details</legend>
      <div>
        <table>
          <tr>
             <td><div class="input_box" >
              <span>Price:</span>
                 <input type="text" name="price" id="price" style="background-color: lightgray" value="" disabled>
              </div></td>
              <td> <div class="input_box" >
                  <span >Quantity:</span>
                  <input type="text" name="quantity" id="quantity" value="">
             </div></td>
            </tr>
            <tr>
             <td><div class="input_box" >
                  <span> Discount Amount: </span>
                  <input type="text" name="discountamount" id="discountamount" style="background-color: lightgray" value="" disabled>
              </div> </td>
             <td> <div class="input_box">
                  <span> Discounted Amount:</span>
                  <input type="text" name="discountedamount" id="discountedamount" style="background-color: lightgray" value="" disabled>
              </div></td>
            </tr>
            <tr>
            <td> <div class="input_box">
                  <span>Total Bills:</span>
                  <input type="text" name="totalbills" id="totalbills" style="background-color: lightgray" value="" disabled>
            </div> </td>
             <td> <div class="input_box">
                  <span>Total Quantity:</span>
                  <input type="text" name="totalquantity" id="totalquantity" style="background-color: lightgray" value="" disabled>
              </div></td>
            </tr>
            <tr>
                  <td><div class="input_box">
                  <span>Cash Given:</span>
                  <input type="text" name="cashgiven" id="cashgiven" value="">
                   </div></td>
             <td> <div class="input_box">
                  <span>Change:</span>
                  <input type="text" name="change" id="change" style="background-color: lightgray" value="" disabled>
              </div></td>
            </tr>
      </table>
    </div>

<div class="alldata">
  <table>
    <tr>
      <td>
      <textarea rows="11" cols="18" id="order_summary" name="order_summary" value=""></textarea>
      </td>
      <td><img width="225" height="145"><br>
      <b>Order Image</b></td>
    </tr>
  </table>
</div>


<div class="container" id="process_button" style="margin-top:43px;">
  <button type="submit" id="btn_calculate_bills" name="calculate_bills" class="btn btnprimary btn_process">CALCULATE BILLS</button>
  <button type="submit" id="btn_change" name="change" class="btn btn-info btn_process">CHANGE</button>
  <button type="submit" id="btn_print" name="print" class="btn btn-secondary btn_process">PRINT TRANSACTION</button>
  <button type="submit" id="btn_new" name="new" class="btn btn-secondary btn_process">NEW</button>
  <button type="submit" id="btn_exit" name="exit" class="btn btn-info btn_process">EXIT</button>
</div>
</div>
</body>
</html>