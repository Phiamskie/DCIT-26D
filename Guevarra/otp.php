<html>
	<head>
		<title>
			
			</title>
			<style>
body {
	background: seagreen;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: rgb(114, 12, 12);
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

.ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;underline;
} 
	text-decoration: none;
	color: #444;
}
.ca:hover {
	text-decoration: 
</style>
		</head>
	<body>
		<form action="otpx.php" method="post">
			
			
		<p> Authentication Code </p>
          <?php if (isset($_GET['num1'])) { ?>
               <input type="text" 
                      name="num1" 
                      placeholder="Username"
                      value="<?php echo $_GET['num1']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="num1" 
                      placeholder="num1"><br>
          <?php }?>
			<input type="submit" value="Send">
		</form>
	<?php 
?>
		</body>
	</html>