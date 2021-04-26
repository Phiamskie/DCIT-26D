$(document).ready(function(){
  //e.preventDefault();
  $("#seniordiscount").prop("checked", false);
  $("#withdiscount").prop("checked", false);
  $("#employeecard").prop("checked", false);
  $("#nodiscount").prop("checked", true);

  //script for radio button
  $("#seniordiscount").click(function(e){
    if($(this).prop("checked")== true){
      var price, quantity, discount_amount, discounted_amount;
      price = $("price").val() -0;
      price = $("quantity").val() -0;

      discount_amount = (price * quantity) * .30;
      discounted_amount = (price * quantity) - discount_amount;

      document.getElementById("price").value = price;
      document.getElementById("quantity").value = quantity;
      document.getElementById("discount_amount").value = discount_amount;
      document.getElementById("discounted_amount").value = discounted_amount;

      $("#withdiscount").prop("checked", false);
      $("#employeecard").prop("checked", false);
      $("#nodiscount").prop("checked", true);

    }
  });

  $("#withdiscount").click(function(e){
    if($(this).prop("checked")== true){
      var price, quantity, discount_amount, discounted_amount;
      price = $("price").val() -0;
      price = $("quantity").val() -0;

      discount_amount = (price * quantity) * .20;
      discounted_amount = (price * quantity) - discount_amount;

      document.getElementById("price").value = price;
      document.getElementById("quantity").value = quantity;
      document.getElementById("discount_amount").value = discount_amount;
      document.getElementById("discounted_amount").value = discounted_amount;

      $("#seniordiscount").prop("checked", false);
      $("#employeecard").prop("checked", false);
      $("#nodiscount").prop("checked", true);

    }
  });

  $("#employeecard").click(function(e){
    if($(this).prop("checked")== true){
      var price, quantity, discount_amount, discounted_amount;
      price = $("price").val() -0;
      price = $("quantity").val() -0;

      discount_amount = (price * quantity) * .15;
      discounted_amount = (price * quantity) - discount_amount;

      document.getElementById("price").value = price;
      document.getElementById("quantity").value = quantity;
      document.getElementById("discount_amount").value = discount_amount;
      document.getElementById("discounted_amount").value = discounted_amount;

      $("#seniordiscount").prop("checked", false);
      $("#withdiscount").prop("checked", false);
      $("#nodiscount").prop("checked", true);

    }
  });

  $("#nodiscount").click(function(e){
    if($(this).prop("checked")== true){
      var price, quantity, discount_amount, discounted_amount;
      price = $("price").val() -0;
      price = $("quantity").val() -0;

      discount_amount = (price * quantity);
      discounted_amount = (price * quantity) - discount_amount;

      document.getElementById("price").value = price;
      document.getElementById("quantity").value = quantity;
      document.getElementById("discount_amount").value = discount_amount;
      document.getElementById("discounted_amount").value = discounted_amount;

      $("#seniordiscount").prop("checked", false);
      $("#withdiscount").prop("checked", false);
      $("#employeecard").prop("checked", true);

    }
  });

  $("#new").click(function(e){
    e.preventDefault();
    document.getElementById("name_of_an_item").value ="";
    document.getElementById("quantity").value ="";
    document.getElementById("price").value ="";
    document.getElementById("discount_amount").value ="";
    document.getElementById("discounted_amount").value ="";
    document.getElementById("totalquantity").value ="";
    document.getElementById("totaldiscgiven").value ="";
    document.getElementById("totaldiscamount").value ="";
  });
});


function cb1(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "199";
    var buffalo = document.getElementById("checkbox1").value; //id yung checkbox1 tapos yung buffalo name yun
    document.getElementById("name_of_an_item").value = buffalo;
   }
   function cb2(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "199";
    var terriyaki = document.getElementById("checkbox2").value;
    document.getElementById("name_of_an_item").value = terriyaki;
   }
   function cb3(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "199";
    var soygarlic = document.getElementById("checkbox3").value;
    document.getElementById("name_of_an_item").value = soygarlic;
   }
   function cb4(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "199";
    var honeyglazed = document.getElementById("checkbox4").value;
    document.getElementById("name_of_an_item").value = honeyglazed;
   }
   function cb5(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "199";
    var mango = document.getElementById("checkbox5").value;
    document.getElementById("name_of_an_item").value = mango;
   }
   function cb6(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "199";
    var sriracha = document.getElementById("checkbox6").value;
    document.getElementById("name_of_an_item").value = sriracha;
   }
   function cb7(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "199";
    var gravy = document.getElementById("checkbox7").value;
    document.getElementById("name_of_an_item").value = gravy;
   }
   function cb8(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "199";
    var carpine = document.getElementById("checkbox8").value;
    document.getElementById("name_of_an_item").value = carpine;
   }
   function cb9(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "99";
    var fries = document.getElementById("checkbox9").value;
    document.getElementById("name_of_an_item").value = fries;
   }
   function cb10(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "115";
    var bsmilktea = document.getElementById("checkbox10").value;
    document.getElementById("name_of_an_item").value = bsmilktea;
   }
   function cb11(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "120";
    var bobatea = document.getElementById("checkbox11").value;
    document.getElementById("name_of_an_item").value = bobatea;
   }
   function cb12(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "120";
    var classic = document.getElementById("checkbox12").value;
    document.getElementById("name_of_an_item").value = classic;
   }
   function cb13(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "300";
    var hawaiian = document.getElementById("checkbox13").value;
    document.getElementById("name_of_an_item").value = hawaiian;
   }
   function cb14(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "310";
    var pesto = document.getElementById("checkbox14").value;
    document.getElementById("name_of_an_item").value = pesto;
   }
   function cb15(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "360";
    var meatpizza = document.getElementById("checkbox15").value;
    document.getElementById("name_of_an_item").value = meatpizza;
   }
   function cb16(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "330";
    var veganpizza = document.getElementById("checkbox16").value;
    document.getElementById("name_of_an_item").value = veganpizza;
   }
   function cb17(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "310";
    var cheese = document.getElementById("checkbox17").value;
    document.getElementById("name_of_an_item").value = cheese;
   }
   function cb18(){
    document.getElementById('name_of_an_item').value = "";
    document.getElementById('price').value = "";
    document.getElementById('price').value = "380";
    var tunnapizza = document.getElementById("checkbox18").value;
    document.getElementById("name_of_an_item").value = tunnapizza;
   }