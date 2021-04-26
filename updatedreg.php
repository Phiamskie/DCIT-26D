<!DOCTYPE html>    
<html>    
<head>    
    <title>Registration Page</title>    
    <link rel="stylesheet" type="text/css" href="styles/styleupdatedreg.css">
    <style>
            body{
  background-image: url(images/bg2.jpg);
  color:black;
  font-size: 15px;
  }
.main-wrapper{
  left: 15px;
    height: auto;
}
#profile{
    width: 250px;
    height:250px;
    padding-left: 40px;
}
#choosefile{
    position: relative;
    left: 130px;
}
input[type="text"] {
    background-color:#D4F1F4; 
    height: 30px;
    width: 250px;

}

.basic-info{
    position: relative;
    top: 10px;
    left: 15px;
    width: 96%;
    height: 400px;
    border: solid 10px #05445E;

}
.personalinfo{
    position: relative;
    left: 300px;
    top: -300px;
    width: fit-content;
   
}
.contactinfo{
    position: relative;
    top: 40px;
    left: 15px;
    width: 96%;
    height:200px;
    border: solid 10px #05445E;
  }

.addressinfo{
    position: relative;
    top: 60px;
    left: 15px;
    width: 96%;
    height:300px;
    border: solid 10px #05445E;
}
legend{
    font-size: 30px;
}
.btn{
    position: relative;
    top: 80px;
    left: 15px;
    background: #75E6DA;
    font-size:30px;
    color: white;
    padding: 10px;
    width: 350px;
}
    </style>
</head>    
<body>  
    <div class="main_wrapper">
    <fieldset class="basic-info">
    <legend style="background: #DCEDC2"> Personal Info: </legend>
      <div>
        <img id="profile" src="images/profile.png" alt="profile"><br>
        <input type=button id="choosefile" value="Choose File"><br>
            <div class="personalinfo">
            <table>
		        <tr>
			      <td style="padding:15px">Firstname:</td>
			      <td><input type="text" name = "firstname" value=""></td>
                  <td style="padding:15px">Middle Name:</td>
			      <td><input type="text" name="middlename" value=""></td>
                  <td style="padding:15px"> Surname:</td>
			      <td><input type="text" name="surname" value=""></td>
                  <td style="padding:15px">Suffix:</td>
			      <td><input type="text" name="suffix" value=""></td>
			    </tr>
                <tr>
                  <td style="padding:20px"> Date of Birth: </td>
                  <td> <input type="date" id="start"  style="width: 250px; height:30px" name="trip-start" value="2018-07-22" min="1990-01-01" max="2022-12-31"></td>
                  <td style="padding:20px"> Gender:</td>
			      <td><select id="gender" name="gender" style="width: 250px; height:30px">
                      <option value="female">Female</option>
                      <option value="male">Male</option>
                      <option value="NotPrefertoSay">Not prefer to Say</option>
                </select></td>
                <td style="padding:20px"> Nationality: </td>
			      <td><select id="nationality" name="nationality" style="width: 250px; height:30px">
                      <option value="filipino">Filipino</option>
                      <option value="american">American</option>
                      <option value="korean">Korean</option>
                      <option value="japanese">Japanese</option>
                </select></td>
                  <td style="padding:20px"> Civil Status: </td>
			      <td><select id="civilstat" name="civilstat" style="width: 250px; height:30px">
                      <option value="single">Single</option>
                      <option value="married">Married</option>
                      <option value="widowed">Widowed</option>
                      <option value="divorce">Divorce</option>
                </select></td>
			    </tr>
		    </table>
            <hr width="1520px" size="35px" color="white">
            <table>
                <tr>
                <td style="padding:20px" >Department: </td>
			      <td><select id="dept" name="department" style="width: 350px; height:30px">
                      <option value="accounting">Accounting</option>
                      <option value="managing">Managing</option>
                      <option value="crew">Crew</option>
                </select></td>
                <td style="padding:20px"> Designation:</td>
			      <td><input type="text" name = "designation"  style="width: 350px;" value=""></td>
                <td style="padding:20px"> Qualified Department Status: </td>
			      <td><select id="dept" name="department" style="width: 320px; height:30px">
                      <option value="accounting">Accounting</option>
                      <option value="managing">Managing</option>
                      <option value="crew">Crew</option>
                </select></td>
                </tr>
                <tr>
                <td style="padding:20px">Employee Status</td>
			      <td><input type="text" name = "employeestat"  style="width: 350px;" value=""></td>
                  <td style="padding:20px"> Paydate </td>
                  <td> <input type="date" id="start"  style="width: 350px; height:30px" name="trip-start" value="2018-07-22" min="2000-01-01" max="2022-12-31"></td>
                  <td style="padding:20px">Employee Number</td>
			      <td><input type="text" name = "employeeno"  style="width: 300px;" value=""></td>
                </tr>

            </table>
             </div>
        </div>
        </fieldset>
	  <!-- End of Personal info -->

<!-- Start of Contact Info-->
    <fieldset class="contactinfo">
    <legend style="background: #DCEDC2"> Contact Info: </legend>
            <table style="border-spacing: 15px;">
		        <tr>
			      <td style="padding:15px">Contact No:</td>
			      <td><input type="text" name = "contactno" style="width: 650px;" value=""></td>
                  <td style="padding:15px">Email:</td>
			      <td><input type="text" name="email"  style="width: 650px;"value=""></td>
			    </tr>
                <tr>
                <td style="padding:20px"> Other Social Media: </td>
			      <td><select id="socmed" name="socmed" style="width: 650px; height:30px">
                      <option value="afb">Facebook</option>
                      <option value="twitter">Twitter</option>
                      <option value="insta">Instagram</option>
                      <option value="snap">Snapchat</option>
                </select></td>
                <td style="padding:15px">Social Media ID/NO.</td>
			    <td><input type="text" name="email"  style="width: 650px;"value=""></td>
			    </tr>
		    </table>
             </div>
        </fieldset>
 <!-- End of Contact Info-->
 <fieldset class="addressinfo">
    <legend style="background: #DCEDC2"> Address Info: </legend>
            <table style="border-spacing: 15px;">
		        <tr>
			      <td style="padding:15px">Address Line 1:</td>
			      <td><input type="text" name = "addline1" style="width: 1450px;" value=""></td>
			    </tr>
                <tr>
			      <td style="padding:15px">Address Line 2:</td>
			      <td><input type="text" name = "addline2" style="width: 1250px;" value=""></td>
			    </tr>
            </table>
            <table>
                <tr>
			      <td style="padding:15px">City/Municipality: </td>
			      <td><input type="text" name = "sitymunicipal" style="width: 650px;" value=""></td>
                  <td style="padding:15px">State/Province</td>
			      <td><input type="text" name="stateprovince"  style="width: 550px;"value=""></td>
			    </tr>
                <tr>
			      <td style="padding:15px">Country: </td>
                  <td><select id="socmed" name="country" style="width: 650px; height:30px">
                      <option value="afb">Philippines</option>
                      <option value="twitter">Japan</option>
                      <option value="insta">Korea</option>
                      <option value="snap">Europe</option>
                </select></td>
                  <td style="padding:15px">Zip Code: </td>
			      <td><input type="text" name="stateprovince"  style="width: 550px;"value=""></td>
			    </tr>
		    </table>
             </div>
        </fieldset>
    <div>  
                <button class="btn" name="update"> Update </button>
				<button class="btn" name="save"> Save </button>
				<button class="btn" name="cancel"> Cancel </button> 
    </div> 
    </div>    
</body>    
</html>