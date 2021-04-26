<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="styleforlogin.css">
    <style>
   body{
  background-image: url(images/bg2.jpg);
  color:black;
  font-size: large;
  font-family: 'Arial';  
  }
#logo{
    position: relative;
    top: 30px;
    left: 880px;
    width: 150px;
    height: 150px;
}
.login{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background-color: #05445E;
        border-radius: 15px ;  
          
}  
h2{  
    text-align: center;  
    color: #277582;  
    padding: 20px;  
}  
label{  
    background-color:#D4F1F4;  
    font-size: 17px;  
}  
#Uname{  
    width: 400px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#Pass{  
    width: 400px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{
    position: relative;
    left: 50px;  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
  
  
}  
span{  
    color: white;  
    font-size: 17px;  
}  
a{  
    float: left;  
    background-color:#D4F1F4; ;  
} 
    </style>
</head>    
<body>  
  <img src="images/logo.png" id="logo" alt="aot">  
    <h2>Login Page</h2><br> 

    <div class="login">    
        <form id="login" method="get" action="login.php">    
        <label><b>User Name</b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password</b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="button" name="log" id="log" value="Log In Here">       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
        <a href="#"> Forgot Password</a>    
    </form>     
</div>    
</body>    
</html>     
